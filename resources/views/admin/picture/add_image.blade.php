@extends('admin.admin_master')
@section('title', 'Add Images')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>
</head>
<style type="text/css">
.img-container img {
display: block;
max-width: 100%;
}
.preview {
overflow: hidden;
width: 160px; 
height: 160px;
margin: 10px;
border: 1px solid red;
}
.modal-lg{
max-width: 1000px !important;
}
</style>
@section('admin')
<div class="row">
    <div class="col-md-6">
        <form action="{{route('store.picture_cat')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="imagecat">Enter Image Category</label>
              <input type="text" class="form-control" name="name"  placeholder="Enter Category">
              @error('name')
              <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
    <div class="col-md-6">
        <form action="{{route('store.picture')}}" method="post"  enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="Category">Select Category</label>
              <select class="form-control" id="Category" name="image_cat_id"> 
              <option  value="">Choose Category</option>
          @foreach($getCategory as $val )
                <option value="{{$val->id}}">{{$val->name}}</option>
          @endforeach
              </select>
              @error('image_cat_id')
              <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>

            <div class="form-group">
                <label for="Upload">Upload Multiple Image</label>
                <input type="file" name="image[]" class="form-control-file" id="Upload" multiple=""> 
              </div>
              

              @error('image')
              <div class="text-danger">{{ $message }}</div>
               @enderror
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Category  name</th>
        
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($getCategory as $key => $val )
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$val->name}}</td>
        <td class="font-weight-bold">
            <a href="{{route('edit.image_category', $val->id)}}" class="btn btn-info">Edit</a>
            <a href="" onclick="return confirm('Are you confirm for delete ?')" class="btn btn-danger">Delete</a>        
      </td>
      </tr>
    @endforeach

    </tbody>
  </table>

<div class="container mt-5">

    <h6>Please Selete Image For Cropping</h6>
    <div class="card">
    <div class="card-body">
    <h5 class="card-title">Please Selete Image For Cropping</h5>
    <input type="file" name="image" class="image">
    </div>
    </div>  
    </div>
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="modalLabel">Crop Image Before Upload </h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">×</span>
    </button>
    </div>
    <div class="modal-body">
    <div class="img-container">
    <div class="row">
    <div class="col-md-8">
    <img id="image" src="https://avatars0.githubusercontent.com/u/3456749">
    </div>
    <div class="col-md-4">
    <div class="preview"></div>
    </div>
    </div>
    </div>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="button" class="btn btn-primary" id="crop">Crop</button>
    </div>
    </div>
    </div>
    </div>
    <script>
    var $modal = $('#modal');
    var image = document.getElementById('image');
    var cropper;
    $("body").on("change", ".image", function(e){
    var files = e.target.files;
    var done = function (url) {
    image.src = url;
    $modal.modal('show');
    };
    var reader;
    var file;
    var url;
    if (files && files.length > 0) {
    file = files[0];
    if (URL) {
    done(URL.createObjectURL(file));
    } else if (FileReader) {
    reader = new FileReader();
    reader.onload = function (e) {
    done(reader.result);
    };
    reader.readAsDataURL(file);
    }
    }
    });
    $modal.on('shown.bs.modal', function () {
    cropper = new Cropper(image, {
          // aspectRatio: 1,
          viewMode: 3,
            autoCropArea : 1,
            fillColor: '#fff',
            preview: '.preview',

    });
    }).on('hidden.bs.modal', function () {
    cropper.destroy();
    cropper = null;
    });
    $("#crop").click(function(){
    canvas = cropper.getCroppedCanvas({
        imageSmoothingEnabled: true,
              imageSmoothingQuality: 'high',
    });
    canvas.toBlob(function(blob) {
    url = URL.createObjectURL(blob);
    var reader = new FileReader();
    reader.readAsDataURL(blob); 
    reader.onloadend = function() {
    var base64data = reader.result; 
    $.ajax({
    type: "POST",
    dataType: "json",
    url: "crop-image-upload",
    data: {'_token': $('meta[name="_token"]').attr('content'), 'image': base64data},
    success: function(data){
    console.log(data);
    $modal.modal('hide');
    // alert("Crop image successfully uploaded");
    if(data.success){
      window.location = '{{ route('view.picture') }}'
}
    }
    });
    }
    });
    })
    </script>
@endsection