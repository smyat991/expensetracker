@extends('frontend_master');
@section('content')
	
    
    <div class="row">
      <div class="col-md-12">
        <div class="class">
          <div class="card-header">
            <h4 class="card-title">Add Expense</h4>
          </div>  
            
            <form method="post" action="{{route('expense_list.update',$expense_record->id)}}" enctype="multipart/form-data" class="mt-3">
              @csrf
              @method('PUT')
              <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="number" class="form-control" name="amount"  id="amount" value="{{$expense_record->amount}}">
              </div>
              <div> 
              	<label for="note">Note:</label>
              	<input class="form-control" name="note" id="note" cols="40" rows="5" placeholder="Description..." value="{{$expense_record->note}}">
          	 </div>
              <div class="form-group">
                <label for="brandidInput">Expense Category</label>
                <select name="expense_category_id" id="expense_category_id" class="form-control">
                  @foreach($expense_Categories as $expense_Category)
                  <option value=""> {{$expense_Category->category_name}}</option>
                   @endforeach
                </select>
              </div> 
              <div class="form-group">
                  <input type="submit" name="btn-submit" value="Save" class="btn btn-primary">
              </div>
            </form>
          </div>
        </div>
      </div>   
    </div>    
  </main>
</div>
	
@endsection
