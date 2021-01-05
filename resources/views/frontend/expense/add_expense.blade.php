@extends('frontend_master')
@section('content')

<style type="text/css">
 .heading-image 
{ 
background-image: url(https://i.stack.imgur.com/jGlzr.png); 
background-size: cover; 
height: 175px; 
-webkit-box-shadow: none; 
box-shadow: none; 
border: 0px; 
border-radius: 100px;
} 

</style>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="tile">
              <div class="tile-body">

                <div class="col-md-12">
            <div class="card">
              <div class="card-header heading-image">
              </div>
              <h4 class="card-title"> Add Expense </h4>

              <div class="card-body">
              
                  <form method="post" action="{{route('expense_list.store')}}" enctype="multipart/form-data" class="mt-3">
                    @csrf
                    <div class="col-md-4">
                    <div class="form-group">
                      <label for="amount">Amount:</label>
                      <input type="number" class="form-control" name="amount"  id="amount"  value="" >
                    </div>
                  </div>
                  <div class="col-md-4">
                      <label for="note">Note:</label>
                      <textarea class="form-control" name="note" id="note" cols="40" rows="5" placeholder="Description..."></textarea>
                 </div>
                  <div class="col-md-4">
                    <label for="note">Date:</label>
                     <input type="date" id="expense_date" name="expense_date" value="anything you like" >
                  </div>
                    <div class="col-md-4">
                    <div class="form-group">
                      <label for="brandidInput">Expense Category</label>
                      <select name="expense_category_id" id="expense_category_id" class="form-control">
                        @foreach($expense_Categories as $expense_Category)
                        <option value="{{$expense_Category->id}}"> {{$expense_Category->category_name}}</option>
                         @endforeach
                      </select>
                    </div>
                  </div> 
                    <div class="form-group col-md-4">
                        <input type="submit" name="btn-submit" value="Save" class="btn btn-primary btn-round align-right">
                        <input type="button" name="btn-submit" value="cancel" class="btn btn-secondary btn-round align-right">
                    </div>


                  </form>
                </div>
                </div>
              </div>
            </div>   
          </div>    
      </div>

   
@endsection