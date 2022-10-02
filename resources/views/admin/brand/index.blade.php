@extends('admin.admin_master')
@section('title', 'Brand')

@section('admin')

 
    <div class="py-12">
              <div class="container">
            <div class="row">
              <div class="col-md-8">
                <div class="card">
<!-- message  -->

<!-- end message  -->
                  <div class="card-header">All Brand</div>
                <table class="table">
  <thead>
    <tr>
      <th scope="col">SL no</th>
      <th scope="col"> Brand Name</th>
      <th scope="col">Brand image </th>
      <th scope="col">Created At</th>
      <th scope="col">Action</th>

    </tr>
  </thead>

  <tbody>
    <!-- @php( $i =1) -->
@foreach($get_brand as $brand)
    <tr>
 <!-- <th scope="row">{{$i++}}</th> -->
 <th scope="row">{{$loop->index+1}}</th>


  <td class="text-success font-weight-bold">{{ ucwords($brand->brand_name)}} </td>

  <td class="font-weight-bold"><img src="{{asset($brand->brand_image)}}" style="height:40px; width:50px;" alt="" class="img_view"></td>     

<!-- if you use query builder use this method for human date  -->
  <td class="font-weight-bold"> @if($brand->created_at == NULL)
      <span class="text-danger bd-highlight">No date set</span>
      @else
        {{Carbon\Carbon::parse($brand->created_at)->diffforHumans()}}
 @endif
      </td>
  <td class="font-weight-bold">
<a href="{{url('brand/edit/'.$brand->id)}}" class="btn btn-info">Edit</a>
<a href="{{url('brand/delete/'.$brand->id)}}" onclick="return confirm('Are you confirm for delete')" class="btn btn-danger">Delete</a>


  </td>     

    </tr>
@endforeach
  </tbody>
</table>
{{$get_brand->Links()}}
           
                </div>
              </div>
   <div class="col-md-4">
      <div class="card">
     <div class="card-header">Add Brand</div>
<div class="card-body">
<form action="{{ route('store.brand')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">brand Name</label>
    <input type="text" name="brand_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    @error('brand_name') 
    <span class="text-danger">{{ $message }} </span>
    @enderror 
    <span></span>
  </div>
<!-- for image  -->
<div class="form-group">
    <label for="exampleInputEmail1">brand Image</label>
    <input type="file" name="brand_image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    @error('brand_image') 
    <span class="text-danger">{{ $message }} </span>
    @enderror 
    <span></span>
  </div>
  <button type="submit" class="btn btn-primary">Add Brand </button>
</form>
</div>
 </div>
    </div>      
        </div>
        </div>
    </div>
@endsection
  