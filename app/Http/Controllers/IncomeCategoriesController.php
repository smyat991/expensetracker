<?php

namespace App\Http\Controllers;

use App\Income_Category;
use Illuminate\Http\Request;

class IncomeCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $income_categories=Income_Category::all();
        return view('backend.income_categories.index',compact('income_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.income_categories.income_create');
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
        $income_category = new Income_Category;
        $income_category->category_name = $request->category_name;
        $income_category->save();

        // redirect
        return redirect()->route('income_categories.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Income_Category  $income_Category
     * @return \Illuminate\Http\Response
     */
    public function show(Income_Category $income_Category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Income_Category  $income_Category
     * @return \Illuminate\Http\Response
     */
    public function edit(Income_Category $income_Category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Income_Category  $income_Category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Income_Category $income_Category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Income_Category  $income_Category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Income_Category $income_Category)
    {
        $income_Category->delete();
        

        // redirect
        return redirect()->route('income_categories.index');
    }
}
