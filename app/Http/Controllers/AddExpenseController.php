<?php

namespace App\Http\Controllers;

use App\Expense_Record;
use App\Expense_Category;
use Illuminate\Http\Request;
use Auth;

class AddExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $user = Auth::user();
        $expense_Records=Expense_Record::where('user_id', '=', Auth::user()->id)->get();;
        return view('frontend.expense.expense_list',compact('expense_Records'));


        // $price = DB::table('orders')
        //         ->where('finalized', 1)
        //         ->avg('price');


        $total = DB:: table('expense_records')
                -> where('date', created_at)
                -> sum('amount');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $expense_Categories=Expense_Category::all();
        return view('frontend.expense.add_expense',compact('expense_Categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
         //validation
        $request->validate([
            

            'expense_date' => 'required',
            'amount' => 'required',
            'note' => 'required',
            'expense_category_id' => 'required',
            
             
        ]);

       

        // store data
        $expense_Record = new Expense_Record;
        $expense_Record->date=$request->expense_date;
        $expense_Record->amount = $request->amount;
        $expense_Record->note = $request->note;
        $expense_Record->user_id = Auth::id();
        $expense_Record->expense_category_id = $request->expense_category_id;
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
        return view('frontend.expense.edit_expense',compact('expense_Record','expense_Categories'));
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
        
       

        // redirect
        
    }
}
