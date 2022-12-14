<?php

use Illuminate\Http\Request;
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

Route::namespace('Api')->group(function() {
    Route::get('/datatable/nasabah', 'ApiController@datatableNasabah');
    Route::get('/datatable/result', 'ApiController@datatableResult');
    Route::get('/datatable/pass-result', 'ApiController@datatablePassResult');
    Route::get('/datatable/saw-result', 'ApiController@datatableSawResult');

    Route::get('/nasabah/input/pembayaran', 'ApiController@inputPembayaran');
});
