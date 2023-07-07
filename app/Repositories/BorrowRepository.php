<?php

namespace App\Repositories;

use App\Models\Borrow;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class BorrowRepository extends AbstractRepository {
    public function getModelClass():string {
        return Borrow::class;
    }


    public function get(array $fields = [], array $args = [], User $user = null, array $scopes = []):Collection
    {
        $entities = $this->getListQuery($fields, $args, $user, $scopes)
            ->get();

        $entities = $this->applyFiltersAndSortsToEntities($entities, $fields, $args);

        return $entities;
    }
}