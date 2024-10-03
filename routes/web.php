<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/form',[UserController::class,'hello']);
Route::get('/form/display',[UserController::class, 'view']);

Route::get('/dashboard',[RoleController::class,'index']);
Route::get('/lay',[RoleController::class,'lays'])->middleware('ExampleMiddlewera');

// Route::get('/login', function () {
//     session()->put('user_id',1);
//     return redirect('/');
//  });


//  Route::get('/logout', function () {
//     session()->forget('user_id');
//     return redirect('/');
//  });
 



Route::get('form/create/',[UserController::class, 'create'])->name('hello.create');

Route::post('/form',[UserController::class, 'add']);

Route::get('form/edit/{id}',[UserController::class, 'edit'])->name('hello.edit');


//  Route::get('edit/{id}',[UserController::class, 'edit']);

Route::get('form/delete/{id}',[UserController::class, 'delete'])->name('hello.delete');



Route::post('form/update/{id}',[UserController::class, 'update'])->name('hello.update');

// Route::post('form/update/{id}',[UserController::class, 'update'])->name('hello.update');