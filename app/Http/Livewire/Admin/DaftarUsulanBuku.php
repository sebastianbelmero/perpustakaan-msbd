<?php

namespace App\Http\Livewire\Admin;

use App\Models\Message;
use Livewire\Component;
use Livewire\WithPagination;

class DaftarUsulanBuku extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $tampil = 10;

    public $search;

    protected $queryString = ['search'];
    public function render()
    {
        $usulan = Message::where('judul', 'like', '%'.$this->search.'%')->simplePaginate($this->tampil);
        $data = Message::where('judul', 'like', '%'.$this->search.'%')->count();
        $ada = $usulan->count();
        return view('livewire.admin.daftar-usulan-buku', compact('usulan', 'data', 'ada'))
        ->extends('adminlte::page')
            ->section('content');
    }
}
