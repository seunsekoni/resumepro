<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('employees', 'EmployeeController@generate_employees');
Route::get('generate_job', 'EmployeeController@generate_job_history');
Route::get('generate_titles', 'EmployeeController@generate_titles');
Route::get('generate_departments', 'EmployeeController@generate_departments');
Route::get('view_employee/{emp_id}', 'EmployeeController@view_employee');
