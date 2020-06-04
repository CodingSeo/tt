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


Route::get('/', [
    'as' => 'index',
    'uses' => 'ttcontroller@index',
]);


Route::post('/test', [
    'as' => 'test',
    'uses' => 'ttcontroller@test',
]);

Route::post('/auth', [
    'as' => 'auth',
    'uses' => 'ttcontroller@auth',
]);
