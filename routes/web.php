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

Route::auth();

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/redirect', 'FacebookAuthController@redirect');
Route::get('/callback', 'FacebookAuthController@callback');

Route::get('/product-{id}', 'HomeController@show');
Route::get('/about', 'HomeController@about');
Route::get('/payments', 'HomeController@payments');
Route::get('/shipping', 'HomeController@shipping');
Route::get('/returns', 'HomeController@returns');


Route::get('/mascot', 'HomeController@mascot');
Route::get('/piggy_totoro', 'HomeController@piggy_totoro');
Route::get('/lamp_totoro', 'HomeController@lamp_totoro');
Route::get('/totoro_dolls', 'HomeController@totoro_dolls');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['middleware' => 'admin'], function () {

  Route::get('dashboard', 'DashboardController@index');
  Route::resource('user_profile', 'ProfileController');
  Route::post('update_pic', 'ProfileController@update_pic');
  Route::resource('user_shop', 'ShopController');
  Route::resource('category', 'CategoryController');
  Route::resource('product', 'ProductController');
  Route::resource('stock', 'StockController');
  Route::resource('users', 'UsersController');

  Route::post('api/post_status', 'ProductController@post_status');
  Route::post('api/user_status', 'UsersController@users_status');
  Route::post('upload_more_pic', 'ProductController@upload_more_pic');
  Route::post('property_image_del', 'ProductController@property_image_del');

  });
