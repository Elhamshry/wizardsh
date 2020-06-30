<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
Route::get('/' , function (){
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/courses','CoursesController@index');

Route::get('/courses','CoursesController@create');

Route::post('/courses','CoursesController@storeCourse');


|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/index', function () {
    return view('index');
});
Route::get('/courses', function () {
    return view('courses');
});
Route::get('/centers', function () {
    return view('centers');
});Route::get('/notifications', function () {
    return view('notifications');
});
Route::get('/table', function () {
    return view('index');
});

Route::resource('/addcmaterial','AddCmaterialController');
