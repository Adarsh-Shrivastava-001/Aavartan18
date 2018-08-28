<?php

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
    return view('aavartan');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/vigyaan', function () {
    return view('vigyaan');
});
Route::get('/events', function () {
    return view('events');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/attractions', function () {
    return view('attractions');
});
Route::get('/initiatives', function () {
    return view('initiatives');
});
Route::get('/login', function () {
    return view('loginsignup');
});
Route::get('/sponsors', function () {
    return view('sponsors');
});
Route::get('/schedule', function () {
    return view('schedule');
});
Route::get('/contactus', function () {
    return view('contactus');
});
