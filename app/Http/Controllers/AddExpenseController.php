<?php

namespace App\Http\Controllers;

use App\Expense_Record;
use App\Expense_Category;
use Illuminate\Http\Request;

class AddExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $expense_Records=Expense_Record::all();
        return view('frontend.expense.expense_list',compact('expense_Records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $expense_Categories=Expense_Category::all();
        return view('frontend.expense.addexpense',compact('expense_Categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //validation
        $request->validate([
            
            'date' => 'required',
            'amount' => 'required',
            'note' => 'required',
            'user_id' => 'required',
            'expense_category_id' => 'required',
            'custom_category_id' => 'required'
             
        ]);

       

        // store data
        $expense_Record = new Expense_Record;
        $expense_Record->date = $request->date;
        $expense_Record->amount = $request->amount;
        $expense_Record->note = $request->note;
        $expense_Record->user_id = $request->user_id;
        $expense_Record->expense_category_id = $request->expense_category_id;
        $expense_Record->custom_category_id = $request->custom_category_id;
        $expense_Record->save();

        // redirect
        return redirect()->route('expense_list.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Expense_Record  $expense_Record
     * @return \Illuminate\Http\Response
     */
    public function show(Expense_Record $expense_Record)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Expense_Record  $expense_Record
     * @return \Illuminate\Http\Response
     */
    public function edit(Expense_Record $expense_Record)
    {
        $expense_Categories=Expense_Category::all();
        return view('frontend.expense.editexpense',compact('expense_Record','expense_Categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Expense_Record  $expense_Record
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expense_Record $expense_Record)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Expense_Record  $expense_Record
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expense_Record $expense_Record)
    {
        //
    }
}
