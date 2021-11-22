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

Route::get('/', function () {
    return view('login');
});

Route::post('login-post', 'loginController@login_process');
Route::get('logout', 'loginController@logout');

Route::get('leave', 'leaveController@index');
Route::post('leave-insert', 'leaveController@leave_add');
Route::get('update-status/{id}/{id1}', 'leaveController@update_status');
Route::post('reject-status', 'leaveController@reject_status');


