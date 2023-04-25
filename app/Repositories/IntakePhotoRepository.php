<?php

namespace App\Repositories;

use App\Models\IntakeFormImage;

class IntakePhotoRepository extends AbstractRepository {
    public function getModelClass():string {
        return IntakeFormImage::class;
    }
}