<?php

use App\Http\Controllers\PagesController;
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

Route::group(['controller' => PagesController::class, 'as' => 'pages.'], function () {
    Route::get('/', 'welcome')->name('welcome');
    Route::get('/quiz', 'quiz')->name('quiz');;
    Route::post('/result', 'result')->name('result');;
    Route::get('/result', 'result')->name('result');;
    Route::post('/claim', 'claim')->name('claim');;
    Route::get('/claim', 'claim')->name('claim');;
    Route::get('/{locale}', 'language')->name('language');
});
