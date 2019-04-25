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
Route::get('/passingdata/{name}', 'PassingDataController@index');
Route::get('/student/listStudent/', 'StudentController@listStudent');
Route::get('/student/listStudent/detail','StudentController@listStudent' );
Route::get('/Game/create/','GameController@create' );
Route::post('/Game/store/','GameController@store' );

Route::get('/Register/create/','RegisterControl@create' );
Route::post('/Register/store/','RegisterControl@store' );

Route::get('/pricingtable/','PricingTableController@index' );

Route::get('/Category/', 'CategoryController@index');


Route::group(['namespace' => 'Admin'], function() {
    Route::get('/admin/student', 'StudentController@index')->name("admin.student.index");
    Route::get('/admin/create', 'StudentController@create')->name("admin.student.create");
    Route::post('/admin/student/store', 'StudentController@store')->name("admin.student.store");
    Route::get('/admin/student/delete/{id}','StudentController@delete')->name("admin.student.delete");
    Route::get('/admin/student/edit/{id}','StudentController@edit')->name("admin.student.edit");
    Route::post('/admin/student/update','StudentController@update')->name("admin.student.update");
});

Route::group(['namespace' => 'Admin'], function() {
    Route::get('/admin/book', 'BookController@index')->name("admin.book.index");
    Route::get('/admin/book/create', 'BookController@create')->name("admin.book.create");
    Route::post('/admin/book/store', 'BookController@store')->name("admin.book.store");
    Route::get('/admin/book/delete/{id}','BookController@delete')->name("admin.book.delete");
    Route::get('/admin/book/edit/{id}','BookController@edit')->name("admin.book.edit");
});
