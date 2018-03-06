<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//home
Route::get('/','Front@index');

//Product 
Route::get('/products','Front@products');
Route::get('/products/details/{id}','Front@product_details');
Route::get('/products/categories','Front@product_categories');
Route::get('/products/brands','Front@product_brands');

//Blog
Route::get('/blog','Front@blog');
Route::get('/blog/post/{url}','Front@blog_post');

//Contact-us
Route::get('/contact-us','Front@contact_us');

//Login, logout
Route::get('/login','Front@login');
Route::get('/logout','Front@logout');

// Authentication routes
Route::get('auth/login', 'Front@login');
Route::post('auth/login', 'Front@authenticate');
Route::get('auth/logout', 'Front@logout');

// Registration routes...
Route::post('/register', 'Front@register');

//Check-out route
Route::get('/checkout','Front@checkout');

//Cart-routes
Route::get('/cart','Front@cart');
Route::post('/cart', 'Front@cart');

//Clear-cart
Route::get('/clear-cart', 'Front@clear_cart');

//Search
Route::get('/search/{query}','Front@search');



