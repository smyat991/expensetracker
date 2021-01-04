@extends('frontend_master')
@section('content')

<div class="container-fluid mt-5"> 
  <main class="app-content">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
            <h5 class="d-inline-block">Your Income List</h5> 
            

            <div class="table-responsive mt-3">
              <table class="table table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th>#</th>
                    <th>Amount</th>
                    <th>Note</th>
                    <th>User_id</th>
                    <th>Income_category_id</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  {{-- @php $i=1; @endphp
                  @foreach($expense_Records as $expense_Record)
                  <tr>
                    <td>{{$i++}}</td> 
                    <th>{{$expense_Record->amount}}</th>
                    <th>{{$expense_Record->note}}</th>
                    <th>{{$expense_Record->user_id}}</th>
                    <th>{{$expense_Record->expense_category->category_name}}</th> <!--use relationname-->
                    <th>
                      <a href="{{route('expense_list.edit',$expense_Record->id)}}" class="btn btn-warning btn-sm">Edit</a>
                       <form method="post" action="" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <input type="submit" name="btnsubmit" class="btn btn-danger btn-sm" value="Delete">
                      </form> 
                    </th>
                  </tr>
                  @endforeach --}}
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>   
    </div>    
  </main>
</div>


@endsection