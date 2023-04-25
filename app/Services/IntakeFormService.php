<?php

namespace App\Services;

use App\Models\IntakeForm;
use App\Models\User;
use App\Repositories\IntakeFormRepository;
use App\Repositories\ItemRepository;
use App\Repositories\ItemTypeRepository;
use App\Repositories\PostRepository;
use App\Services\AbstractService;
use Exception;
use Illuminate\Support\Facades\DB;
use App\LocalFlysystem;

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
            $item = $this->getItemRepository()->create($item, $options, $user);
            $intake['item_id'] = $item->id;
            // todo - generate ITEM CODE automatically
            $intake['item_code'] = 'Di11';
            $intake = $this->getRepository()->create($intake, $options, $user);
            DB::commit();
            return $intake->refresh();
        } catch (Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

    public function getItemRepository () {
        return $this->itemRepository;
    }
}