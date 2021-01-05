<?php

namespace App\Http\Controllers;

use App\Custom_Category;
use Illuminate\Http\Request;

class AddCustomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $custom_Categories=Custom_Category::all();
        return view('frontend.custom.custom_list',compact('custom_Categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('frontend.custom.add_custom');
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
            'category_name' => 'required',
             
        ]);

       

        // store data
        $custom_Category = new Custom_Category;
        $custom_Category->category_name = $request->category_name;
        $custom_Category->save();

        // redirect
        return redirect()->route('custom_list.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Custom_Category  $custom_Category
     * @return \Illuminate\Http\Response
     */
    public function show(Custom_Category $custom_Category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Custom_Category  $custom_Category
     * @return \Illuminate\Http\Response
     */
    public function edit(Custom_Category $custom_Category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Custom_Category  $custom_Category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Custom_Category $custom_Category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Custom_Category  $custom_Category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Custom_Category $custom_Category)
    {
        //
    }
}
