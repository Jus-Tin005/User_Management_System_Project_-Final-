<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Models\User;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

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
    Route::post('/upload/profile','UploadProfile')->name('upload.profile');
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
 *  Users Routes *
 --------------------*/

 Route::controller(HomeController::class)->group(function(){
    Route::get('/home','index')->name('home');

        $users = DB::table('users')->get();
        return view('orders.view', compact('users'));
 });

