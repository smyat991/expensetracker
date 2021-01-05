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
              <h4 class="card-title"> Add Custom Category

              <div class="card-body">
              
                  <form method="post" action="{{route('custom_list.store')}}" enctype="multipart/form-data" class="mt-3">
                    @csrf
                    <div class="col-md-4">
                    <div class="form-group">
                      <label for="category_name">Category Name</label>
                      <input type="text" class="form-control" name="category_name"  id="category_name"  value="" >
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