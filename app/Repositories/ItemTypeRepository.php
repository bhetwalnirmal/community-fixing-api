<?php

namespace App\Repositories;

use App\Models\Item;
use App\Models\ItemType;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class ItemTypeRepository extends AbstractRepository {
    public function getModelClass():string {
        return ItemType::class;
    }
}