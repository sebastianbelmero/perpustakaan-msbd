<?php

namespace App\Http\Livewire\Admin\Buku;

use App\Models\Book;
use Livewire\Component;


class UbahBuku extends Component
{
    public $idnya;
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
        $this->idnya = $idnya;
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
    public function updateBook()
    {
        $item = Book::find($this->idnya);
        $item->judul = $this->judul;
        $item->pengarang = $this->pengarang;
        $item->tahun = $this->tahun;
        $item->tgl_masuk = $this->tglMasuk;
        $item->edisi = $this->edisi;
        $item->website = $this->website;
        $item->email = $this->email;
        $item->jumlah = $this->jumlah;
        $item->kategori = $this->kategori;
        $item->save();
    }
    public function render()
    {
        return view('livewire.admin.buku.ubah-buku')
            ->extends('adminlte::page')
            ->section('content');
    }
}
