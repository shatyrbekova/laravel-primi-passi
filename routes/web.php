<?php

use Illuminate\Support\Facades\Route;

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
    return view('home',
       ['name'=>'Laravel']
);
});
Route::get('/about-us', function () {
    return view('about-us',
    ['src'=> 'https://www.laramind.com/blog/wp-content/uploads/2020/09/laravel-logo.jpg']
       
);
});
Route::get('/work-with-us', function () {
    return view('work-with-us');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/offers', function () {
    return view('offers');
});
Route::get('/shops', function () {
    return view('shops');
});


