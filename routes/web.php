<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\DashboardController;
use \App\Http\Controllers\Admin\AdminController;


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
    return view('layouts.cpanel.app');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    //admin dashboard

   Route::get('/dashboard' , [DashboardController::class , 'index'])->name('admin.dashboard');



    //Admins
    Route::get('/admins/index' , [AdminController::class , 'index'])->name('admins.index');
    Route::post('/admins/store' , [AdminController::class , 'store'])->name('admins.store');
    Route::post('/admins/update' , [AdminController::class , 'update'])->name('admins.update');

    Route::post('/admins/delete' , [AdminController::class , 'delete'])->name('admins.delete');
    Route::post('/admins/multi/delete' , [AdminController::class , 'multiDelete'])->name('admins.multiDelete');
    Route::post('/admins/status/update' , [AdminController::class , 'updateStatus'])->name('admins.updateStatus');

