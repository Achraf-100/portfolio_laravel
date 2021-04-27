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
// Chemin

Route::get('/', function () {
    return view('index');
});

Route::get('/backHome', function () {
    return view('/backOffice/pages/backHome');
});

Route::get('/backAbout', function () {
    return view('/backOffice/pages/backAbout');
});
Route::get('/backSkills', function () {
    return view('/backOffice/pages/backSkills');
});
Route::get('/backProject', function () {
    return view('/backOffice/pages/backProject');
});
Route::get('/backContact', function () {
    return view('/backOffice/pages/backContact');
});
