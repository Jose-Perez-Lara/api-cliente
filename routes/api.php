<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\V1\UsuariosController;

Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\api\V1'], function () {
    Route::apiResource('usuarios', UsuariosController::class);
});
