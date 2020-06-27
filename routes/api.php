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

Route::middleware('auth:api')->get('/user', 'UserController@AuthRouteAPI');

Route::resource('team', 'TeamController')->except(['show', 'create', 'edit']);
Route::resource('about', 'AboutController')->except(['show', 'create', 'edit']);
Route::resource('promo', 'PromoController')->except(['show', 'create', 'edit']);
Route::resource('statistic', 'StatisticController')->except(['show', 'create', 'edit']);
Route::resource('price', 'PriceController')->except(['show', 'create', 'edit']);
Route::resource('work', 'WorkController')->except(['show', 'create', 'edit']);
