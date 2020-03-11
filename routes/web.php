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

Auth::routes(['register' => false]);
Route::get('/admin/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\LoginController@postlogin')->name('admin.postlogin');
Route::group(['prefix'=>'admin',"namespace"=>"Admin"], function(){
    Route::get('/dashboard', 'DashboardController@dashboard')->name('admin.dashboard');
    Route::get('/departments', 'DepartmentController@getDepartments')->name('admin.getDepartments');
    Route::post('departmentDatatable', 'DepartmentController@departmentDatatable')->name('departmentDatatable');
Route::post('departmentSaveUpdate', 'DepartmentController@departmentSaveUpdate')->name('departmentSaveUpdate');
Route::post('dapertmentEdit', 'DepartmentController@dapertmentEdit')->name('dapertmentEdit');
Route::post('departmentDelete', 'DepartmentController@departmentDelete')->name('departmentDelete');
    
});

Route::get('/home', 'HomeController@index')->name('home');
