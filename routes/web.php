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

// Route::get('/', function () {
//     return view('welcome');
// });


//backend
Route::middleware('role:admin')->group(function() {
Route::get('dashboard','BackendController@dashboard')->name('dashboardpage');

Route::resource('expense_categories','ExpenseCategoriesController');

Route::resource('income_categories','IncomeCategoriesController');
});


//frontend
Route::get('home1', 'FrontendController@home1')->name('home1');

<<<<<<< Updated upstream
Route:: get('user', 'FrontendController@user')-> name('user');
=======
//frontend
>>>>>>> Stashed changes

Route:: get('addCustomCategory', 'FrontendController@addCustomCategory')->name('addCustomCategory');

Route:: get('addExpense', 'FrontendController@addExpense')-> name('addExpense');

Route:: get('addIncome', 'FrontendController@addIncome')-> name('addIncome');

<<<<<<< Updated upstream
Route:: get('customCategoryTable', 'FrontendController@customCategoryTable')-> name('customCategoryTable');

Route::get('expenseTable', 'FrontendController@expenseTable')->name('expenseTable');

Route::get('incomeTable', 'FrontendController@incomeTable')->name('incomeTable');


//authentication
Auth::routes(['verify' => true]);
=======





//authentication
Auth::routes();
>>>>>>> Stashed changes

Route::get('/home', 'HomeController@index')->name('home');


