<?php

namespace App\Http\Controllers;

use App\Expense_Record;
use App\Expense_Category;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;



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
        $expense_Records=Expense_Record::where('user_id', '=', Auth::user()->id)->where('date','=',date('Y-m-d'))->get(); //show data with current date

      

       //dd($expense_Filter);
        /* $expense_Records=Expense_Record::where('user_id', '=', Auth::user()->id)->where('date','=','2021-01-05')->get();*/
      
       $total =DB::table('expense__records')
        ->where('user_id', '=', Auth::user()->id)
       /* ->groupby(month('date'))*/
        ->sum('amount');

        //dd($total);

       
        /*$total=DB::select('select year(date) as year, month(date) as month, sum(amount) as total_amount from expense__records group by year(date), month(date)');*/


        /*$total=Auth::user()->expense_records->sum('amount');*/

        
        //dd($total);
        //return response()->json(['foo'=>'bar']);

        return view('frontend.expense.expense_list',compact('expense_Records','total'));

        

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
        $filterdate= $request->filterdate;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Expense_Record  $expense_Record
     * @return \Illuminate\Http\Response
     */
    public function edit(Expense_Record $expense_Record,$id)
    {   
        $expense_Categories=Expense_Category::all();
        $expense_record=Expense_Record::find($id);
        return view('frontend.expense.edit_expense',compact('expense_record','expense_Categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Expense_Record  $expense_Record
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expense_Record $expense_Record,$id)
    {
        $request->validate([
            

            
            'amount' => 'required',
            'note' => 'required',
            'expense_category_id' => 'required',
            
             
        ]);

       

        // store data
        $expense_Category=Expense_Record::find($id);
        
        $expense_Record->amount = $request->amount;
        $expense_Record->note = $request->note;
        $expense_Record->expense_category_id = $request->expense_category_id;
        $expense_Record->save();

        // redirect
        return redirect()->route('expense_list.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Expense_Record  $expense_Record
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expense_Record $expense_Record,$id)
    {
        
       $expense_record=Expense_Record::find($id);
       $expense_record->delete();
        // redirect
        return redirect()->route('expense_list.index');
        
    }

    public function expense_filter(Request $request)
    {

       $expense_filter  = $request->filter_date;
       $expense_records=Expense_Record::where('date', '=', $expense_filter)->get();

        //dd($expense_records);
        /*return response()
            ->json(['expense_records' => $expense_records , 'expense_filter' => $expense_filter]);*/

            return response(json_decode($expense_records));


    }
}
