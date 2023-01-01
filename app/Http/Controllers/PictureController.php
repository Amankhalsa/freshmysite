<?php

namespace App\Http\Controllers;

use App\Models\ImageCategory;
use App\Models\ImageGallery;
use App\Models\Multipic;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;
class PictureController extends Controller
{
    //
    public function view_picture(){
            $data['allpics'] =   ImageGallery::all();
        return view('admin.picture.index',$data);

    }

    public function add_picture(){
        $getCategory = ImageCategory::get();
        return view('admin.picture.add_image', compact('getCategory'));

    }

    public function edit_img_cat($id){
        $editCategory = ImageCategory::find($id);
        return view('admin.picture.edit_image', compact('editCategory'));

    }

    public function update_img_cat(Request $request , $id){

        $savecat = ImageCategory::find($id);

        $savecat->name = $request->name;
        
        $savecat->save();
        return redirect()->route('add.picture');

    }


    public function store_img_cat(Request $request){
       $request->validate([
            'name' => 'required',

        ]);
            $savecat = new ImageCategory();

            $savecat->name = $request->name;
            
            $savecat->save();
            return redirect()->back();
    }
    public function store_multiple_img(Request $request){
                $request->validate([
                    'image.*' => 'required',
                    'image_cat_id' => 'required',
                ]);

            $image =$request->file('image');
            foreach($image as $multi_img){
                $name_gen= hexdec(uniqid());
                $img_ext = strtolower($multi_img->getClientOriginalExtension());
             
                $img_name = $name_gen.'.'.$img_ext;
                
                $up_location = 'upload/images/';
                $last_img = $up_location.$img_name; 


                $multi_img->move($up_location,$img_name);
       //   ->resize(1000,720)  //can use this  for resize 
  
       ImageGallery::insert([
           'image' => $img_name,
           'image_cat_id'=>  $request->image_cat_id,
           'created_at'=>Carbon::now()
           ]);
           }
           return redirect()->route('view.picture');
                }


                public function delete_img_cat($id){
                    $img= ImageGallery::where('id', $id)->first();
                   
                    $old_image =$img->image;
                    // unlink($old_image);

                    $imagePath = public_path('upload/images/'. $old_image);
                    unlink($imagePath);
                    ImageGallery::find($id)->delete();
                    return redirect()->route('view.picture');
            
            
                }
    public function uploadCropImage(Request $request)
    {
        $folderPath = public_path('upload/images/');
 
        $image_parts = explode(";base64,", $request->image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
 
        $imageName = time() . '.png';
 
        $imageFullPath = $folderPath.$imageName;
 
        file_put_contents($imageFullPath, $image_base64);
 
         $saveFile = new ImageGallery();
         $saveFile->image = $imageName;
         $saveFile->save();
    
        return response()->json(['success'=>'Crop Image Uploaded Successfully']);
    }
}

    

