<?php

namespace App\Http\Controllers;

use App\Http\Requests\Intakes\IntakePhotoRequest;
use App\Services\IntakePhotoService;
use Illuminate\Http\Response;

class IntakePhotoController extends Controller
{
    public function __construct(IntakePhotoService $service) {
        $this->service = $service;
    }

    public function create(IntakePhotoRequest $intakePhotoRequest)
    {
        $file = $intakePhotoRequest->file('intake_photo');

        $intake_photo = $this->getService()->create($file, [], $this->getUser());

        return new Response(['id' => $intake_photo->id]);
    }
}
