<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/lfi','App\Http\Controllers\LFIController@index');
Route::post('/lfi','App\Http\Controllers\LFIController@lfi');
Route::match(['get','post'],'/xss','App\Http\Controllers\XSSController@index');
Route::match(['get','post'],'/xxe','App\Http\Controllers\XXEController@index');
Route::get('/upload','App\Http\Controllers\FileUploadController@index');   
Route::post('/upload','App\Http\Controllers\FileUploadController@upload');
Route::get('/store/{filename?}','App\Http\Controllers\FileUploadController@getFile');
Route::get('/sqli/{id}','App\Http\Controllers\SqliController@getUser');
Route::get('/ssrf','App\Http\Controllers\SSRFController@index');
Route::get('/cachepoisoning','App\Http\Controllers\CachepoisoningController@index');
Route::get('/brac','App\Http\Controllers\BrokenAccessControlController@showNote');
Route::post('/brac','App\Http\Controllers\BrokenAccessControlController@insertNote');
Route::get('/brac/{PostID?}','App\Http\Controllers\BrokenAccessControlController@showSpecificNote');
Route::get('/csrf','App\Http\Controllers\CSRFController@index');
Route::post('/csrf','App\Http\Controllers\CSRFController@changeEmail');