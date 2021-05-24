<?php

namespace App\Http\Livewire\Admin\Buku;

use App\Models\Book;
use Livewire\Component;

class UbahBuku extends Component
{
    public $idbukunya;
    public $tampil = 10;
    public $updateId = 0;
    public $judul = 0;
    public $isbn = 0;
    public $penerbit = 0;
    public $pengarang = 0;
    public $tahun = 0;
    public $tglMasuk = 0;
    public $edisi = 0;
    public $website = 0;
    public $email = 0;
    public $jumlah = 0;
    public $kategori = 0;

    public function mount($idnya)
    {
        $item = Book::find($idnya);
        $this->judul = $item->judul;
        $this->isbn = $item->isbn;
        $this->penerbit = $item->penerbit;
        $this->pengarang = $item->pengarang;
        $this->tahun = $item->tahun;
        $this->tglMasuk = $item->tgl_masuk;
        $this->edisi = $item->edisi;
        $this->website = $item->website;
        $this->email = $item->email;
        $this->jumlah = $item->jumlah;
        $this->kategori = $item->kategori;
    }
    public function render()
    {
        return view('livewire.admin.buku.ubah-buku')
            ->extends('adminlte::page')
            ->section('content');
    }
}
