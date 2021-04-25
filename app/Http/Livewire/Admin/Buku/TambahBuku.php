<?php

namespace App\Http\Livewire\Admin\Buku;

use Livewire\Component;
use App\Models\Book;


class TambahBuku extends Component
{
    public $isbn, $judul, $penerbit, $pengarang, $tahun, $tglMasuk, $edisi, $website, $email, $jumlah;

    public function render()
    {
        return view('livewire.admin.buku.tambah-buku')
            ->extends('adminlte::page')
            ->section('content');
    }

    public function tambahBuku()
    {
        Book::create([

            'isbn' => $this->isbn,
            'judul' => $this->judul,
            'penerbit' => $this->penerbit,
            'pengarang' => $this->pengarang,
            'tahun' => $this->tahun,
            'tgl_masuk' => $this->tglMasuk,
            'edisi' => $this->edisi,
            'website' => $this->website,
            'email' => $this->email,
            'jumlah' => $this->jumlah

        ]);

        $this->isbn = "";
        $this->judul = "";
        $this->penerbit = "";
        $this->pengarang = "";
        $this->tahun = "";
        $this->tglMasuk = "";
        $this->edisi = "";
        $this->website = "";
        $this->email = "";
        $this->jumlah = "";
        $this->emit('Buku-ditambahkan');
    }
}
