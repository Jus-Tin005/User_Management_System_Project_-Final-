<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;



Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

/**--------------------------
 * Permissins Routes *
 --------------------*/
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
});



/**--------------------------
 *  Admin All Routes *
 --------------------*/
 Route::controller(AdminController::class)->group(function(){
    Route::get('/admin/login','destroy')->name('admin.logout');
    Route::get('/admin/profile','Profile')->name('admin.profile');
    Route::get('/edit/profile','EditProfile')->name('edit.profile');
    Route::post('/store/profile','StoreProfile')->name('store.profile');
 });


 /**--------------------------
 *  Object Storage Routes *
 --------------------*/
 Route::post('upload',function(){
    request()->file('file')->store(
        'khun-tun',
        'do'
    );
    return back();
 })->name('upload');


Route::get('/upload', function () {
    return view('admin.upload.form_upload');
});


 /**--------------------------
 *  Order Routes *
 --------------------*/
 Route::controller(OrderController::class)->group(function(){
    Route::get('/admin/orders','order')->name('admin.order');
 });
