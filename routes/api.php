<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
<<<<<<< HEAD
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
=======
*/
>>>>>>> ae55eabf7373d5ebda76e6e836bc54dae3446e3f
