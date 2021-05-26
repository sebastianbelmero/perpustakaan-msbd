<?php

namespace App\Http\Livewire\Admin\Buku;

use App\Models\Vbook;
use Livewire\Component;
use App\Models\Book;
use Livewire\WithPagination;

class DaftarBuku extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $queryString = ['search'];

    public $search;
    public $tampil = 10;
    public $updateId = 0;
    public $judul = 0;
    public $penerbit = 0;
    public $pengarang = 0;
    public $tahun = 0;
    public $tglMasuk = 0;
    public $edisi = 0;
    public $website = 0;
    public $email = 0;
    public $jumlah = 0;
    public $kategori = 0;

    public $a = true;
    public $b = true;
    public $c = false;
    public $d = false;
    public $e = false;
    public $f = false;
    public $g = false;
    public $id_buku;

    public $edit = [];

    public function render()
    {
        $ambil = Vbook::where('judul', 'like', "%$this->search%")
            ->orWhere('penerbit', 'like', "%$this->search%")
            ->orWhere('pengarang', 'like', "%$this->search%")
            ->orWhere('isbn', 'like', "%$this->search%");
        $collection = $ambil->simplePaginate($this->tampil);
        $data = $ambil->count();
        $ada = $collection->count();
        return view('livewire.admin.buku.daftar-buku', compact('collection', 'data', 'ada'))
            ->extends('adminlte::page')
            ->section('content');
    }

    public function showFormBook($itemId)
    {
        $item = Book::find($itemId);
        $this->judul = $item->judul;
        $this->penerbit = $item->penerbit;
        $this->pengarang = $item->pengarang;
        $this->tahun = $item->tahun;
        $this->tglMasuk = $item->tglMasuk;
        $this->edisi = $item->edisi;
        $this->website = $item->website;
        $this->email = $item->email;
        $this->jumlah = $item->jumlah;
        $this->kategori = $item->kategori;
        $this->updateId = $itemId;
    }
    public function updateBook($itemId)
    {
        $item = Book::find($itemId);
        $item->judul = $this->judul;
        $item->pengarang = $this->pengarang;
        $item->tahun = $this->tahun;
        $item->tglMasuk = $this->tglMasuk;
        $item->edisi = $this->edisi;
        $item->website = $this->website;
        $item->email = $this->email;
        $item->jumlah = $this->jumlah;
        $item->kategori = $this->kategori;
        $item->save();
        $this->updateId = 0;
    }

    public function hapusBuku($itemId)
    {
        $item = Book::find($itemId);
        $item->delete();
    }
}
