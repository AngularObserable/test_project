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
})->name('home');

//Route::get('/', 'HomeController@index')->name('home');
Route::post('subscriber', 'SubscriberController@store')->name('subscriber.store');

//  Route::get('/', ['as' => 'admin.signin', 'uses' => 'Auth\LoginController@showLoginForm']);
// Route::post('login', ['as' => 'login', 'uses' => 'Auth\LoginController@adminLogin']);

Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']],
    function (){
Route::get('dashboard','DashboardController@index')->name('dashboard');
Route::resource('tag','TagController');
Route::resource('category','CategoryController');
Route::resource('post','PostController');
Route::get('/pending/post','PostController@pending')->name('post.pending');
Route::put('/post/{id}/approve','PostController@approval')->name('post.approve');

Route::get('/subscriber','SubscriberController@index')->name('subscriber.index');
Route::delete('/subscriber/{id}','SubscriberController@destroy')->name('subscriber.destroy');

});


Route::group(['as'=>'author.','prefix'=>'author','namespace'=>'Author','middleware'=>['auth','author']], function (){
Route::get('dashboard','DashboardController@index')->name('dashboard');
Route::resource('post','PostController');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');