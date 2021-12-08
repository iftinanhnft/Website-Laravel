<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ATKController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PendataanController;
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

Route::get('/home', [ATKController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/proses_login', [LoginController::class, 'proses_login']);
Route::get('/logout', [LoginController::class, 'logout']);

route::group([ 'middleware' => ['auth']], function(){
    Route::group(['middleware' => ['cek_login:admin']], function () {
    	/*
    		Route Khusus untuk role admin
    	*/
        Route::get('dashboard', [AdminController::class, 'index']);
    });
    Route::group(['middleware' => ['cek_login:pegawai']], function () {
    	/*
    		Route Khusus untuk role pegawai
    	*/
        Route::get('dashboard', [PegawaiController::class, 'index']);
    });
});

Route::get('/dashboard', [PendataanController::class, 'index']);
Route::get('/tambah', [PendataanController::class, 'create']);
Route::post('/simpan', [PendataanController::class, 'store' ]);
Route::get('/edit/{id}', [PendataanController::class, 'edit' ]);
Route::post('/update/{id}', [PendataanController::class, 'update' ]);
Route::get('/destroy/{id}', [PendataanController::class, 'destroy' ]);
