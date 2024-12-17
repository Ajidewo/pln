<?php

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

Route::get('/golongan', ['App\Http\Controllers\GolonganController', 'index'])->name('golongan.index');
Route::get('/golongan/create', ['App\Http\Controllers\GolonganController', 'create'])->name('golongan.create');
Route::post('/golongan', ['App\Http\Controllers\GolonganController', 'store'])->name('golongan.store');
Route::get('/golongan/{id}/edit', ['App\Http\Controllers\GolonganController', 'edit'])->name('golongan.edit');
Route::delete('/golongan/{id}', ['App\Http\Controllers\GolonganController', 'destroy'])->name('golongan.destroy');
Route::put('/golongan/{id}', ['App\Http\Controllers\GolonganController', 'update'])->name('golongan.update');
Route::get('/users', ['App\Http\Controllers\UsersController', 'index'])->name('users.index');
Route::get('/users/create', ['App\Http\Controllers\UsersController', 'create'])->name('users.create');
Route::post('/users', ['App\Http\Controllers\UsersController', 'store'])->name('users.store');
Route::get('/users/{id}/edit', ['App\Http\Controllers\UsersController', 'edit'])->name('users.edit');
Route::put('/users/{id}', ['App\Http\Controllers\UsersController', 'update'])->name('users.update');
Route::delete('/users/{id}', ['App\Http\Controllers\UsersController', 'destroy'])->name('users.destroy');
Route::get('/pelanggan', ['App\Http\Controllers\PelangganController','index']);
Route::get('/pelanggan/create', ['App\Http\Controllers\PelangganController', 'create'])->name('pelanggan.create');
Route::post('/pelanggan', ['App\Http\Controllers\PelangganController', 'store'])->name('pelanggan.store');
Route::get('/pelanggan/{id}/edit', ['App\Http\Controllers\PelangganController', 'edit'])->name('pelanggan.edit');
Route::put('/pelanggan/{id}', ['App\Http\Controllers\PelangganController', 'update'])->name('pelanggan.update');
Route::delete('/pelanggan/{id}', ['App\Http\Controllers\PelangganController', 'destroy'])->name('pelanggan.destroy');
Route::get('/pelanggan', ['App\Http\Controllers\PelangganController', 'index'])->name('pelanggan.index');
