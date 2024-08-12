<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\fromFlutter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
*/

Route::post("/user/addItem",[UserController::class,"addItem"])->name("user.addItem")->middleware(fromFlutter::class);


