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
    return view('welcome');
});


// Route::get('/orangtua', function () {
// 	$or = App\orangtua::all();
// 	foreach ($or as $data) {
// 		echo $data->nama_ibu." dengan ";
// 		echo $data->nama_ayah." ";
// 		foreach ($data->anak as $key) {
// 			echo "<li>$key->nama</li><br>";
// 		}
// 	}
// });l

Route::get('/percobaan', 'MyController@index');
Route::get('/tampilan', 'MyController@tampilan');
Route::get('/tampilanmodel', 'MyController@tampilanmodel');
Route::resource('/orangtua', 'orangtuaController');
Route::resource('/anak', 'anakController');
Route::resource('/author', 'authorController');
Route::resource('/book', 'bookController');
Auth::routes();