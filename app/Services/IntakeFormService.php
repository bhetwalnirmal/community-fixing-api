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
use App\Models\IntakeFormImage;
use App\Repositories\IntakePhotoRepository;
use IntakeImages;

class IntakeFormService extends AbstractService {
    protected $itemRepository;
    protected $itemTypeRepository, $intakePhotoRepository;

    public function __construct(
        IntakeFormRepository $intakeFormRepository,
        ItemRepository $itemRepository,
        ItemTypeRepository $itemTypeRepository,
        IntakePhotoRepository $intakePhotoRepository
    ) {
        $this->repository = $intakeFormRepository;
        $this->itemRepository = $itemRepository;
        $this->itemTypeRepository = $itemTypeRepository;
        $this->intakePhotoRepository = $intakePhotoRepository;
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

            info($data['intake_image_ids']);
            if (array_key_exists('intake_image_ids', $data)) {
                $ids = $data['intake_image_ids'];
                if ($ids != null)
                 {
                    $id = $ids[0];
                    $intakeImage = IntakeFormImage::find($id);
                    $intakeImage->intake_form_id = $intake->id;
                    $intakeImage->deleted_at = null;
                    $intakeImage->save();
                }
            }

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

    public function getIntakePhotoRepository () {
        return $this->getIntakePhotoRepository();
    }
}