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

Route::get('/','accueilController@index');
Route::get('/job','accueilJobController@index');
Route::get('/joblist','jobSingleController@index');
Route::get('/company','singleCompanyController@index');
Route::get('/listcompany','listCompanyController@index');
Route::get('/createcompanyjob','createCompanyJobController@index');
Route::get('/contact','contactController@index');
Route::get('/aboutus','aboutUsController@index');
Route::get('/faq','faqController@index');
Route::get('/price','priceController@index');
Route::get('/blog','blogController@index');
