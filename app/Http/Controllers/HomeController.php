<?php

namespace App\Http\Controllers;
use App\Models\Slider;
use App\Models\Team;
use Illuminate\Http\Request;
use Auth;
use Image;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //

    public function Homeslider(){
        $sliders= Slider::latest()->get();
        return view('admin.slider.index',compact('sliders'));
    }

    public function Addslider(){
        return view('admin.slider.create');


    }


    public function storeslider(Request $request){
    $slider_image =$request->file('image');
   $name_gen= hexdec(uniqid()).'.'.$slider_image->getClientOriginalExtension();
   Image::make($slider_image)->resize(1920,1088)->save('public/image/slider/'.$name_gen);
   $last_img='public/image/slider/'.$name_gen;


Slider::insert([
'title'=>$request->title,
'description'=>$request->description,



'image'=>$last_img,
'created_at'=>Carbon::now()


]);
return redirect()->route('home.slider')->with('sucess','Slider added successfully');

    }

    //edit slider 
    public function editslider($id){
        $updatesliders = Slider::find($id);
        return view('admin.slider.edit',compact('updatesliders'));
    }
    //update slider 
    public function updatesilder(Request $request,$id ){

        $old_image = $request->old_image;
             $slider_image =$request->file('image');

        //if else 
        if($slider_image){
            // dd($old_image);
        unlink($old_image); 
   $name_gen= hexdec(uniqid()).'.'.$slider_image->getClientOriginalExtension();
   Image::make($slider_image)->resize(1920,1088)->save('public/image/slider/'.$name_gen);
   $last_img='public/image/slider/'.$name_gen;
     


     Slider::find($id)->update([
     'title'=>$request->title,
     'description'=>$request->description,
     'image'=>$last_img,
     'updated_at'=>Carbon::now()
     
     
     ]);
     return redirect()->route('home.slider')->with('sucess','slider updated successfully');
     
    }
        //if else 

    else{



        Slider::find($id)->update([
            'title'=>$request->title,
            'description'=>$request->description,
      
            'updated_at'=>Carbon::now()
            
            
            ]);
            return redirect()->route('home.slider')->with('sucess','slider updated successfully');
            


    }

    }


    public function Del_silder($id){

        $image= Slider::find($id);
        $old_image =$image->image;
        unlink($old_image);
        Slider::find($id)->delete();
// return redirect()->back()->with('sucess','Slider deleted successfully');
return redirect()->route('home.slider')->with('sucess','slider deleted successfully');





    }


//=====================================
// Our team 

//Admin method 
public function team()
{

    $get_team= Team::all();
    return view('admin.team.index',compact('get_team'));

}



//admin create section method 
public function create(){
    return view('admin.team.create');

}
//store name in DB 

public function store_team(Request $request){


    $team_image =$request->file('image');
    $name_gen= hexdec(uniqid()).'.'.$team_image->getClientOriginalExtension();
    Image::make($team_image)->save('public/image/team/'.$name_gen);
    // can use resize method 
    $last_img='public/image/team/'.$name_gen;

    Team::insert([
        'name'=>$request->name,
        'designation'=>$request->designation,
        'image'=>$last_img,
        'created_at'=>Carbon::now()
    ]);

    $notification = array(
        'message' => 'Team Created Successfully',
        'alert-type' => 'success'
    );
    return redirect()->route('team')->with($notification);

}

public function our_team()
{

        $team_detail  = Team::get();
    return view('pages.team',compact('team_detail'));
}


 //new controller for home page 
public function about_us(){
    $about_us=Team::all();
    $brands =DB::table('brands')->get();
    $messages=DB::table('home_abouts')->first();
return view('pages.About_us',compact('about_us','brands','messages'));
}

public function Testimonial(){
return view('pages.Testimonials');


}
public function Services(){
return view('pages.Services');


}

public function Pricing(){
return view('pages.Pricing');


}

public function Blog(){
return view('pages.Blog');


}

public function Rd_more(){
return view('pages.Rd_more');


}

}
