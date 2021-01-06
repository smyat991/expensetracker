@extends('frontend_master')

@section('content')

<form method="POST" action="{{ route ('userupdate', $users->id)  }}">

  <input type="hidden" name="_token" value="{{ csrf_token() }}" />

  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" value="{{ $users->name }}" class="form-control"/>
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" value="{{ $users->email }}" class="form-control"/>
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection