@extends('backend_master')
@section('content')

	<div class="page-breadcrumb bg-white">
	    <div class="row align-items-center">
	      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
	           <!-- <h4 class="page-title text-uppercase font-medium font-14">Dashboard</h4>    -->
	      </div>
	      <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
	        <div class="d-md-flex">
	          <ol class="breadcrumb ml-auto">
	          	<a href="{{route('expense_categories.index')}}" class="btn btn-success float-right">Back</a>
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
			          		<div>
			           			<h3>Expense Category Create Form</h3>
			           
					            <form method="post" action="{{route('expense_categories.store')}}" enctype="multipart/form-data" class="mt-3">
					              @csrf
					              <div class="form-group row">
					                <label for="nameInput" class="col-sm-2 col-form-label">Expense Name:</label>
					                <div class="col-sm-8">
					                	<input type="text" name="category_name" class="form-control" id="nameInput">	
					            	</div>
					              </div>

					              <div class="form-group">
					                <input type="submit" name="btn-submit" value="Save" class="btn btn-primary">
					              <input type="button" name="btn-cancel" value="Cancel" class="btn btn-light" onclick="document.getElementById('nameInput').value = ''" >
					            </form>
			            	</div>
			          	</div>
			        </div>
      			</div>   
    		</div>
    	</main>
    </div>  


@endsection