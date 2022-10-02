@extends('admin.admin_master')
@section('title', 'Contact view')

@section('admin')
    <div class="py-12">
              <div class="container">
            <div class="row">
<div class="col-md-12">
<a href="{{route('add_contact')}}" class="float-right text-decoration-none">
    <button class="btn btn-info"> Add Contact </button></a><br><br>
<div class="card">

<!-- message  -->
<!-- @if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('success')}}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif -->
<!-- end message  -->
                  <div class="card-header">All Contact  data</div>
                <table class="table">
  <thead>
    <tr>
      <th scope="col" width="5%">Sl</th>
      <th scope="col" width="25%"> Address</th>
      <th scope="col" width="20%">Email  </th>
      <th scope="col" width="15%">Phone </th>

   
      <th scope="col" width="15%">Action</th>

    </tr>
  </thead>

  <tbody>
    <!-- @php( $i =1) -->
@foreach($contacts as $con)
    <tr>
 <!-- <th scope="row">{{$i++}}</th> -->
 <th scope="row">{{$loop->index+1}}</th>

 
  <td class="text-success font-weight-bold">{{ ucwords($con->address)}} </td>
  <td class="text-primary font-weight-bold">{{ ucwords($con->email	)}} </td>
  <td class="text-dark font-weight-bold">{{ ucwords($con->phone	)}} </td>   


  <td class="font-weight-bold">
<a href="{{url('contact/edit/'.$con->id)}}" class="btn btn-info">Edit</a>
<a href="{{url('contact/delete/'.$con->id)}}" onclick="return confirm('Are you confirm for delete ?')"
 class="btn btn-danger">Delete</a>


  </td>     

    </tr>
@endforeach
  </tbody>
</table>

           
                </div>
              </div>
  

        
        </div>
        </div>



    </div>
@endsection
  