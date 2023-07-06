<?php

namespace App\Repositories;

use App\Models\Borrow;
use App\Models\User;

class BorrowRepository extends AbstractRepository {
    public function getModelClass():string {
        return Borrow::class;
    }
}