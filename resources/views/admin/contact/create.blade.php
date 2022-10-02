@extends('admin.admin_master')
@section('title', 'Add Contact')

@section('admin')



<!-- form start  -->

<div class="col-lg-12">
<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>Create Contact </h2>
    </div>
    <div class="card-body">
        <form  action="{{route('store_Contacts')}}" method="post" >
        @csrf
        
        
    
            <div class="form-group">
                <label for="exampleFormControlInput1">Contact email</label>
                <input type="email" class="form-control" name="email" 
                 placeholder="Enter your  email id "  required/>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Contact phone</label>
                <input type="text" class="form-control" name="phone" 
                 placeholder="Enter your 10 digits phone number" maxlength="10" required/>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Contact Address</label>
                <textarea class="form-control" name="address"   placeholder="Enter your  Address"
                rows="3" required></textarea>
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