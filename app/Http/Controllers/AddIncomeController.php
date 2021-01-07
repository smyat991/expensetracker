<?php

namespace App\Http\Controllers;

use App\Income_Record;
use App\Income_Category;
use Illuminate\Http\Request;
use Auth;

class AddIncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $income_Records=Income_Record::all();
        return view('frontend.income.income_list',compact('income_Records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $income_Categories=Income_Category::all();
        return view('frontend.income.add_income',compact('income_Categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            
            
            'amount' => 'required',
            'expense_date' => 'required',
            'note' => 'required',
            'income_category_id' => 'required',
            
             
        ]);

       

        // store data
        $income_Record = new Income_Record;
       /* $income_Record->date=date('Y-m-d');*/
        $income_Record->amount = $request->amount;
        $income_Record->date = $request->expense_date;
        $income_Record->note = $request->note;
        $income_Record->user_id = Auth::id();
        $income_Record->income_category_id = $request->income_category_id;
        $income_Record->save();

        // redirect
        return redirect()->route('income_list.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Income_Record  $income_Record
     * @return \Illuminate\Http\Response
     */
    public function show(Income_Record $income_Record)
    {
        return view('frontend.income.add_income');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Income_Record  $income_Record
     * @return \Illuminate\Http\Response
     */
    public function edit(Income_Record $income_Record)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Income_Record  $income_Record
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Income_Record $income_Record)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Income_Record  $income_Record
     * @return \Illuminate\Http\Response
     */
    public function destroy(Income_Record $income_Record)
    {
        //
    }
}
