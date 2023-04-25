<?php

namespace App\Http\Controllers;

use App\Http\Requests\Intakes\CreateIntakeRequest;
use App\Services\IntakeFormService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class IntakeFormController extends Controller
{
    public function __construct(IntakeFormService $service) {
        $this->service = $service;
    }

    public function create(CreateIntakeRequest $request)
    {
        info($request);
        $data = $request->get('intake_form');
        if ($request->has('intake_image')) {
            $data['intake_image'] = $request->get('intake_image');
        }
        // TODO insert auth user instead of null
        $intake_form = $this->getService()->create($data, [], null);

        return new Response(['intake_form' => $intake_form], 200, ['Content-Type' => 'application/json']);
    }

    public function getAll () {
        return new Response(['intakes' => $this->getService()->getAll()], 200, ['Content-Type' => 'application/json']);
    }
}
