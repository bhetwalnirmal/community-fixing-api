<?php

namespace App\Http\Controllers;

use App\Services\AbstractService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Optimus\Bruno\LaravelController;

use App\Models\User;
class Controller extends LaravelController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected $service;
    
    
    public function index()
    {
        return response()->json([
            'title' => config('app.name'),
            'version' => config('app.version').'+'.config('app.build'),
        ]);
    }

    public function getService ():AbstractService {
        return $this->service;
    }

    public function getUser():User {
        return User::find(1);
    }

}
