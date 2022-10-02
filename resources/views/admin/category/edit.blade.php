<x-app-layout>
    <x-slot name="header">
         <meta charset="UTF-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <!-- {{ __('Dashboard') }} -->

        </h2>
    </x-slot>
    <div class="py-12">
              <div class="container">
            <div class="row">
              
   <div class="col-md-8">
      <div class="card">
     <div class="card-header">Edit Category</div>
<div class="card-body">
<form action="{{ url('category/update/'.$cate2->id)}}" method="post">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Update Name</label>
    <input type="text" name="categories_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$cate2->categories_name}}">
    @error('category_name') 
    <span class="text-danger">{{ $message }} </span>
    @enderror 
    <span></span>
  </div>
  <button type="submit" class="btn btn-primary">Update Category</button>
</form>
</div>
 </div>
    </div>

        
        </div>
        </div>
    </div>
</x-app-layout>
 