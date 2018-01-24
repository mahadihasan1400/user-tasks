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

Route::group(['middleware' => 'securityMiddleware'],function(){


//Task
Route::get('/add-task','TaskController@addTask');
Route::post('/new-task','TaskController@newTask');
Route::get('/manage-task','TaskController@manageTask');
Route::get('/task-complited/{id}','TaskController@taskComplited');
Route::get('/delete-task/{id}','TaskController@deleteTask');
Route::get('/view-task-deatils/{id}','TaskController@viewTaskDetails');
Route::get('/edit-task/{id}','TaskController@editTask');
Route::post('/update-task','TaskController@updateTask');


//category
Route::get('/add-category','CategoryController@addCategory');
Route::post('/new-category','CategoryController@newCategory');
Route::get('/manage-category','CategoryController@manageCategory');
Route::get('/unpublished-category/{id}','CategoryController@unpublishedCategory');
Route::get('/published-category/{id}','CategoryController@publishedCategory');
Route::get('/delete-category/{id}','CategoryController@deleteCategory');
Route::get('/edit-category/{id}','CategoryController@editCategory');
Route::post('/update-category','CategoryController@updateCategory');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
