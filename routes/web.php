<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'App\Http\Controllers\MainController@home');

Route::get('/recipes', 'App\Http\Controllers\MainController@recipes')->name('recipes');

Route::get('/addRecipe', 'App\Http\Controllers\MainController@addRecipe');

Route::post('/addRecipe/check', 'App\Http\Controllers\MainController@addRecipeCheck');

Route::get('/ingredients', 'App\Http\Controllers\MainController@ingredients');

Route::get('/about', 'App\Http\Controllers\MainController@about');
