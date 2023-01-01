@extends('admin.admin_master')
@section('title', 'Add Images')


@section('admin')
<div class="row">
    <div class="col-md-6">
        <form action="{{route('update.picture_cat',$editCategory->id)}}" method="post">
            @csrf
            <div class="form-group">
              <label for="imagecat">Enter Image Category</label>
              <input type="text" class="form-control" name="name"  value="{{$editCategory->name}}"  placeholder="Enter Category">
              @error('name')
              <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
  
</div>


@endsection