<?php

namespace App\Http\Controllers;

use App\Services\BorrowService;
use Illuminate\Http\Response;
use Optimus\Bruno\LaravelController;

class BorrowController extends Controller
{
    public function __construct (BorrowService $service) {
        $this->service = $service;
    }

    public function getAll () {
        $resourceOptions = $this->parseResourceOptions();

        return new Response(['borrows' => $this->getService()->getAll()], 200, ['Content-Type' => 'application/json']);
    }
}
