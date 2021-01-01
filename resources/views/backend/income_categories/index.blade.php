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
              <a href="{{route('income_categories.create')}}" class="btn btn-success float-right">Add New</a>
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
            <h3 class="d-inline-block">Income Categories List</h3>
            

            <div class="table-responsive mt-3">
              <table class="table table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @php $i=1; @endphp
                  @foreach($income_categories as $income_category)
                  <tr>
                    <td>{{$i++}}</td>
                    <th>{{$income_category->category_name}}</th>
                    <th>
                      <a href="{{route('income_categories.edit',$income_category->id)}}" class="btn btn-warning btn-sm">Edit</a>
                      
                      <form method="post" action="{{route('income_categories.destroy',$income_category->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <input type="submit" name="btnsubmit" class="btn btn-danger btn-sm" value="Delete">
                      </form>
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