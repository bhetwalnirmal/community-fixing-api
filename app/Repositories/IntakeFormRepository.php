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

        return $intake;
    }

    public function createBaseBuilder(array $fields = [], array $args = [], $user = null) {
        $query = parent::createBaseBuilder($fields, $args, $user);
        $query->whereNull('deleted_at');
        $query->with([
            'dropInStaff' => function ($query) {
                $query = $query->select('name');
            },
            'intakeImage' => function ($query) {
                $query = $query->select('id', 'intake_form_id', 'name')
                    ->whereNull('deleted_at');
            },
            'client' => function ($query) {
                $query = $query->select('name');
            },
            'item',
            'item.itemType',
            'takenStaff'
        ]);

        $query->orderBy('created_at', 'DESC');


        return $query;
    }


    protected function eagerLoadQuery($query, array $fields = [], array $args = [])
    {
        // if ($query->has('client')) {
        //     $query->with('client');
        // }

        return $query;
    }
}