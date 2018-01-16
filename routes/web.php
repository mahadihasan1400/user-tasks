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

Route::get('/status','CehckController@test');




Route::get('/', function () {
    //return view('welcome');
    return redirect('/login');
});


//Task
Route::get('/add-task','TaskController@addTask');
Route::post('/new-task','TaskController@newTask');
Route::get('/manage-task','TaskController@manageTask');
//category
Route::get('/add-category','CategoryController@addCategory');
Route::post('/new-category','CategoryController@newCategory');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
