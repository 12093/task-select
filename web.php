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

Route::get('/', function () {
    // return view('welcome');
    echo "selamat datang piq";
});
Route::get('/satu', function () {
    // return view('welcome');
    echo "one";
});
Route::get('/dua', function () {
    // return view('welcome');
    echo "two";
});
Route::get('/tiga', function () {
    // return view('welcome');
    echo "three";
});
Route::get('/empat', function () {
    // return view('welcome');
    echo "four";
});
Route::get('/lima', function () {
    // return view('welcome');
    echo "five";
});
Route::get('/enam', function () {
    // return view('welcome');
    echo "six";
});
Route::get('/tujuh', function () {
    // return view('welcome');
    echo "seven";
});
Route::get('/delapan', function () {
    // return view('welcome');
    echo "eight";
});
Route::get('/sembilan', function () {
    // return view('welcome');
    echo "nine";
});
Route::get('/nemplate', function () {
    return view('template');
});

// 1.echo langsung nested
Route::get('/sepuluh', function () {
    // return view('welcome');
    echo "ten";
});
// 2.manggil view
Route::get('/sepuluh', function () {
    // return view('welcome');
    return view('telo');
});
// 3.manggil controler
Route::get('/usang', 'UsangController@index' );
/* file controllernya namanya UsangController
nama url usang
index nama functionnya
*/
Route::get('/jeruk', 'UsangController@godog' );

Route::get('/terong', 'kentang@sandal' );

Route::get('/CleaningService', 'CleanerController@tables' );

Route::resource('kontak', 'Kontak');

Route::get('/', function(){
  return view('index');
});
