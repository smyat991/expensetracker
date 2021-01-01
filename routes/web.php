<?php

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

/*Route::get('/', function () {
    return view('welcome');
});
*/

//backend
Route::get('dashboard','BackendController@dashboard')->name('dashboardpage');

Route::resource('expense_categories','ExpenseCategoriesController');

Route::resource('income_categories','IncomeCategoriesController');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
