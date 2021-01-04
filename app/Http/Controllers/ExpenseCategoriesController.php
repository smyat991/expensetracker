<?php

namespace App\Http\Controllers;

use App\Expense_Category;
use Illuminate\Http\Request;

class ExpenseCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expense_Categories=Expense_Category::all();
        return view('backend.expense_categories.index',compact('expense_Categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.expense_categories.create');
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
            'category_name' => 'required',
             
        ]);

       

        // store data
        $expense_Category = new Expense_Category;
        $expense_Category->category_name = $request->category_name;
        $expense_Category->save();

        // redirect
        return redirect()->route('expense_categories.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Expense_Category  $expense_Category
     * @return \Illuminate\Http\Response
     */
    public function show(Expense_Category $expense_Category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Expense_Category  $expense_Category
     * @return \Illuminate\Http\Response
     */
    public function edit(Expense_Category $expense_Category)
    {
        return view('backend.expense_categories.edit',compact('expense_Category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Expense_Category  $expense_Category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expense_Category $expense_Category)
    {
         $request->validate([
            'category_name' => 'required',
             
        ]);

       

        // store data
       
        $expense_Category->category_name = $request->category_name;
        $expense_Category->save();

        // redirect
        return redirect()->route('expense_categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Expense_Category  $expense_Category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expense_Category $expense_Category)
    {
        
         $expense_Category->delete();
       

        // redirect
        return redirect()->route('expense_categories.index');
    }
}
