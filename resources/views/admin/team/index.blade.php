@extends('admin.admin_master')
@section('title', 'Our Team')

@section('admin')
<a href="{{route('create_team')}}" class=" text-decoration-none">
    <button class="btn btn-info"> Add Team </button></a>
<hr>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col" >#</th>
      <th scope="col">Name</th>
      <th scope="col">Designation </th>
      <th scope="col" >Image</th>
      <th scope="col" >Action</th>

    </tr>
  </thead>
  <tbody>
   @foreach($get_team as $fill_name)
    <tr>
      <th scope="row">{{$loop->index+1}}</th>
      <td>{{ $fill_name->name}}</td>
      <td>{{ $fill_name->designation}}</td>
      <td> <img src="{{asset($fill_name->image)}}" style="height:40px; width:50px;" alt="" class="img_view"></td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
  