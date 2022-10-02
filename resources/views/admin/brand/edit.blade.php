@extends('admin.admin_master')
@section('title', 'Edit Brand')

@section('admin')
    <div class="py-12">
              <div class="container">
            <div class="row">
              
   <div class="col-md-12">
      <div class="card">
     <div class="card-header">Edit Brand</div>

<div class="card-body">
<form action="{{ url('brand/update/'.$brand->id)}}" method="post" enctype="multipart/form-data">
  <input type="hidden" name="old_image" value="{{$brand->brand_image}}">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Update brand Name</label>
    <input type="text" name="brand_name" class="form-control" id="exampleInputEmail1"
     aria-describedby="emailHelp" value="{{$brand->brand_name}}">
    @error('brand_name') 
    <span class="text-danger">{{ $message }} </span>
    @enderror 
   
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Update brand Image</label>
    <input type="file" name="brand_image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$brand->brand_image}}">
    @error('brand_image') 
    <span class="text-danger">{{ $message }} </span>
    @enderror 
   
  </div>
<div class="form-group">

  <img src="{{asset($brand->brand_image)}}" style="width: 300px;height:200px;" >


</div>

  <button type="submit" class="btn btn-primary">Update brand</button>
</form>
</div>
 </div>
    </div>

        
        </div>
        </div>
    </div>
@endsection
 