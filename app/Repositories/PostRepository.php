<?php

namespace App\Repositories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class PostRepository extends AbstractRepository {
    public function getModelClass():string {
        return Post::class;
    }

    public function get(array $fields = [], array $args = [], User $user = null, array $scopes = []): Collection
    {
        $query = $this->getListQuery($fields, $args, $user, $scopes);
        $query->whereNull('deleted_at');


        return $query->get();
    }
}