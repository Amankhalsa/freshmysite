@extends('admin.admin_master')
@section('title', 'Slider')

@section('admin')

 
    <div class="py-12">
              <div class="container">
            <div class="row">




              <div class="col-md-12">
                
              <a href="{{route('add.slider')}}" class="float-right text-decoration-none"><button class="btn btn-info"> Add image </button></a><br><br>
                <div class="card">


<!-- message  -->

<!-- end message  -->
                  <div class="card-header">All Slider</div>
                <table class="table">
  <thead>
    <tr>
      <th scope="col" width="5%">Sl</th>
      <th scope="col" width="10%"> Slider title</th>
      <th scope="col" width="25%">Slider Description  </th>
      
      <th scope="col" width="25%">Image</th>
      <th scope="col" width="15%">Action</th>

    </tr>
  </thead>

  <tbody>
    <!-- @php( $i =1) -->
@foreach($sliders as $slider)
    <tr>
 <!-- <th scope="row">{{$i++}}</th> -->
 <th scope="row">{{$loop->index+1}}</th>


  <td class="text-success font-weight-bold">{{ ucwords($slider->title)}} </td>
  <td class="text-success font-weight-bold">{{ ucwords($slider->description	)}} </td>


  <td class="font-weight-bold">
    <img src="{{asset($slider->image)}}" style="height:100px; width:200px;" alt="" class="img_view"></td>     


  <td class="font-weight-bold">
<a href="{{url('slider/edit/'.$slider->id)}}" class="btn btn-info">Edit</a>
<a href="{{url('slider/delete/'.$slider->id)}}" onclick="return confirm('Are you confirm for delete')" class="btn btn-danger">Delete</a>


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
  