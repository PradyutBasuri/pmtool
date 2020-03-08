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
    return view('auth.login');
});



Route::get('/home', 'HomeController@index')->name('home');


Route::get('index', function () {
    return view('index');
})->name('index');
Auth::routes();

Route::group(['middleware' => 'permissionCheck'],function(){

Route::get('users', function () {
    return view('users');
})->name('users');

Route::get('departments', function () {
    return view('departments');
})->name('departments');


Route::get('employee','UserController@getEmployee')->name('employee');


Route::get('activities', function () {
    return view('activities');
})->name('activities');


Route::get('holidays', function () {
    return view('holidays');
})->name('holidays');

Route::get('project_list', function () {
    return view('project_list');
})->name('project_list');


Route::get('taskboard', function () {
    return view('taskboard');
})->name('taskboard');


Route::get('ticket_list', function () {
    return view('ticket_list');
})->name('ticket_list');


Route::get('ticketdetails', function () {
    return view('ticketdetails');
})->name('ticketdetails');


Route::get('clients', function () {
    return view('clients');
})->name('clients');


Route::get('todo_list', function () {
    return view('todo_list');
})->name('todo_list');


//User Controller
Route::post('employeeSaveUpdate', 'UserController@employeeSaveUpdate')->name('employeeSaveUpdate');
Route::post('employeeUsersDatatable', 'UserController@employeeUsersDatatable')->name('employeeUsersDatatable');
Route::post('employeeEditData', 'UserController@employeeEditData')->name('employeeEditData');
Route::post('employeeUserDelete', 'UserController@employeeUserDelete')->name('employeeUserDelete');

//Depaerment
Route::post('departmentDatatable', 'DepartmentController@departmentDatatable')->name('departmentDatatable');
Route::post('departmentSaveUpdate', 'DepartmentController@departmentSaveUpdate')->name('departmentSaveUpdate');
Route::post('dapertmentEdit', 'DepartmentController@dapertmentEdit')->name('dapertmentEdit');
Route::post('departmentDelete', 'DepartmentController@departmentDelete')->name('departmentDelete');

/*********************Holiday******************/
Route::post('holidaySaveUpdate', 'holidayController@holidaySaveUpdate')->name('holidaySaveUpdate');
Route::post('holidayEdit', 'holidayController@holidayEdit')->name('holidayEdit');
Route::post('holidayDelete', 'holidayController@holidayDelete')->name('holidayDelete');


/*********************Leaves******************/
Route::post('leavesDatatable', 'leaveController@leavesDatatable')->name('leavesDatatable');
Route::post('leaveStatusChanged', 'leaveController@leaveStatusChanged')->name('leaveStatusChanged');

/*********************Client ********************/
Route::post('clientSave', 'ClientController@clientSave')->name('clientSave');
Route::post('getClientDetails', 'ClientController@getClientDetails')->name('getClientDetails');
Route::post('getProfileView', 'ClientController@getProfileView')->name('getProfileView');


});