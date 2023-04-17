<?php

namespace App\Repositories;

use App\Models\IntakeForm;
use App\Models\User;

class IntakeFormRepository extends AbstractRepository {
    public function getModelClass():string {
        return IntakeForm::class;
    }

    public function create(array $data, array $fields = [], User $user = null):IntakeForm
    {
        $intake = $this->getModel();

        $intake->fill($data);

        $intake->save();

        return $this->getById($intake->id);
    }

    public function createBaseBuilder(array $fields = [], array $args = [], $user = null) {
        $query = parent::createBaseBuilder($fields, $args, $user);
        $query->whereNull('deleted_at');
        $query->with([
            'dropInStaff' => function ($query) {
                $query = $query->select('name');
            },
            'client' => function ($query) {
                $query = $query->select('name');
            },
            'item',
            'item.itemType',
            'takenStaff' => function ($query) {
                $query = $query->select('name');
            }
        ]);


        return $query;
    }


    protected function eagerLoadQuery($query, array $fields = [], array $args = [])
    {
        if ($query->has('client')) {
            $query->with('client');
        }

        return $query;
    }
}