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
Route::get('home1', 'HomeController@index')->name('home1');
Route:: post('differentsearch', 'HomeController@differentsearch');


// Route:: get('addCustomCategory', 'FrontendController@addCustomCategory')->name('addCustomCategory');

// Route:: get('addExpense', 'FrontendController@addExpense')-> name('addExpense');

// Route:: get('addIncome', 'FrontendController@addIncome')-> name('addIncome');


// Route:: get('customCategoryTable', 'FrontendController@customCategoryTable')-> name('customCategoryTable');

// Route::get('expenseTable', 'FrontendController@expenseTable')->name('expenseTable');

// Route::get('incomeTable', 'FrontendController@incomeTable')->name('incomeTable');


Route::get('user','FrontendController@user')->name('user');
//addexpense
Route::resource('expense_list','AddExpenseController');

Route:: post('expense_filter', 'AddExpenseController@expense_filter');

//addincome
Route::resource('income_list','AddIncomeController');

//addcustom
Route::resource('custom_list','AddCustomController');

//authentication
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');

//edituser

Route::get('useredit', 'UserController@useredit')->name('useredit');

Route::post('userupdate/{id}', 'UserController@userupdate')->name('userupdate');


//change password

// Route:: get('changePassword', 'ChangePasswordController@index');

// Route::post('changePassword', 'ChangePasswordController@store')->name('changePassword');


// logout

Route:: get('/logout', 'LogoutController@logout');

