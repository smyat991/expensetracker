<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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




