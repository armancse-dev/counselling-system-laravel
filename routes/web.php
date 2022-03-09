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
use Carbon\Carbon;

Route::get('/', 'HomeController@index')->name('home');


Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::resource('department','DepartmentController');

Route::get('counsel/getallStudent', 'StudentInformationController@getallStudent')->name('counsel/getallStudent');

Route::resource('counsel','StudentInformationController');
Route::resource('discussion','DiscussionController');


Route::get('/test',function (){
    $now=new Carbon();
    dd($now);

});

Route::get('/cl-cash',function(){
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
});



