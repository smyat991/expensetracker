@extends('frontend_master')
@section('content')

 <div class="page-breadcrumb bg-white">
      <div class="row align-items-center">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
             <!-- <h4 class="page-title text-uppercase font-medium font-14">Dashboard</h4>    -->
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <div class="d-md-flex">
            <ol class="breadcrumb ml-auto">
              <a href="{{route('expense_list.create')}}" class="btn btn-success float-right">Add New</a>
            </ol>
          </div>
        </div>
      </div>
  </div> 


<div class="container-fluid"> 
  <main class="app-content">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
            <h3 class="d-inline-block">Expense List</h3>
            

            <div class="table-responsive mt-3">
              <table class="table table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Note</th>
                    <th>User_id</th>
                    <th>Expense_category_id</th>
                    <th>Custom_category_id</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php $i=1; @endphp
                  @foreach($expense_Records as $expense_Record)
                  <tr>
                    <td>{{$i++}}</td> 
                    <th>{{$expense_Record->date}}</th>
                    <th>{{$expense_Record->amount}}</th>
                    <th>{{$expense_Record->note}}</th>
                    <th>{{$expense_Record->user_id}}</th>
                    <th>{{$expense_Record->expense_category->category_name}}</th> <!--use relationname-->
                    <th>{{$expense_Record->custom_category_id}}</th>
                    <th>
                      <a href="{{route('expense_list.edit',$expense_Record->id)}}" class="btn btn-warning btn-sm">Edit</a>
                    </th>
                  </tr>
                  @endforeach
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