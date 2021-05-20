<?php

namespace App\Http\Livewire\Admin\Buku;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class PilihBuku extends Component
{
    public $pilihan = 'judul';
    public $judul, $data, $isbn;

    public function render()
    {
        return view('livewire.admin.buku.pilih-buku')
        ->extends('adminlte::page')
        ->section('content');
    }

    public function cari()
    {
        if ($this -> pilihan == 'isbn') {
            $data = Http::get("https://isbn.perpusnas.go.id/Account/GetBuku?kd1=ISBN&kd2=$this->judul&limit=10&offset=0&search=");
        }else{
            $data = Http::get("https://isbn.perpusnas.go.id/Account/GetBuku?kd1=Judul&kd2=$this->judul&limit=10&offset=0&search=");
        }
        $this -> data = $data['rows'];
    }

    public function pilih($isbn)
    {
        $this->isbn = $isbn;
    }

}
