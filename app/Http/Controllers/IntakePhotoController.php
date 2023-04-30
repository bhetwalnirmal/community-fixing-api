<?php

namespace App\Http\Controllers;

use App\Http\Requests\Intakes\IntakePhotoRequest;
use App\Services\IntakePhotoService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class IntakePhotoController extends Controller
{
    public function __construct(IntakePhotoService $service) {
        $this->service = $service;
    }

    public function create(Request $intakePhotoRequest)
    {
        if ($intakePhotoRequest->has('intake_image')) {

            $file = $intakePhotoRequest->file('intake_image');

            $intake_photo = $this->getService()->create($file, [], $this->getUser());

            return new Response(['id' => $intake_photo->id]);
        } else {
            throw new Exception();
        }
    }
}
