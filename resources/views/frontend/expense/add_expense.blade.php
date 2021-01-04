@extends('frontend_master')
@section('content')


      <div class="content">
        <div class="row">
          <div class="col-md-4">
            <div class="tile">
              <div class="tile-body">
              
                  <form method="post" action="{{route('expense_list.store')}}" enctype="multipart/form-data" class="mt-3">
                    @csrf
                    <div class="form-group">
                      <label for="amount">Amount:</label>
                      <input type="number" class="form-control" name="amount"  id="amount" value="">
                    </div>
                    <div> 
                      <label for="note">Note:</label>
                      <textarea class="form-control" name="note" id="note" cols="40" rows="5" placeholder="Description..."></textarea>
                   </div>
                   {{-- <div class="form-group">
                      <label for="amount">User_id:</label>
                      <input type="number" class="form-control" name="user_id"  id="user_id" value="">
                    </div> --}}
                    <div class="form-group">
                      <label for="brandidInput">Expense Category</label>
                      <select name="expense_category_id" id="expense_category_id" class="form-control">
                        @foreach($expense_Categories as $expense_Category)
                        <option value="{{$expense_Category->id}}"> {{$expense_Category->category_name}}</option>
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
      </div>

   
@endsection