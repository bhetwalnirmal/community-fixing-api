<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class IntakeFormController extends Controller
{
    public function create(Request $request)
    {
        $data = $request->get('intake_form');
        // TODO insert auth user instead of null
        
        $intake_form = $this->getService()->create($data, [], null);

        return new Response(['intake_form' => $intake_form], 200, ['Content-Type' => 'application/json']);
    }
}
