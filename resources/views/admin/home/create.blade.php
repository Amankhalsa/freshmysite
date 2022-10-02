@extends('admin.admin_master')
@section('title', 'Home Create')

@section('admin')



<!-- form start  -->

<div class="col-lg-12">
<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>Create Home About</h2>
    </div>
    <div class="card-body">
        <form  action="{{ route('store.about')}}" method="post" >
        @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">About title</label>
                <input type="text" class="form-control" name="title" 
                 placeholder="Enter title">
              
            </div>
        
    
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Short description</label>
                <textarea class="form-control" name="short_dis"  
                rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">long description</label>
                <textarea class="form-control" name="long_dis" 
                rows="3"></textarea>
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