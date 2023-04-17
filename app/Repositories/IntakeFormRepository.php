<?php

namespace App\Repositories;

use App\Models\IntakeForm;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

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

    public function get(array $fields = [], array $args = [], User $user = null, array $scopes = []): Collection
    {
        $query = $this->getListQuery($fields, $args, $user, $scopes);

        return $query->get();
    }

    public function createBaseBuilder(array $fields = [], array $args = [], $user = null) {
        $query = parent::createBaseBuilder();
        $query->whereNull('deleted_at');

        $query->with([
            'item' => function ($query) {
                $query->with('itemType');
            },
            'dropInStaff' => function ($query) {
                $query->select('name');
            },
            'client' => function ($query) {
                $query->select('name');
            }
        ]);

        return $query;
    }

}