@extends('admin.admin_master')
@section('title', 'Edit Slider')

@section('admin')



<!-- form start  -->

<div class="col-lg-12">
<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>Create Slider</h2>
    </div>
    <div class="card-body">
        
        <form  action="{{ url('slider/update/'.$updatesliders->id)}}" method="post" enctype="multipart/form-data">
        @csrf
  <input type="hidden" name="old_image" value="{{'public/'.$updatesliders->image}}">

        <!-- slider title   -->
            <div class="form-group">
                <label for="exampleFormControlInput1">Slider title</label>
                <input type="text" class="form-control" name="title" 
                 placeholder="Enter title" value="{{$updatesliders->title}}">
                 @error('title') 
                <span class="text-danger">{{ $message }} </span>
                @enderror 
            </div>
        <!-- slider title   -->
        
    <!-- text area  -->
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Slider description</label>
                <textarea class="form-control" name="description"  
                rows="3" > {{ $updatesliders->description	 }}</textarea>
              
                
                @error('description') 
                <span class="text-danger">{{ $message }} </span>
                @enderror 
        </div>
    <!-- text area  -->
            <div class="form-group">
                <label for="exampleFormControlFile1" >Slider Image</label>
                <input type="file" class="form-control-file" 
                 name="image" value="{{$updatesliders->image}}" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
            </div>
<!-- Image view div  -->
<div class="form-group">
  <img src="{{asset($updatesliders->image)}}" style="width: 300px;height:200px;" id="output">
</div>
<!-- Image view div end  -->

            <div class="form-footer pt-4 pt-5 mt-4 border-top">
                <button type="submit" class="btn btn-primary btn-default">Update</button>
                <!-- <button type="submit" class="btn btn-secondary btn-default">Cancel</button> -->
            </div>
        </form>
    </div>
</div>


<!-- form end  -->

@endsection