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
    public $nama;


    public function render()
    {

        $kategories = Category::simplePaginate($this->tampil);
        $data = Category::all()->count();
        $ada = $kategories->count();
        return view('livewire.admin.buku.daftar-kategori', compact('kategories', 'data', 'ada'));
    }

    public function hapusKategori($kategoriId)
    {
        $content = Category::find($kategoriId);
        $content->delete();
    }
}
