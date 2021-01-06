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


<<<<<<< HEAD
//backend
Route::middleware('auth')->group(function() {
Route::get('dashboard','BackendController@dashboard')->name('dashboardpage');
=======
>>>>>>> cab87dd40f5251bb56f02009080fb76fee2b6b93


<<<<<<< HEAD
=======
Route::resource('income_categories','IncomeCategoriesController');
});


//frontend
Route::get('home1', 'FrontendController@home1')->name('home1');

<<<<<<< HEAD
/**Route::get('user','FrontendController@user')->name('user');
=======
>>>>>>> cab87dd40f5251bb56f02009080fb76fee2b6b93


// Route:: get('addCustomCategory', 'FrontendController@addCustomCategory')->name('addCustomCategory');

// Route:: get('addExpense', 'FrontendController@addExpense')-> name('addExpense');

// Route:: get('addIncome', 'FrontendController@addIncome')-> name('addIncome');


// Route:: get('customCategoryTable', 'FrontendController@customCategoryTable')-> name('customCategoryTable');

// Route::get('expenseTable', 'FrontendController@expenseTable')->name('expenseTable');

// Route::get('incomeTable', 'FrontendController@incomeTable')->name('incomeTable');


Route::get('user','FrontendController@user')->name('user');
//addexpense
Route::resource('expense_list','AddExpenseController');

Route::post('expense_filter','AddExpenseController@expense_filter');

//addincome
Route::resource('income_list','AddIncomeController');


//authentication
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');

//edituser

Route::get('useredit', 'UserController@useredit')->name('useredit');

Route::post('userupdate/{id}', 'UserController@userupdate')->name('userupdate');


//change password

Route:: get('changePassword', 'ChangePasswordController@index');

Route::post('changePassword', 'ChangePasswordController@store')->name('changePassword');

>>>>>>> 0f94ab80b1dbb2e4a432d58e70ffe990630148d2
