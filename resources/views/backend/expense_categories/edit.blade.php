@extends('backend_master')
@section('content')

	<div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                          
      </div>
      <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <div class="d-md-flex">
          <ol class="breadcrumb ml-auto">
              <li><a href="{{route('dashboardpage')}}">Dashboard</a></li>
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
			           <h4>Expense Category Edit Form</h4>
			           <a href="{{route('expense_categories.index')}}" class="btn btn-success float-right">Back</a>
			            <br>
			            
			            <form method="post" action="{{route('expense_categories.update',$expense_Category->id)}}" enctype="multipart/form-data" class="mt-3">
			            @csrf
			            @method('PUT')
			            
			          
			              <div class="form-group">
			                <label for="nameInput">Expense Name:</label>
			                <input type="text" name="category_name" class="form-control" id="nameInput" value="{{$expense_Category->category_name}}">
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