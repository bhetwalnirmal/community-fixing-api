<?php

namespace App\Http\Controllers;

use App\Services\BorrowService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BorrowController extends Controller
{
    public function __construct (BorrowService $service) {
        $this->service = $service;
    }

    public function create (Request $request) {
        $data = $request->get('borrow');

        return new Response(['borrow' => $this->getService()->create($data)], 200, ['Content-Type' => 'application/json']);
    }

    public function getAll () {
        $resourceOptions = $this->parseResourceOptions();
        
        return new Response(['borrows' => $this->getService()->getAll([], $resourceOptions)], 200, ['Content-Type' => 'application/json']);
    }
}
