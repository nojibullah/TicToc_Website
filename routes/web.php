<?php
use Illuminate\Http\Request;
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


/*
 All Laravel routes are defined in your route files, which are located in the routes directory.
 These files are automatically loaded by the framework.


  This define the route when start your site.
  That is, welcome page is the interface(homepage) in your website.
  When you search with .../ticktock, you will see the contents of the welcome.blade.php
  In the laravel, all view files's extension is the .blade.php
*/
Route::get('/', function () {
    return view('welcome');
});
// When you click the About Us, return the About Us page.
// These are way to access without the Controller.
// Generally there are only html and js, you can go the page without Controller.
// Controller is control the DB operation.
Route::get('/about_us', function () {
    return view('about');
});
//----------------Go to the view_recommendations page of user------------
Route::get('/view_recommendations', 'UserController@view_recommendations');
// When you click the Our Service, return the Our Service page.
Route::get('/our_service', function () {
    return view('service');
});
// When you click the Free shipping & returns, return the shipping_return page.
Route::get('/shipping_return', function () {
    return view('shipping_return');
});

// This is the helper class that helps you generate all the routes required for user authentication.
Auth::routes();

//here products is the url, in this case you can specify the url with you mind.
//Finally at UserController's products method all operating will control.
//As you can see there are two kinds of way including Route::get() and Route::post().
//Using Route::get(), you can pass the parameter adding to the url.
//And using the  Route::post(), you can pass the parameter form or ajax , of course method id post both.

//----------------Go to the products page------------
Route::get('/products', 'UserController@products');
//----------------pass the parameter into the UserController's search_products method------------
Route::post('/products', 'UserController@search_products');
//--------------------Go to the cart page------------
Route::get('/cart', 'UserController@cart');

//--------Add watch from products page to add page---
Route::post('/add_cart', 'UserController@add_cart');

//--------------------Go to cart page----------------
Route::get('/cart', 'UserController@cart');

//---------------------Go to buy page----------------
Route::get('/buy_page/{watch_id}', 'UserController@buy_page');
//----------------pass the parameter into the UserController's watch_buy method------------------
Route::post('/watch_buy', 'UserController@watch_buy');

//---------------------Go to send_message page---------

Route::get('/send_message', 'UserController@go_send_message');
//---------------------Go to recommendation page-------
Route::get('/recommendation', 'UserController@recommendation');
//---------------------Go to admin page----------------
Route::get('/admin', 'AdminController@admin');
//-------------------Add watch in products table-------
Route::post('/add_watch', 'AdminController@add_watch');
//-----------------Remove history in products table------
Route::post('/remove_history', 'AdminController@remove_history');
//-----------------Remove watch in products table------
Route::post('/remove_watch', 'AdminController@remove_watch');
//-----------------Remove Message------
Route::post('/remove_message', 'AdminController@remove_message');
//-----------------Remove purchase history------
Route::post('/remove_message', 'AdminController@remove_message');
//---------------Upload Watches------------------------
Route::post('/upload_watches', 'AdminController@upload_watches');
//----------------------Send message-------------------
Route::post('/send_message', 'UserController@send_message');
//----------------------View message-------------------
Route::get('/view_message', 'AdminController@view_message');
//-------------------------Send Recommend -------------
Route::post('/send_recommend', 'UserController@send_recommend');
//------------------------View Recommend --------------
Route::get('/view_recommend', 'AdminController@view_recommend');
//-------------Upload Repairing------------------------
Route::post('/upload_repairing', 'AdminController@upload_repairing');
//--------------------View repairing-------------------
Route::get('/view_repairing', 'UserController@view_repairing');
//---------------Upload watch image--------------------
Route::post('/upload_watch_img', 'AdminController@upload_watch_img');
//--------------------View repairing-------------------
Route::get('/view_history', 'AdminController@view_history');