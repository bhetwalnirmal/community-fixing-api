<?php

namespace App\Repositories;

use App\Models\Item;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class ItemRepository extends AbstractRepository {
    public function getModelClass():string {
        return Item::class;
    }
}