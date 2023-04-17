<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KendaraanController;


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

Route::get('/ ', function() {
    return view('login');
});

Route::get('/admin', function () {
    return view('admin/admin');
});

Route::get('/petugas-masuk', function () {
    return view('petugas/masuk');
});

Route::get('/petugas-keluar', function () {
    return view('petugas/keluar');
});

Route::get('/petugas-ruang', function () {
    return view('petugas/ruang');
});

// Route::resource('kendaraan', KendaraanController::class);

// USER AKTIVITAS
//Route::get('/ ', 'App\Http\Controllers\AdminController@lihat');
Route::get('/users', 'App\Http\Controllers\AdminController@lihat');
Route::get('/tambah', 'App\Http\Controllers\AdminController@tambah');
Route::get('user/delete/{id}', 'App\Http\Controllers\AdminController@delete')->name('delete');
Route::get('user/edit/{id}', 'App\Http\Controllers\AdminController@edit_user')->name('edit_user');
Route::get('user/update', 'App\Http\Controllers\AdminController@edit_user_aksi')->name('edit_user
_aksi');
Route::get('user/add_user', 'App\Http\Controllers\AdminController@add_user')->name('add_user');


// KENDARAAN 
Route::get('kendaraan', 'App\Http\Controllers\KendaraanController@index')->name('kendaraan');
Route::get('/kendaraan/inputMasuk', 'App\Http\Controllers\KendaraanController@inputMasuk')->name('inputMasuk');
Route::get('/tampil_input_masuk', 'App\Http\Controllers\KendaraanController@inputMasuk')->name('inputMasuk');
Route::get('/kendaraan/inputKeluar', 'App\Http\Controllers\KendaraanController@inputKeluar')->name('inputKeluar');
Route::get('/tampil_input_keluar', 'App\Http\Controllers\KendaraanController@inputKeluar')->name('inputKeluar');
Route::get('/inputRuang_kendaraan', 'App\Http\Controllers\KendaraanController@aturRuang')->name('aturRuang');
Route::post('/kendaraan/inputCariKeluar', 'App\Http\Controllers\KendaraanController@cariPlat')->name('inputCariPlat');
Route::post('/kendaraan/kendaraanMasuk', 'App\Http\Controllers\KendaraanController@kelolaMasuk')->name('kendaraanMasuk');
Route::get('/kendaraan/gantistatuskeluar', 'App\Http\Controllers\KendaraanController@gantiStatusKeluar')->name('gantiStatusKeluar');
Route::get('/kendaraan/kendaraanKeluar/{plat}', 'App\Http\Controllers\KendaraanController@kelolaKeluar')->name('kendaraanKeluar');
Route::get('/kendaraan/tampil_kendaraan', 'App\Http\Controllers\KendaraanController@tampilkan_kendaraan')->name('tampil_kendaraan');
Route::get('/kendaraan/aturRuang', 'App\Http\Controllers\KendaraanController@aturRuang')->name('aturRuang');
Route::post('/kendaraan/inputCariRuang', 'App\Http\Controllers\KendaraanController@cariDinamis')->name('cariDinamis');

//login
Route::post('/login', 'App\Http\Controllers\LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');

Route::post('/kendaraan', function() {
    return view('tampil_kendaraan');
});