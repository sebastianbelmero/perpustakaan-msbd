<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Livewire\Admin\Buku\DaftarBuku;
use App\Http\Livewire\Admin\Buku\Kategori;
use App\Http\Livewire\Admin\Buku\PilihBuku;
use App\Http\Livewire\Admin\Buku\TambahBuku;
use App\Http\Livewire\Admin\Buku\UbahBuku;
use App\Http\Livewire\Admin\DaftarAnggota;
use App\Http\Livewire\Admin\DaftarSaran;
use App\Http\Livewire\Admin\TambahAnggota;
use App\Http\Livewire\Admin\DaftarUsulanBuku;
use App\Http\Livewire\Hubungi;
use App\Http\Livewire\Member\DetailBuku;
use App\Http\Livewire\Member\FormUsulan;
use App\Http\Livewire\Member\KoleksiBuku;
use App\Http\Livewire\Member\PilihUsulan;
use App\Http\Livewire\Pages\Denda;
use App\Http\Livewire\Pages\Home;
use App\Http\Livewire\Pages\Koleksi;
use App\Http\Livewire\Pages\Pembayaran;
use App\Http\Livewire\Pages\Peminjaman;
use App\Http\Livewire\Pages\Usulan;
use App\Models\Message;
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
Route::get('/kindle', function () {
    return view('layouts/kindle');
})->name('kindle');

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
    Route::get('/daftar-usulan-buku', DaftarUsulanBuku::class)->name('daftar-usulan-buku');
    Route::get('/saran', DaftarSaran::class)->name('daftar-saran');
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
Route::get('/koleksi-buku', KoleksiBuku::class)->name('koleksi-buku');
Route::get('/koleksi-buku/detail-buku/{id}', DetailBuku::class)->name('detail-buku');
Route::get('/form-usulan', FormUsulan::class)->name('form-usulan');


Route::get('/halaman-depan', Home::class)->name('halaman-depan');
Route::get('/halaman-depan/koleksi', Koleksi::class)->name('halaman-depan.koleksi');
Route::get('/halaman-depan/peminjaman', Peminjaman::class)->name('halaman-depan.peminjaman');
Route::get('/halaman-depan/pembayaran', Pembayaran::class)->name('halaman-depan.pembayaran');
Route::get('/halaman-depan/denda', Denda::class)->name('halaman-depan.denda');
Route::get('/halaman-depan/usulan', Usulan::class)->name('halaman-depan.usulan');

Route::middleware(['auth', 'isAdmin: user'])->group(function () {
});


