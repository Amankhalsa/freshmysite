@extends('admin.admin_master')
@section('title', 'Team Create')

@section('admin')



<!-- form start  -->

<div class="col-lg-12">
<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>Create Team</h2>
    </div>
    <div class="card-body">
        <form  action="{{ route('store_team')}}" method="post"  enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">User Name</label>
                <input type="text" class="form-control" name="name" 
                 placeholder="Enter Name" />
              
            </div>
        
            <div class="form-group">
                <label for="exampleFormControlInput1">Designation </label>
                <input type="text" class="form-control" name="designation" 
                 placeholder="Enter Designation" />
              
            </div>
        
          
            
            <div class="form-group">
                <label for="exampleFormControlInput1">Image </label>
                <input type="file" class="form-control" name="image" />
              
            </div>

            <div class="form-footer pt-4 pt-5 mt-4 border-top">
                <button type="submit" class="btn btn-primary btn-default">Submit</button>
                <!-- <button type="submit" class="btn btn-secondary btn-default">Cancel</button> -->
            </div>
        </form>
    </div>
</div>


<!-- form end  -->

@endsection