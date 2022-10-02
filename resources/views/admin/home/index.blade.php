@extends('admin.admin_master')
@section('title', 'Home view')

@section('admin')
    <div class="py-12">
              <div class="container">
            <div class="row">
<div class="col-md-12">
<a href="{{route('add.about')}}" class="float-right text-decoration-none">
    <button class="btn btn-info"> Add About</button></a><br><br>
<div class="card">

<!-- message  -->

<!-- end message  -->
                  <div class="card-header">All About  data</div>
                <table class="table">
  <thead>
    <tr>
      <th scope="col" width="5%">Sl</th>
      <th scope="col" width="10%"> Home title</th>
      <th scope="col" width="25%">short Description  </th>
      <th scope="col" width="25%">long Description  </th>

   
      <th scope="col" width="15%">Action</th>

    </tr>
  </thead>

  <tbody>
    <!-- @php( $i =1) -->
@foreach($home_about as $about)
    <tr>
 <!-- <th scope="row">{{$i++}}</th> -->
 <th scope="row">{{$loop->index+1}}</th>


  <td class="text-primary font-weight-bold">{{ ucwords($about->title)}} </td>
  <td class="text-success font-weight-bold">{{ ucwords($about->short_dis	)}} </td>
  <td class="text-dark font-weight-bold">{{ ucwords($about->long_dis	)}} </td>   


  <td class="font-weight-bold">
<a href="{{url('about/edit/'.$about->id)}}" class="btn btn-info">Edit</a>
<a href="{{url('about/delete/'.$about->id)}}" onclick="return confirm('Are you confirm for delete ?')"
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
  