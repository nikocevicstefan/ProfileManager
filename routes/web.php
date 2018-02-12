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
//list all users by their categories
Route::get('/persons', 'PersonController@index')->middleware('auth');
Route::get('/moderators', 'UserController@index')->middleware('admin');
Route::get('/admins', 'UserController@index_admin')->middleware('admin');

//Moderators manipulation
Route::get('/moderators/delete/{user}', 'UserController@delete')->middleware('admin');
Route::get('/moderators/show/{user}','UserController@show_pass')->middleware('admin');
Route::post('/moderators/changepass/{user}','UserController@change_pass')->middleware('admin');

//change system user role
Route::get('/moderators/{user}', 'UserController@role_change')->middleware('admin');


//registration form
Route::get('/registration', 'PersonController@register')->middleware('auth');

//Person data manipulation
Route::post('/person','PersonController@store')->middleware('auth');
Route::post('/person/edit/{person}','PersonController@edit')->middleware('auth');
Route::get('/person/{person}','PersonController@edit_register')->middleware('auth');

//Contact data manipulation
Route::post('/contact/edit/{person}','ContactController@store')->middleware('auth');
Route::get('/contact/delete/{contact}', 'ContactController@delete')->middleware('auth');
Route::get('/contact/{person}','ContactController@show')->middleware('auth');

//Car data manipulation
Route::post('car/edit/{person}', 'CarController@store')->middleware('auth');
Route::get('/car/delete/{car}', 'CarController@delete')->middleware('auth');
Route::get('/car/{person}', 'CarController@show')->middleware('auth');

//Student data
Route::post('/student/show/{person}','StudentController@show_data')->middleware('auth');
Route::post('/student/edit/{person}','StudentController@store')->middleware('auth');
Route::get('/student/{person}', 'StudentController@show')->middleware('auth');

//Employee info
Route::post('/employee/show/{person}','EmployeeController@show_data')->middleware('auth');
Route::post('/employee/edit/{person}','EmployeeController@store')->middleware('auth');
Route::get('employee/{person}', 'EmployeeController@show')->middleware('auth');


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

//show single person data
Route::get('/persons/{person}', 'PersonController@show_user')->middleware('auth');

//delete the single user and relevant data
Route::get('/persons/delete/{person}', 'PersonController@delete');


