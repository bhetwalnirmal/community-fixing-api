<?php

namespace App\Services;

use App\Services\AbstractService;
use App\Repositories\BorrowRepository;

class BorrowService extends AbstractService {
    protected $itemRepository;
    protected $itemTypeRepository, $intakePhotoRepository;

    public function __construct(
        BorrowRepository $borrowRepository
    ) {
        $this->repository = $borrowRepository;
    }
}