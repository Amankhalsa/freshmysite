@extends('admin.admin_master')
@section('title', 'Change')

@section('admin')

<div class="card-body">

<div class="card-header bg-warning text-white font-weight-bold">
<h2>Change Password </h2>
</div>
<form class="form-pill" action="{{route('pass_update')}}" method="post"> 
@csrf
    <div class="form-group">
        <label for="exampleFormControlInput3">Current Password : </label>
        <input  class="form-control" id="password" type="password" name="old_pass" 
         placeholder="Current Password">

@error('old_pass') 
<span class="text-danger">{{ $message }} </span>
@enderror 

    </div>
    <div class="form-group">
        <label for="exampleFormControlPassword3">New  Password : </label>
        <input id="password" type="password"  class="form-control" name="password"  
         placeholder="New  Password">

@error('password') 
<span class="text-danger">{{ $message }} </span>
@enderror

    </div>
    <div class="form-group">
        <label for="exampleFormControlPassword3"> Confirm Password :</label>
        <input id="password_confirmation" type="password"  name="password_confirmation" 
        class="form-control" placeholder="Confirm Password">

@error('password_confirmation') 
<span class="text-danger">{{ $message }} </span>
@enderror 

    </div>
<button class="btn btn-danger" tyle="submit"> Change Password </button>
</form>
</div>

@endsection