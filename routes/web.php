<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//let's Start coding
Route::group(['middleware'=>['auth']],function(){
    //to add to cart
    Route::get('/products/create',[ProductController::class, 'create'])->name(name:'products.create');
    //to store this product in cart
    Route::post('/products',[ProductController::class, 'store'])->name(name:'products.store');
    //to edit client product in cart
    Route::get('/products/{product}/edit',[ProductController::class, 'edit'])->name(name:'products.edit');
    //to save this edit
    Route::put('/products/{product}',[ProductController::class, 'update'])->name(name:'products.update');
    //to delete from his cart
    Route::delete('/products/{product}',[ProductController::class , 'destroy'])->name(name: 'products.destroy');

});

//Home Page & To show all products
Route::get('/products',[ProductController::class, 'index'])->name(name:'products.index'); 
//to search for specific product
Route::get('/products/{product}',[ProductController::class, 'show'])->name(name:'products.show');

//About Us Page
Route::get('/about', function () {
    return view('about_us');
})->name(name:'about_us');

// branches Page
Route::get('/branches', function () {
    return view('branches');
})->name(name:'branches');

// // Privacy Policy Page
Route::get('/privacy_policy', function () {
    return view('privacy_policy');
})->name(name:'privacy_policy');
    