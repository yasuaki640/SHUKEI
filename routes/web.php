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
Route::get('/admin/index', 'CrudMonthlyReportController@index');


//月次報告登録画面
Route::get('/user/post', 'CrudMonthlyReportController@post');
Route::post('/user/confirm', 'CrudMonthlyReportController@confirm');
Route::post('/user/create', 'CrudMonthlyReportController@create');
Route::get('/user/complete', 'CrudMonthlyReportController@complete');

//月次報告表示画面
Route::get('/user/view_monthly_report', 'CrudMonthlyReportController@viewLastMonthReport');
