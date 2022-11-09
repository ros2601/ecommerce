<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/cart1/{user}', function () {
    return view('cart');
});
//for product display
Route::get('/cart1/{user}',"App\Http\controllers\icontroller@cartproduct");


Route::get('/form', function () {
    return view('form');
});
Route::get('/dishwasher', function () {
    return view('dishwasher');
});
Route::get('/detail', function () {
    return view('detail');
});
//for dishwashers display
Route::get('/dishwasher',"App\Http\controllers\icontroller@dishwashers");

//For registration form
Route::post('/register-form',"App\Http\controllers\icontroller@register");
//For login form
Route::post('/login-form',"App\Http\controllers\icontroller@login");
//for logout
Route::post('/logout',"App\Http\controllers\icontroller@logout");
//for product display
Route::post('/show-product/{id}',"App\Http\controllers\icontroller@showproduct");
//For query form
Route::post('/query-form',"App\Http\controllers\icontroller@query");
//for product display on home page
Route::post('/home-product/{id}',"App\Http\controllers\icontroller@homeproduct");
//for cart form
Route::post('/cart-form/{id}',"App\Http\controllers\icontroller@addcart");
//to remove item in cart
Route::get('/remove-item/{id}',"App\Http\controllers\icontroller@remove");



Route::get('/home', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});
//for dishwashers display
Route::get('/home',"App\Http\controllers\icontroller@phome");

//for cart form
Route::post('/homecart-form/{id}',"App\Http\controllers\icontroller@homeaddcart");

//For registration form
Route::post('/contact-form',"App\Http\controllers\icontroller@contact");



//for product display
Route::get('/cart2',"App\Http\controllers\icontroller@cartproduct1");
//for tv display
Route::get('/tv',"App\Http\controllers\icontroller@tvs");
//for camera display
Route::get('/camera',"App\Http\controllers\icontroller@camera");