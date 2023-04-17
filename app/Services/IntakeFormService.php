<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\IntakeFormRepository;
use App\Repositories\ItemRepository;
use App\Repositories\ItemTypeRepository;
use App\Repositories\PostRepository;
use App\Services\AbstractService;
use Exception;
use Illuminate\Support\Facades\DB;

class IntakeFormService extends AbstractService {
    protected $itemRepository;
    protected $itemTypeRepository;

    public function __construct(
        IntakeFormRepository $intakeFormRepository,
        ItemRepository $itemRepository,
        ItemTypeRepository $itemTypeRepository
    ) {
        $this->repository = $intakeFormRepository;
        $this->itemRepository = $itemRepository;
        $this->itemTypeRepository = $itemTypeRepository;
    }

    public function create($data, array $options = [], User $user = null) {
        try {
            DB::beginTransaction();
            $intake = $data;
            $item = data_get($intake, 'item');
            $intake = $this->getRepository()->create($data, $options, $user);
            $item = $this->getItemRepository()->create($item, $options, $user);
            DB::commit();

            return $this->getById($intake->id);
        } catch (Exception $e) {
            DB::rollBack();
            throw new Exception($e, $e->getMessage());
        }
    }

    public function getItemRepository () {
        return $this->itemRepository;
    }
}