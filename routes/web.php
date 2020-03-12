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
Route::get('/admin/logout', 'Auth\LoginController@logout')->name('admin.logout');
Route::group(['prefix'=>'admin',"namespace"=>"Admin",'middleware' => 'permissionCheck'], function(){
    Route::get('/dashboard', 'DashboardController@dashboard')->name('admin.dashboard');
    Route::get('/departments', 'DepartmentController@getDepartments')->name('admin.getDepartments');
    Route::post('/departmentDatatable', 'DepartmentController@departmentDatatable')->name('departmentDatatable');
Route::post('/departmentSaveUpdate', 'DepartmentController@departmentSaveUpdate')->name('departmentSaveUpdate');
Route::post('/dapertmentEdit', 'DepartmentController@dapertmentEdit')->name('dapertmentEdit');
Route::post('/departmentDelete', 'DepartmentController@departmentDelete')->name('departmentDelete');
    
/*********************User ********************/
Route::get('/employee','UserController@getEmployee')->name('admin.employee');
Route::post('/employeeSaveUpdate', 'UserController@employeeSaveUpdate')->name('employeeSaveUpdate');
Route::post('/employeeUsersDatatable', 'UserController@employeeUsersDatatable')->name('employeeUsersDatatable');
Route::post('/employeeEditData', 'UserController@employeeEditData')->name('employeeEditData');
Route::post('/employeeUserDelete', 'UserController@employeeUserDelete')->name('employeeUserDelete');

/*********************Holiday******************/
Route::get('/holiday','HolidayController@getHoliday')->name('admin.holiay');
Route::post('/holidayDatatable', 'HolidayController@holidayDatatable')->name('holidayDatatable');
Route::post('/holidaySaveUpdate', 'HolidayController@holidaySaveUpdate')->name('holidaySaveUpdate');
Route::post('/holidayEdit', 'HolidayController@holidayEdit')->name('holidayEdit');
Route::post('/holidayDelete', 'HolidayController@holidayDelete')->name('holidayDelete');
});
Route::get('/errors/404', function(){
    return view('errors.404');
});
Route::get('/home', 'HomeController@index')->name('home');
