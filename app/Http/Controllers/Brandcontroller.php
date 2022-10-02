<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use App\Models\Multipic;
use Auth;
use Image;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class Brandcontroller extends Controller
{
    //


    public function __construct(){
        $this->middleware('auth');
    }
    public function Allbrand(){
    		$get_brand =Brand::latest()->paginate(5);
    	return view('admin.brand.index',compact('get_brand'));
    }

    public function storebrand(Request $request){
    	$validatedData = $request->validate([
    'brand_name' => 'required|unique:brands|min:4',
    'brand_image' => 'required|mimes:jpg,jpeg,png',

],
[
    'brand_name.required' => 'Please input brand name',
     'brand_image.min' => 'Category longer then 4 characters',
  
]);


$brand_image =$request->file('brand_image');

$name_gen= hexdec(uniqid());
$img_ext=strtolower($brand_image->getClientOriginalExtension());
$img_name=$name_gen.'.'.$img_ext;
$up_location= 'public/image/brand/';
$last_img=$up_location.$img_name;
$brand_image->move($up_location,$img_name);

//   $name_gen= hexdec(uniqid()).'.'.$brand_image->getClientOriginalExtension();
//   Image::make($brand_image)->resize(300,200)->save('image/brand/'.$name_gen);
//   $last_img='image/brand/'.$name_gen;


Brand::insert([
'brand_name'=>$request->brand_name,
'brand_image'=>$last_img,
'created_at'=>Carbon::now()


]);

$notification = array(
    'message' => 'Brand Inserted Successfully',
    'alert-type' => 'success'
);
return redirect()->back()->with($notification);
    }
//=============================================edit ===================================================
    public function Edit($id){

    $brand=Brand::find($id);
    return view('admin.brand.edit',compact('brand'));        
    }


    //====================================== UPDATE  =======================================================
    public function update_image(Request $request,$id){

        $validatedData = $request->validate([
    'brand_name' => 'required|min:4'
],
[
    'brand_name.required' => 'Please input brand name',
     'brand_image.min' => 'Category longer then 4 characters', 
]);
$old_image =$request->old_image;
$brand_image =$request->file('brand_image');
if($brand_image){


// $name_gen= hexdec(uniqid());
// $img_ext=strtolower($brand_image->getClientOriginalExtension());
// $img_name=$name_gen.'.'.$img_ext;
// $up_location= 'public/image/brand/';
// $last_img=$up_location.$img_name;
// $brand_image->move($up_location,$img_name);

    
   $name_gen= hexdec(uniqid()).'.'.$brand_image->getClientOriginalExtension();
   Image::make($brand_image)->resize(300,200)->save('public/image/brand/'.$name_gen);
   $last_img='public/image/brand/'.$name_gen;

unlink($old_image); 

//larvel function 



Brand::find($id)->update([
'brand_name'=>$request->brand_name,
'brand_image'=>$last_img,
'created_at'=>Carbon::now()


]);


$notification = array(
    'message' => 'Brand updated Successfully',
    'alert-type' => 'info'
);
return redirect()->route('all.brand')->with($notification );

}else{

    Brand::find($id)->update([
'brand_name'=>$request->brand_name,
'created_at'=>Carbon::now()


]);

$notification = array(
    'message' => 'Brand  Name updated Successfully',
    'alert-type' => 'warning'
);
return redirect()->route('all.brand')->with($notification);

}

    }

    // delete function 
    public function delete_img($id){
        $image= Brand::find($id);
        $old_image =$image->brand_image;
        unlink($old_image);
        Brand::find($id)->delete();

        $notification = array(
            'message' => 'Brand  image deleted  Successfully',
            'alert-type' => 'error'
        );
return redirect()->back()->with( $notification);


    }


    //that is for multi pics method 

    public function Multipic(){
        $images= Multipic::all();
        return view('admin.Multipic.index', compact('images'));


    }
    public function store_multi(Request $request){


    $image =$request->file('image');
    foreach($image as $multi_img){

   
   $name_gen= hexdec(uniqid()).'.'.$multi_img->getClientOriginalExtension();
   Image::make($multi_img)->save('public/image/Multi/'.$name_gen);
//   ->resize(1000,720)  //can use this  for resize 
   $last_img='public/image/Multi/'.$name_gen;


Multipic::insert([

'image'=>$last_img,
'created_at'=>Carbon::now()


]);
 }

 $notification = array(
    'message' => 'Multiple images inserted successfully',
    'alert-type' => 'info'
);
return redirect()->back()->with( $notification);

    }


    // Multi pic del 
    public function multi_del($id){   
        $img= Multipic::find($id);
        $old_image =$img->image;
        unlink($old_image);
        Multipic::find($id)->delete();
        
       
        $notification = array(
            'message' => 'images  deleted successfully',
            'alert-type' => 'error'
        );
return redirect()->back()->with($notification);

    }


    public function Logout(){
        Auth::logout();
        $notification = array(
            'message' => 'User logout successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('login')->with( $notification );
    }
}
