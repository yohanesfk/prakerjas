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
/*
//root halaman utama
Route::get('/', function () {
    return view('index');
});

//halaman about
Route::get('/about', function () {
    $nama = 'Joshua Immanuel Kurniawan';
    return view('about', ['nama' => $nama]);
});
*/
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/mahasiswa', 'MahasiswaController@index');

/*Route::get('/students', 'StudentsController@index');
Route::get('/students/create', 'StudentsController@create');
Route::get('/students/{student}', 'StudentsController@show');
Route::post('/students', 'StudentsController@store');
Route::delete('/students/{student}', 'StudentsController@destroy');
Route::get('/students/{student}/edit', 'StudentsController@edit');
Route::patch('/students/{student}', 'StudentsController@update');
*/
Route::resource('students', 'StudentsController');
