<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\IntakeFormController;
use App\Http\Controllers\IntakePhotoController;
use App\Http\Controllers\PostController;
use App\Models\IntakeForm;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', [Controller::class, 'index']);

Route::group(['prefix' => 'intakes'], function () {
    Route::get('/',  [IntakeFormController::class, 'getAll']);
    Route::post('/create', [IntakeFormController::class, 'create']);

    Route::post('/photo', [IntakePhotoController::class, 'create']);
});
