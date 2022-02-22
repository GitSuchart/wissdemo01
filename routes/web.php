<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/chart', function () {
    return view('chart');
});


Route::get('/basic-report', function () {
    return view('basic-report');
});

Route::view('main','main');
Route::post('main',[MainController::class,'getData']);

Route::get('/basic-report-api', function () {
    return view('basic-report-api');
});