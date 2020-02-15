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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/monster/retrieve/{id}', 'API\Monster\MonsterAPIController@retrieve');
Route::get('/monster/list/', 'API\Monster\MonsterAPIController@list');

Route::get('/alignment/list/', 'API\Core\AlignmentAPIController@list');
Route::get('/size/list/', 'API\Core\SizeAPIController@list');
