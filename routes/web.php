<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Categorycontroller;
use App\Http\Controllers\Brandcontroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Changepass;
use App\Http\Controllers\PictureController;
use App\Models\Multipic;
use App\Models\User;
use App\Models\ContactForm;

use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
Route::get('/', function () {
    $breads =DB::table('brands')->get();
$abouts=DB::table('home_abouts')->first();
$images=Multipic::all();
    return view('home',compact('breads','abouts','images'));
});
Route::get('/user', function () {
    return view('userinfo');
});
Route::get('/home', function () {
    echo "<h1> You are redirected to this <span style='color:red'>Home page</span><br>       
    <blink>Why would somebody use this?</blink>
    </h1>";
    
    echo "<h1> This is home page  </h1>";
});
Route::get('/about', function () {
    return view('about');
    // echo "This is about page ";
})->middleware('age');



// Route::get('/contact', function () {
//     return view('contact');
//     // echo "This is about page ";
// });

Route::get('/test', function () {
    return view('Cheat_S');
    // echo "This is about page ";
});

// Route::get('/contact', 'ContactControlle@index');
Route::get('/contact-this-is', [ContactController::class,'index'])->name('con');
// Route::get('/about', [ContactController::class,'about']);
//category controller 
Route::get('/category/all', [Categorycontroller::class,'Allcat'])->name('all.Category');
Route::get('/category/edit/{id}', [Categorycontroller::class,'Edit']);
Route::post('category/update/{id}', [Categorycontroller::class,'update']);
Route::get('/softdelete/category/{id}', [Categorycontroller::class,'Softdelete']);
Route::get('/category/restore/{id}', [Categorycontroller::class,'Restore']);
Route::get('/pdelete/category/{id}', [Categorycontroller::class,'pdelete']);
//for brand page 
Route::get('/brand/all', [Brandcontroller::class,'Allbrand'])->name('all.brand');
Route::post('/brand/add', [Brandcontroller::class,'storebrand'])->name('store.brand');
Route::get('/brand/edit/{id}', [Brandcontroller::class,'Edit']);
// update image 
Route::post('brand/update/{id}', [Brandcontroller::class,'update_image']);
//delete 
Route::get('/brand/delete/{id}', [Brandcontroller::class,'delete_img']);
//Multi image =========================
Route::get('/multi/image', [Brandcontroller::class,'Multipic'])->name('multi.image');
//Multi image =========================
Route::post('multi/add', [Brandcontroller::class,'store_multi'])->name('store.image');
Route::get('multi/delete/{id}', [Brandcontroller::class,'multi_del']);
//Admin by this can manage slider
Route::get('view/slider', [HomeController::class,'Homeslider'])->name('home.slider');
Route::get('add/slider', [HomeController::class,'Addslider'])->name('add.slider');
Route::post('store/slider', [HomeController::class,'storeslider'])->name('store.slider');
// edit slider 
Route::get('/slider/edit/{id}', [HomeController::class,'editslider']);
//update slider 
Route::post('slider/update/{id}', [HomeController::class,'updatesilder']);
Route::get('slider/delete/{id}', [HomeController::class,'Del_silder']);
// home about all route
Route::get('view/about/', [AboutController::class,'homeabout'])->name('home.about');
Route::get('add/about/', [AboutController::class,'Addabout'])->name('add.about');
//Store 
Route::post('store/about/', [AboutController::class,'store_about'])->name('store.about');
//edit about
Route::get('about/edit/{id}', [AboutController::class,'editabout']);
//update home about 
Route::post('about/update/{id}', [AboutController::class,'update_about']);
//Delete  about message 
Route::get('about/delete/{id}', [AboutController::class,'delete_about']);
//portfolio pages route 
Route::get('/portfolio', [AboutController::class,'Portfolio'])->name('Portfolio');
//Admin contact page 
Route::get('/admin/contact', [ContactController::class,'Admin_contact'])->name('Admin_contact');
Route::get('/add/contact', [ContactController::class,'Add_contact'])->name('add_contact');
//store contact 
Route::post('/store/contact', [ContactController::class,'store_Contacts'])->name('store_Contacts');
//Edit contact 
Route::get('contact/edit/{id}', [ContactController::class,'edit_contact']);
//update
Route::post('contact/update/{id}', [ContactController::class,'contact_update']);
//del contact 
Route::get('contact/delete/{id}', [ContactController::class,'del_Contacts']);
//Home contact route 
Route::get('/contact', [ContactController::class,'contact'])->name('Contact');
// Contact message  
Route::post('/user/message', [ContactController::class,'user_message'])->name('user_message');
Route::get('/admin/message', [ContactController::class,'admin_msg'])->name('admin_message');
//delete message
Route::get('message/delete/{id}', [ContactController::class,'Del_msg']);
//Addcategory controller 
Route::post('/category/add', [Categorycontroller::class,'Addcat'])->name('store.category');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // $users=User::all();
//     $users=DB::table('users')->get();
//     return view('dashboard',compact('users'));
// })->name('dashboard');


  // $users=DB::table('users')->get();
    return view('admin.index');
})->name('dashboard');
//Logout route 
Route::get('/logout/user', [Brandcontroller::class,'Logout'])->name('user.logout');
//Change password 
Route::get('/change/password', [Changepass::class,'Ch_password'])->name('admin_password');
Route::post('/update/password', [Changepass::class,'update_pass'])->name('pass_update');
//user profile 
Route::get('/user/profile', [Changepass::class,'profile_update'])->name('profile_update');
//update user profile 
Route::post('/update/profile', [Changepass::class,'update_profile'])->name('update_profile');
Route::group(['middleware'=>'auth'],function (){
//Admin teadm page 
Route::get('/admin/team/', [HomeController::class,'team'])->name('team');
Route::get('/create/team/', [HomeController::class,'create'])->name('create_team');
Route::post('/store/team/', [HomeController::class,'store_team'])->name('store_team');
//Our tam 
Route::get('/our/team/', [HomeController::class,'our_team'])->name('our_team');
Route::get('/create/team/', [HomeController::class,'create'])->name('create_team');
Route::post('/store/team/', [HomeController::class,'store_team'])->name('store_team');

Route::get('/view/picture/', [PictureController::class,'view_picture'])->name('view.picture');


Route::get('/add/picture/', [PictureController::class,'add_picture'])->name('add.picture');

Route::post('/store/image-category/', [PictureController::class,'store_img_cat'])->name('store.picture_cat');
Route::get('/edit/image-category/{id}', [PictureController::class,'edit_img_cat'])->name('edit.image_category');

Route::get('/delete/picture/{id}', [PictureController::class,'delete_img_cat'])->name('delete_multipic');


Route::post('/update/image-category/{id}', [PictureController::class,'update_img_cat'])->name('update.picture_cat');
Route::post('/store/picture/', [PictureController::class,'store_multiple_img'])->name('store.picture');
Route::post('add/crop-image-upload', [PictureController::class, 'uploadCropImage']);

// 
});
//Our teamgit
Route::get('/our/team/', [HomeController::class,'our_team'])->name('our_team');
// About us page for admin 
Route::get('/About_us/page/', [HomeController::class,'about_us'])->name('about_us');
//Testimonials  route for home
Route::get('/Testimonials/page/', [HomeController::class,'Testimonial'])->name('Testimonials');
//services  route for home
Route::get('/Services/page/', [HomeController::class,'Services'])->name('Services');
//Pricing
Route::get('/Pricing/page/', [HomeController::class,'Pricing'])->name('Pricing');
//Blog
Route::get('/Blog/page/', [HomeController::class,'Blog'])->name('Blog');
//Read mode Blog
Route::get('/Read/more/', [HomeController::class,'Rd_more'])->name('Rd_more');