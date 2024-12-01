<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\HomeController;
use App\Models\user;
use App\Models\post;


Route::get('/',[HomeController::class,'homepage']);

Route::get('/home',[HomeController::class,'index']);
Route::get('/details/{id}',[HomeController::class,'detailsFunction']);
Route::get('/post_created',[HomeController::class,'post_created']);
Route::post('/SavePost',[HomeController::class,'SavePost']);
Route::get('/my_post',[HomeController::class,'my_post']);
Route::delete('/deletePost/{id}',[HomeController::class,'deletePost']);



Route::get('admin',[adminController::class,'index']);
Route::view('/posts','admin.addPost');

Route::post('/SavePost',[adminController::class,'addPost']);
Route::get('/showPosts',[adminController::class,'showPost']);
Route::get('/deletePost/{id}',[adminController::class,'deletePost']);
Route::get('/editPost/{id}',[adminController::class,'show_update_page']);
Route::put('/SaveUpdatePost/{id}',[adminController::class,'SaveUpdatePost']);
Route::get('/accept/{id}',[adminController::class,'accept']);
Route::get('/reject/{id}',[adminController::class,'reject']);

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('admin.index');
//     })->name('dashboard');
// });
