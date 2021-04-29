<?php

namespace App\Http\Livewire\Admin\Buku;

use Livewire\Component;
use App\Models\Book;
use Illuminate\Support\Facades\Http;

class TambahBuku extends Component
{
    public $isbn, $judul, $penerbit, $pengarang, $tahun, $tglMasuk, $edisi, $website, $email, $jumlah;
    public $datas, $tampil;

    public function render()
    {
        if ($this->isbn != '') {
            $datas = Http::get("https://isbn.perpusnas.go.id/Account/GetBuku?kd1=ISBN&kd2=$this->isbn&limit=10&offset=0&search=");
            $data = $datas['rows'][0];
            $this->judul = $data['Judul'];
            $this->penerbit = $data['Penerbit'];
            $this->pengarang = $data['Pengarang'];
            $this->tahun = $data['Tahun'];
            $this->edisi = $data['Seri'];
            $this->website = $data['Website'];
            $this->email = $data['Email'];
        }
        return view('livewire.admin.buku.tambah-buku')
            ->extends('adminlte::page')
            ->section('content');
    }

    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }

    public function cari()
    {
        if ($this->judul != '') {
            $datass = Http::get("https://isbn.perpusnas.go.id/Account/GetBuku?kd1=Judul&kd2=$this->judul&limit=5&offset=0&search=");
            $this->datas = $datass['rows'];
            $this->tampil = $datass['total'];
        }
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

        $this->reset();
        $this->emit('Buku-ditambahkan');
    }
}
