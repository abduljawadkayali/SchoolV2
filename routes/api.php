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
*/
Route::get('/ttakip', 'takipController@index'); 

Route::post('/ttakip', 'takipController@store');

Route::get('/ttakip/{id}', 'takipController@edit');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
