<?php

namespace App\Services;

use App\LocalFlysystem;
use App\Models\IntakeForm;
use App\Models\IntakeFormImage;
use App\Repositories\IntakePhotoRepository;
use App\Services\AbstractService;
use Carbon\Carbon;
use Exception;
use IntakeImages;

class IntakePhotoService extends AbstractService {
    public function __construct(IntakePhotoRepository $intakePhotoRepository) {
        $this->repository = $intakePhotoRepository;
    }

    public function create($data, array  $options = array(),  $user= null) {
        try {
            // get the extension of the uploaded file
            $extension = $data->getClientOriginalExtension();
            
            // use the extension to generate a unique filename, for example:
            $timestamp = time();
            $random = mt_rand(100000, 999999);
            $filename = "{$timestamp}-{$random}.{$extension}";

            $localFlysystem = LocalFlysystem::getFileSystem(IntakeForm::getIntakeFormImagePath());

            $localFlysystem->write($filename, file_get_contents($data));

            $data = [
                'name' => $filename,
                'deleted_at' => Carbon::now(),
            ];

            return $this->getRepository()->create($data, $options, $user);

        } catch (Exception $e) {
            throw $e;
        }
    }
}