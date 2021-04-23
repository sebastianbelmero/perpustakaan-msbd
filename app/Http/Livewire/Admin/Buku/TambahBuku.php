<?php

namespace App\Http\Livewire\Admin\Buku;

use Livewire\Component;

class TambahBuku extends Component
{
    public function render()
    {
        return view('livewire.admin.buku.tambah-buku')
        ->extends('adminlte::page')
        ->section('content');
    }
}
