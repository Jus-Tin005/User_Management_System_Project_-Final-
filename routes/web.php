<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;



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
 *  Admin Logout Routes *
 --------------------*/
 Route::controller(AdminController::class)->group(function(){
    Route::get('admin/login','destroy')->name('admin.logout');
 });
