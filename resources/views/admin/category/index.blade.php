<x-app-layout>
    <x-slot name="header">
         <meta charset="UTF-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <!-- {{ __('Dashboard') }} -->
   Hi... <B > 
  <span style="text-transform: uppercase; color: green;">
    {{ Auth::user()->name}}
  </span></B>
  <br>User Id :
  <span style="text-transform: uppercase; color: navy;">
    
    {{ Auth::user()->email}}
  </span></B>

<b style='float: right;'>Total items:
<span class="badge badge-danger"> {{count($cate)}}</span>
</b>
        </h2>
    </x-slot>
    <div class="py-12">
              <div class="container">
            <div class="row">
              <div class="col-md-8">
                <div class="card">
<!-- message  -->

<!-- end message  -->
                  <div class="card-header">All Category</div>
                <table class="table">
  <thead>
    <tr>
      <th scope="col">SL no</th>
      <th scope="col">Category Name</th>
      <th scope="col">User </th>
      <th scope="col">Created At</th>
      <th scope="col">Action</th>

    </tr>
  </thead>

  <tbody>
    <!-- @php( $i =1) -->
@foreach($cate as $category)
    <tr>
 <!-- <th scope="row">{{$i++}}</th> -->
 <th scope="row">{{ $cate->firstitem()+$loop->index}}</th>


  <td class="text-success font-weight-bold">{{ ucwords($category->categories_name)}} </td>

  <td class="font-weight-bold">{{ $category->user->name}}</td>     

<!-- if you use query builder use this method for human date  -->
  <td class="font-weight-bold"> @if($category->created_at == NULL)
      <span class="text-danger bd-highlight">No date set</span>
      @else
        {{Carbon\Carbon::parse($category->created_at)->diffforHumans()}}
 @endif
      </td>
  <td class="font-weight-bold">
<a href="{{url('category/edit/'.$category->id)}}" class="btn btn-info">Edit</a>
<a href="{{url('softdelete/category/'.$category->id)}}" class="btn btn-danger">Delete</a>


  </td>     

    </tr>
@endforeach
  </tbody>
</table>
{{$cate ->Links()}}
           
                </div>
              </div>
   <div class="col-md-4">
      <div class="card">
     <div class="card-header">Add Category</div>
<div class="card-body">
<form action="{{ route('store.category')}}" method="post">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Category Name</label>
    <input type="text" name="categories_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    @error('category_name') 
    <span class="text-danger">{{ $message }} </span>
    @enderror 
    <span></span>
  </div>
  <button type="submit" class="btn btn-primary">Add Category</button>
</form>
</div>
 </div>
    </div>

        
        </div>
        </div>

<!-- 2nd div  trash part -->
<div class="container">
            <div class="row">
              <div class="col-md-8">
                <div class="card">

                  <div class="card-header">Trash List</div>
                <table class="table">
  <thead>
    <tr>
      <th scope="col">SL no</th>
      <th scope="col">Category Name</th>
      <th scope="col">User </th>
      <th scope="col">Created At</th>
      <th scope="col">Action</th>

    </tr>
  </thead>

  <tbody>
    <!-- @php( $i =1) -->
@foreach($trashcate as $category)
    <tr>
 <!-- <th scope="row">{{$i++}}</th> -->
 <th scope="row">{{ $cate->firstitem()+$loop->index}}</th>


  <td class="text-success font-weight-bold">{{ Ucwords($category->categories_name)}} </td>

  <td class="font-weight-bold">{{ $category->user->name}}</td>     

<!-- if you use query builder use this method for human date  -->
  <td class="font-weight-bold"> @if($category->created_at == NULL)
      <span class="text-danger bd-highlight">No date set</span>
      @else
        {{Carbon\Carbon::parse($category->created_at)->diffforHumans()}}
 @endif
      </td>
  <td class="font-weight-bold">
<a href="{{url('category/restore/'.$category->id)}}" class="btn btn-info">Restore</a>
<a href="{{url('pdelete/category/'.$category->id)}}" class="btn btn-danger">P Delete</a>


  </td>     

    </tr>
@endforeach
  </tbody>
</table>
{{$trashcate ->Links()}}
           
                </div>
              </div>
   <div class="col-md-4">
   
    </div>

        
        </div>
        </div>





    </div>
</x-app-layout>
 