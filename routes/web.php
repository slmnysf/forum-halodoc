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

use App\Http\Controllers\AuthController;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});
Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/diskusi','DiskusiController@index')->middleware('auth');
Route::get('/checkup','CheckupController@index')->middleware('auth');
Route::get('/login','AuthController@login')->name('login');
Route::get('/registrasi','RegistrasiController@index');
Route::post('/postlogin','AuthController@postlogin');
Route::get('logout','AuthController@logout');
Route::post('/postregis','RegistrasiController@postregis');
Route::get('/checkup/{penyakit}','CheckupController@penyakit')->middleware('auth');
Route::post('/diskusi/create','DiskusiController@create')->middleware('auth');
Route::get('/diskusi/{forum}/view','DiskusiController@view')->middleware('auth');
Route::post('/diskusi/{forum}/view','DiskusiController@postkomentar')->middleware('auth');
Route::get('/diskusi/{forum}/delete','DiskusiController@deletediskusi')->middleware('auth');
Route::get('/komentar/{komentar}/delete','DiskusiController@deletekomentar')->middleware('auth');
