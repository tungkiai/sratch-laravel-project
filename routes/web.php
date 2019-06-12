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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('user', 'UserController');

Route::get('image-upload', 'ImageUploadController@imageUpload')->name('image.upload');

Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');

// Route::get('/user', 'UserController@index')-> name('user.index');
// Route::put('/user', 'UserController@edit')-> name('user.edit');
// Route::get('/user', 'UserController@create')-> name('user.create');

// Route::get('/user', function () {
//    return view('user.index');
// });

//Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::group(['middleware' => ['auth']], function () {
    // Route::resource('role', RoleController);
 //   Route::resource('users', UserController);
 //   Route::resource('products', ProductController);
// });
