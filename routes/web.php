<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Livewire\Admin\Buku\DaftarBuku;
use App\Http\Livewire\Admin\Buku\Kategori;
use App\Http\Livewire\Admin\Buku\PilihBuku;
use App\Http\Livewire\Admin\Buku\TambahBuku;
use App\Http\Livewire\Admin\Buku\UbahBuku;
use App\Http\Livewire\Admin\DaftarAnggota;
use App\Http\Livewire\Admin\TambahAnggota;
use App\Http\Livewire\Hubungi;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('depan');
})->name('inidepanwoiii');

Auth::routes();

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/buku', DaftarBuku::class)->name('daftar-buku');
    Route::get('/buku/tambah-buku', TambahBuku::class)->name('tambah-buku');
    Route::get('/buku/pilih-buku', PilihBuku::class)->name('pilih-buku');
    Route::get('/buku/edit-buku/{idnya}', UbahBuku::class)->name('edit-buku');
    Route::get('/buku/kategori', function () {
        return view('admin/buku/kategori');
    })->name('kategori');
});
Route::get('/bukan-admin', function () {
    return view('bukan-admin');
})->name('bukan-admin');
Route::get('/validasi-login', function () {
    return view('validasi-login');
})->name('validasi-login');
Route::get('/tambah-anggota', TambahAnggota::class)->name('tambah-anggota');
Route::get('/daftar-anggota', DaftarAnggota::class)->name('daftar-anggota');
Route::get('/hubungi', Hubungi::class)->name('hubungi');

// Route::get('/buku/edit-buku/{id}', function ($id) {
//     return 'User ' . $id;
// });
