<?php

namespace App\Http\Livewire\Member;

use App\Models\Vbook;
use Livewire\Component;
use Livewire\WithPagination;

class KoleksiBuku extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $queryString = ['search'];
    public $search;
    public $tampil = 10;

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
        return view('livewire.member.koleksi-buku', compact('collection', 'data', 'ada'))
            ->extends('layouts.utama')
            ->section('content');
    }
}
