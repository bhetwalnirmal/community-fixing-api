<?php

namespace App\Services;

use App\Repositories\IntakeFormRepository;
use App\Repositories\PostRepository;
use App\Services\AbstractService;

class IntakeFormService extends AbstractService {
    public function __construct(IntakeFormRepository $intakeFormRepository) {
        $this->repository = $intakeFormRepository;
    }
}