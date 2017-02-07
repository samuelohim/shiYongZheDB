@extends('layouts.main')

@section('content')

 <form class="form-horizontal" action = '/syz/{{$user->id}}' method = 'POST'>
  {!! csrf_field() !!}
  <input type = 'hidden' name = '_method' value = 'PUT'>
  <fieldset>
    <legend>Legend</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name = 'name' id="inputName" placeholder="{{$user->name}}">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name = 'email' id="inputEmail" placeholder="{{$user->email}}">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" name = 'password' id="inputPassword" placeholder="Password">
        <div class="checkbox">
        </div>
      </div>
    </div> 
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>

@endsection