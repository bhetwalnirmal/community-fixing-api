<?php

namespace App\Repositories;

use App\Models\IntakeForm;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class IntakeFormRepository extends AbstractRepository {
    public function getModelClass():string {
        return IntakeForm::class;
    }

    public function get(array $fields = [], array $args = [], User $user = null, array $scopes = []): Collection
    {
        $query = $this->getListQuery($fields, $args, $user, $scopes);
        $query->whereNull('deleted_at');
        $query->with([
            'item' => function ($query) {
                $query->with('itemType');
            }
        ]);

        return $query->get();
    }
}