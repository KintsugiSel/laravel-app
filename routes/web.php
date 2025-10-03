<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;    
use App\Http\Controllers\HomeController;

Route::get('/home', function () {
    return ('home');
});

Route::get('/home',[HomeController::class,'home'])->name('home');
Auth::routes();

Route::get('/add',[UserController::class,'index'])->name('add');
Route::post('/add_user',[UserController::class,'store'])->name('add_user');

Route::get('/edit_user/{id}',[UserController::class,'edit'])->name('edit_user');
Route::post('/update_user',[UserController::class,'update'])->name('update_user');

Route::get('/delete_user/{id}',[UserController::class,'delete'])->name('delete_user');
Route::post('/destroy_user',[UserController::class,'destroy'])->name('destroy_user');

Route::get('user_subjects/{id}', [UserController::class,'user_subjects'])->name('user_subjects');
Route::get('add_user_subject/{id}', [UserController::class,'add_user_subject'])->name('add_user_subject');
