@extends('frontend_master')
@section('content')

<div class="container-fluid mt-5"> 
  <main class="app-content">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
            <h5 class="d-inline-block my-5">Your Expense List</h5>
            

            <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Expense Table
                  <a href="{{route('expense_list.create')}}"><button type="button" class="btn btn-success btn-round"><i class="nc-icon nc-simple-add">Add</i></button></h4>
                  </a>

                    <label for="filterdate">Date:</label>
                     <input type="date" id="filterdate" name="filterdate">
                  
                  

              </div>
              <div class="card-body">
                <div class="table-responsive">

                  <table class="table" id="searchlisttable">
                    
                  </table>
                  <table class="table" id="listtable">
                    <thead class=" text-primary">
                      <th>
                        ID
                      </th> 
                      <th>
                        Amount
                      </th>
                      <th>
                        Date
                      </th>
                      <th>
                        Note
                      </th>
                      <th>
                        Expense_Category_ID
                      </th>
                      <th class="align-right">
                        Action
                      </th>
                    </thead>
                </div>
              </div>
            </div>
            <tbody>
                  @php $i=1; @endphp
                  @foreach($expense_Records as $expense_Record)
                  <tr>
                    <td>{{$i++}}</td> 
                    
                    <th>{{$expense_Record->amount}}</th>
                    <th>{{$expense_Record->date}}</th>
                    <th>{{$expense_Record->note}}</th>
                    <th>{{$expense_Record->expense_category->category_name}}</th> <!--use relationname-->
                    <th>
                      <a href="{{route('expense_list.edit',$expense_Record->id)}}" class="btn btn-warning btn-round">Edit</a>
                       <form method="post" action="" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <input type="submit" name="btnsubmit" class="btn btn-danger btn-round" value="Delete">
                      </form> 
                    </th>
                  </tr>
                  @endforeach
                  <tr>
                    <th>Total Amount</th>
                    <td>{{$total}}</td>
                  </tr>
                </tbody>
              </table>
          </div>
        </div>
      </div>   
    </div>  
                  
</div>


@endsection