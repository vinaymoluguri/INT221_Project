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
    return view('welcome');
});
/*Homepage*/
Route::get('/homepage', function () {
    return view('homepage1');
});
/*Check Your Luck*/
Route::get('/checkyourluck1', function () {
    return view('checkyourluck1');
});
Route::get('/checkyourluck2', function () {
    return view('checkyourluck2');
});
Route::get('/checkyourluck3', function () {
    return view('checkyourluck3');
});
Route::get('/checkyourluck4', function () {
    return view('checkyourluck5');
});
Route::get('/checkyourluck5', function () {
    return view('checkyourluck5');
});
Route::get('/checkyourluck6', function () {
    return view('checkyourluck6');
});

/*All Games*/
Route::get('/all', function () {
    return view('all');
 });
/*Help*/
Route::get('/help', function () {
    return view('help');
 });
/*LogIn*/
Route::get('/login', function () {
    return view('login');
 });
/*SignUp*/
Route::get('/signup', function () {
    return view('signup');
 });


