<?php

namespace App\Services;

use App\Models\User;
use Exception;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Repositories\AbstractRepository;

abstract class AbstractService
{
    protected $repository;

    public function create($data, array $options = [], User $user = null)
    {
        return $this->getRepository()->create($data, $options, $user);
    }

    public function delete($id, User $user)
    {
        $entity = $this->getRequestedEntity($id, [], $user);

        try {
            $entity->delete();

            $result = true;
        } catch (Exception $e) {
            $result = false;
        }

        return [
            'result' => $result,
        ];
    }

    public function getAll(array $fields = [], array $args = [], User $user = null)
    {
        return $this->getRepository()->get($fields, $args, $user);
    }

    public function getById($id, array $fields = [], User $user = null)
    {
        $entity = $this->getRequestedEntity($id, $fields, $user);

        if (!$entity) {
            throw new NotFoundHttpException();
        }

        if ($entity && $user && $permission = static::VIEW_PERMISSION_KEY) {
            if (!$user->hasPermission($permission, $entity)) {
                throw new AccessDeniedHttpException('Permission denied.');
            }
        }

        return $entity;
    }

    public function paginate(array $fields = [], array $args = [], User $user = null)
    {
        return $this->getRepository()->getListQuery($fields, $args, $user);
    }

    public function update($data = [], array $options = [], User $user = null)
    {
        $id = data_get($data, $this->getRepository()->getEntityKey());

        $entity = $this->getRequestedEntity($id, [], $user);

        if ($entity) {
            $entity = $this->getRepository()->update($entity, $data, $options, $user);
        }

        return $entity;
    }

    protected function getRepository(): AbstractRepository
    {
        return $this->repository;
    }

    protected function getRequestedEntity($id, array $options = [], $user = null)
    {
        return $this->getRepository()->getById($id, $options, $user);
    }
}

