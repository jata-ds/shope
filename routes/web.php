<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

 Route::get('test',function(){
return App\users::with('orders')->get();
});


Route::view('/', 'front.index');
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

//Front Products
Route::view('products','front.products',[
  'data' => App\products::all(),'catByUser' =>'All Products'
]);
Route::get('products/{cat}','ProductsController@proCat');
Route::get('search','ProductsController@search');

//Pro by ajax with cat id
Route::get('productsCat','ProductsController@productsCat');

//user middleware
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('dashboard','HomeController@index');
    Route::view('myaccount','myaccount.index');
    Route::get('myaccount/{link}',function($link){
      return view('myaccount.index', ['link' => $link]);
  });
//start inbox
    Route::view('inbox','myaccount.inbox',[
      'data' => App\inbox::all()
    ]);

//Update inbox
Route::get('updateInbox','profileController@updateInbox');

});
//add function
Route::get('cart','cartController@index');
Route::get('cart/add/{id}','cartController@addItem');
Route::get('cart/remove/{id}','cartController@removeItem');
Route::get('cart/update','cartController@update');


Route::group(['middleware' => 'admin'], function(){

//admin middleware start
Route::get('/admin','AdminController@index');
Route::get('admin/profile','AdminController@profile');
Route::get('admin/addProduct','AdminController@addProduct');
Route::post('admin/saveProduct','AdminController@saveProduct');
//New route mhetode in laravel 5.5
Route::view('admin/products', 'admin.products',[
 'data' => App\products::with('cats')->get()
]);
Route::view('admin/users','admin.users',[
  'data' => App\users::all()
]);
route::get('admin/banUser','adminController@banUser');


//edit product
Route::get('admin/editProduct/{id}',function($id){
  return view('admin.editproduct', [
     'data' => App\products::where('id',$id)->get()
  ]);
});

 //change Image
 Route::view('admin/changeImage/{id}','admin.changeImage');
 Route::post('admin/uploadPP','adminController@uploadPP');
  

 // for add category
 Route::view('admin/addCategory','admin.addCategory');
/*-------------------For categories--------------------*/
 Route::view('admin/cats','admin.cats',[
     'data' => App\cats::all()
  ]);
/*---------------------Save Categories------------------*/
Route::post('admin/saveCategory','AdminController@saveCategory');
});