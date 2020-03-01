<?php
use App\user_status;
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

Route::get('/','PagesController@home');
Route::get('/about','PagesController@about');
Route::get('/service','PagesController@services');
Route::resource('posts','PostController');
Route::get('/register',function(){
    return view('register');
})->name('register');
Auth::routes();
Route::get('/logout','PagesController@dashboard');
Route::get('/dashboard', 'DashboardController@index');
Route::get('setuseronlineoffline/{user_id}/{status}',function($user_id,$status){
    $status = user_status::updateOrCreate(['user_id' => $user_id],['status' => $status]);
    return user_status::all();
});
Route::get('getonlineusers',function(){
    return user_status::all();
});
