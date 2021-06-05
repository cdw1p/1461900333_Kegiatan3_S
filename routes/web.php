<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\GuruController;

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

Route::get('/', 'WelcomeController@index')->name('welcome.index');

// Modul Siswa
Route::get('/siswa', 'SiswaController@index')->name('siswa.index');
Route::get('/siswa/create', 'SiswaController@create')->name('siswa.create');
Route::post('/siswa/create', 'SiswaController@store')->name('siswa.store');
Route::get('/siswa/edit/{id}', 'SiswaController@edit')->name('siswa.edit');
Route::post('/siswa/edit/{id}', 'SiswaController@update')->name('siswa.update');
Route::get('/siswa/delete/{id}', 'SiswaController@delete')->name('siswa.delete');

// Modul Kelas
Route::get('/kelas', 'KelasController@index')->name('kelas.index');

// Modul Guru
Route::get('/guru', 'GuruController@index')->name('guru.index');