<?php

use \Illuminate\Support\Facades\Route;

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

//管理者画面
Route::get('/admin_index', 'CrudMonthlyReportController@index');


//月次報告登録画面
Route::get('/user_post', 'CrudMonthlyReportController@post');
Route::post('/user_confirm', 'CrudMonthlyReportController@confirm');
Route::post('/user_create', 'CrudMonthlyReportController@create');
Route::get('/user_complete', 'CrudMonthlyReportController@complete');

//月次報告表示画面
Route::get('/user_view_monthly_report', 'CrudMonthlyReportController@viewLastMonthReport');
