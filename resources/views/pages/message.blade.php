@extends('admin.admin_master')
@section('title', 'Messagees')

@section('admin')
    <div class="py-12">
              <div class="container">
            <div class="row">
<div class="col-md-12">
<a href="{{route('add_contact')}}" class="float-right text-decoration-none">
    <button class="btn btn-info"> Add Message </button></a><br><br>



<!-- message  -->

<!-- end message  -->
                  <div >All messages</div>

    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>

        <!-- @php( $i =1) -->
@foreach($messages as $msg)
    <tr>
 <!-- <th scope="row">{{$i++}}</th> -->
 <td scope="row" width="10%">{{$loop->index+1}}</td>

 
  <td width="10%">{{ ucwords($msg->name)}}
  </td>
  <td width="10%">{{ ucwords($msg->email  )}}  <br>
  <span class="text-danger">  Created at 	{{Carbon\Carbon::parse($msg->created_at)->diffForHumans()}} </span></td>
  <td width="20%">{{ ucwords($msg->subject )}} </td> 
  {{-- <td width="10%">{{ ucwords(Str::limit( $msg->message ,100,$end='....') )}} </td>    --}}

  <td width="10%"><a href="{{url('message/delete/'.$msg->id)}}" 
 class="btn btn-danger">Del</a> </td>  


    </tr>
@endforeach

  </tbody>
</table>


           
             
              </div>
  

        
        </div>
        </div>



    </div>
@endsection
  