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

Route::get('/', 'PagesController@index')->name('index');
Route::get('/news{newsNum?}', 'PagesController@news')->name('news');
Route::get('/schedule', 'PagesController@schedule')->name('schedule');
Route::get('/contacts', 'PagesController@contacts')->name('contacts');
Route::get('/pupil{id?}', 'PagesController@pupil')->name('pupil');
Route::get('/extracurriculars', 'PagesController@extracurriculars')->name('extracurriculars');
Route::get('/extracurricular{id?}', 'PagesController@extracurricular')->name('extracurricular');
Route::get('/{class?}', 'PagesController@class')->name('class');


Route::post('/contacts', 'ContactController@submit');
