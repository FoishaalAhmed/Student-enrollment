<?php


//admin routes
Route::group(['middleware'=>'visitor'],function(){
Route::get('/admin-login','admin\AdminController@showLoginForm')->name('admin-login');
Route::post('/admin-login','admin\AdminController@login');
});

Route::group(['middleware'=>'admin'],function(){
Route::post('/logout','admin\AdminController@logout')->name('admin.logout');
Route::get('/admin-dashbord','admin\AdminController@showDashbord')->name('admin-home');
Route::resource('admin/student','admin\StudentController');
Route::resource('admin/teacher','admin\TeacherController');
Route::resource('admin/cource','admin\CourceController');
Route::resource('admin/cse','admin\CseController');
Route::resource('admin/cs','admin\CsController');
Route::resource('admin/bba','admin\BbaController');
Route::resource('admin/eee','admin\EeeController');
Route::resource('admin/profile','admin\ProfileController');
Route::resource('admin/password','admin\PasswordController');
});


