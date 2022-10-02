<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Auth;
use Illuminate\Support\Carbon;
// use App\Http\Controllers\DB;
use Illuminate\Support\Facades\DB;
class Categorycontroller extends Controller
{


 public function __construct(){
        $this->middleware('auth');
    }
    public function Allcat(){
//Query builder way to join  2 table 
    // $cate = DB::table('categories')->join('users','categories.user_id','users.id')->select('categories.*','users.name')->Latest()->paginate(5);

        
//Orm Way to join table by model class and method 
        $cate = Category::Latest()->paginate(5); 
        $trashcate = Category::onlyTrashed()->latest()->paginate(3); 


         // for fast latest added entry above
        // $cate = Category::all();  we can use this 
        // $cate = DB::table('categories')->Latest()->get();
        
        //query builde way :
        // $cate = DB::table('categories')->Latest()->paginate(5);

        // $cate = Category::Latest()->paginate(5);
        return view('admin.category.index',compact('cate','trashcate'));
    }


    public function Addcat(Request $request){
     
          $validatedData = $request->validate([
    'categories_name' => 'required|unique:categories|max:255',
],
[
    'categories_name.required' => 'Please input category name',
     'categories_name.max' => 'Category less then 255 chars',
  
]);


          Category:: insert([
            'categories_name'=> $request ->categories_name,
            'user_id'=>Auth:: user()->id,
            'created_at'=>Carbon::now()
          ]);

// another way  professional way 
            // $category = new  Category;
            // $category->categories_name = $request ->categories_name;
            // $category->user_id = Auth::user()->id;
            // $category->save();


//Query builder  way in this way date not updated 

            // $data = array();
            // $data['categories_name']= $request ->categories_name;
            // $data['user_id']=Auth::user()->id;
            // DB::table('categories')->insert($data);

    return redirect()->back()->with('sucess', 'Category inserted sucessfull');

        }

  
public  function Edit($id){
    //ORM 
    // $cate2 = Category::find($id);
//Query builder
    $cate2=DB::table('categories')->where('id',$id)->first();
    return view('admin.category.edit',compact('cate2'));

}
public function update(Request $request,$id){

//ORM
    //   $update=   Category::find($id)->update([
    //         'categories_name'=>$request->categories_name,
    //         'user_id'=>Auth::user()->id
    // ]);
//Query builder
$data= array();
$data['categories_name']=$request->categories_name;
$data['user_id']=Auth::user()->id;
DB::table('categories')->where('id',$id)->update($data);
    return redirect()->route('all.Category')->with('sucess', 'Category updated sucessfull');


}
public function Softdelete($id){
  $delete= Category::find($id)->delete();
  return  redirect()->back()->with('sucess', 'Category softdeleted sucessfull');
}

public function Restore($id){
    $delete= Category::withTrashed()->find($id)->restore();
  return  redirect()->back()->with('sucess', 'Category Restore sucessfull');




}
public function pdelete($id){
    $delete =Category::onlyTrashed()->find($id)->forceDelete();
  return  redirect()->back()->with('sucess', 'Category paramently deleteed ');


}
}