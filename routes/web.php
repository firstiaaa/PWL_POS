<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/user' , [UserController::class, 'index']);

Route::get('/user/tambah', [UserController::class, 'tambah']);
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);
Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);
Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);
Route::get('/kategori', [KategoriController::class, 'index']);

Route::get('/kategori/create', [KategoriController::class, 'create']);
Route::post('/kategori', [KategoriController::class, 'store']);

//create add button tugas no.1
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('/kategori/create');

//create menu di navbar tugas no.2
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');

//create action edit tugas no.3
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('/kategori/edit');
Route::put('/kategori/update/{id}', [KategoriController::class, 'update'])->name('/kategori/kategori_update');
Route::get('/kategori/kategori_update', [KategoriController::class, 'kategori_update'])->name('kategori.kategori_update');

//create action delete tugas no.4
Route::get('/kategori/delete/{id}', [KategoriController::class, 'delete'])->name('/kategori/delete');