<?php

use App\Http\Controllers\BlogPostController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', 'BlogPostController@index');

Route::get('delete/{id}', [BlogPostController::class, 'delete']);

Route::group(array('https'), function(){

    Route::post('addblogpost', [BlogPostController::class,'add']);

);
}
