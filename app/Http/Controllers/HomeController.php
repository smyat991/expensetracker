<?php

namespace App\Http\Controllers;

use App\Expense_Record;
use App\Income_Record;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function  __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $user = Auth::user();
        $expense_Records=Expense_Record::where('user_id', '=', Auth::user()->id)->where('date','=',date('Y-m-d'))->get();

        $income_Records=Income_Record::where('user_id', '=', Auth::user()->id)->where('date','=',date('Y-m-d'))->sum('amount'); 

        return view('frontend.home1',compact('expense_Records','income_Records'));
    }

    public function differentsearch(Request $request)
    {

        // dd($request);

        $startdate= $request->startdate;

        // dd($startdate);
        $enddate= $request->enddate;

            // dd($enddate);

        $expenses = Expense_Record::whereBetween('date', [$startdate, $enddate])-> where('user_id', '=', Auth::user()->id)->get();

         $expense = Expense_Record::whereBetween('date', [$startdate, $enddate])-> where('user_id', '=', Auth::user()->id)->sum('amount');
        // dd($expenses);

        // dd($differentsearch);

        $income =  Income_Record::whereBetween('date', [$startdate, $enddate])-> where('user_id', '=', Auth::user()->id)->sum('amount');

        // dd($income);

             return response()-> json(['expenses'=> $expenses,'income'=> $income, 'expense' => $expense]);
    }

}
