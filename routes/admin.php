<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

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

Route::group(['namespace'=> 'Admin','prefix' => 'admin','as' => 'admin.'], function(){
        Route::get('/dashboard',[AdminController::class,'index'])->name('index');
        Route::get('/one-to-many',[AdminController::class,'oneToMany'])->name('one-to-many');
        Route::get('/many-to-many',[AdminController::class,'manyToMany'])->name('many-to-many');
        Route::get('/js',[AdminController::class,'js'])->name('js');
});
