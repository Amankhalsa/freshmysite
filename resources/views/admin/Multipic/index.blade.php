@extends('admin.admin_master')
@section('title', 'Multi pic')

@section('admin')

 <!-- @if(session('sucess'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('sucess')}}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif -->
 
    <div class="py-12">
              <div class="container">
            <div class="row">
              <div class="col-md-8">
               <div class="card-group">
                @foreach($images as $multi)
<div class="col-md-4 mt-5" style="background-color:#f5f6fa;">
  <div class="card" >

    <img src="{{asset($multi->image)}}">
    
    <!-- check box 
  <div class="form-check form-check-inline position-relative" >
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="{{$multi->id}}" >
  <label class="form-check-label" for="inlineCheckbox1">{{$loop->index}}</label>
</div>
check box  -->
<a href="{{url('multi/delete/'.$multi->id)}}" onclick="return confirm('Are you confirm for delete ?')"  class="badge badge-danger"> 

<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" 
class="bi bi-trash-fill " viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg>Delete</a>
  </div>
  

</div>

                @endforeach
                 

               </div>




              </div>
   <div class="col-md-4">
      <div class="card">
     <div class="card-header">Multi Images</div>
<div class="card-body">
<form action="{{route('store.image')}}" method="post" enctype="multipart/form-data">
  @csrf

<!-- for image  -->
<div class="form-group">
    <label for="exampleInputEmail1">brand Image</label>
    <input type="file" name="image[]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" multiple="">
    @error('image') 
    <span class="text-danger">{{ $message }} </span>
    @enderror 
    <span></span>
  </div>



  <button type="submit" class="btn btn-primary ">Add Image</button>
</form><br>
<button  class="btn btn-danger ">Delete images </button>

</div>
 </div>
    </div>

        
        </div>
        </div>



    </div>

    @endsection