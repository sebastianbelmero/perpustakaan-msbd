<?php

namespace App\Http\Livewire\Admin\Buku;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class DaftarKategori extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['Kategori-ditambahkan' => '$refresh'];
    public $tampil = 10;
    public $updateId = 0;
    public $nama = 0;


    public function render()
    {

        $kategories = Category::simplePaginate($this->tampil);
        $data = Category::all()->count();
        $ada = $kategories->count();
        return view('livewire.admin.buku.daftar-kategori', compact('kategories', 'data', 'ada'));
    }

    public function showFormKategori($kategoriId)
    {
        $kategori = Category::find($kategoriId);
        $this->nama = $kategori->nama;
        $this->updateId = $kategoriId;
    }

    public function ubahKategori($kategoriId)
    {
        $kategori = Category::find($kategoriId);
        $kategori->nama = $this->nama;
        $kategori->save();
        $this->updateId = 0;
    }



    public function hapusKategori($kategoriId)
    {
        $kategori = Category::find($kategoriId);
        $kategori->delete();
    }
}
