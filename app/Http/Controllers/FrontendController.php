<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< Updated upstream

class FrontendController extends Controller
{
    public function home1($value='')
  {
    return view('frontend.home1');
  }

    public function user($value='')
  {
    return view('frontend.user');
  }

  public function addCustomCategory($value='')
  {
    return view('frontend.addCustomCategory');
  }

  public function addExpense($value='')
  {
    return view('frontend.addExpense');
  }

  public function addIncome($value='')
  {
    return view('frontend.addIncome');
  }

  public function customCategoryTable($value='')
  {
    return view('frontend.customCategoryTable');
  }

  public function expenseTable($value='')
  {
    return view('frontend.expenseTable');
  }

  public function incomeTable($value='')
  {
    return view('frontend.incomeTable');
  }
}


=======
use App\Expense_Category;

class FrontendController extends Controller
{
     public function index($value='')
  {
    return view('frontend.expense.index');
  }

  public function expense_list($value='')
  {
    return view('frontend.expense.expense_list');
  }
 
}
>>>>>>> Stashed changes
