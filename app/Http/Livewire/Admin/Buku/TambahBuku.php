<?php

namespace App\Http\Livewire\Admin\Buku;

use Livewire\Component;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Support\Facades\Http;

class TambahBuku extends Component
{
    public $judul, $penerbit, $pengarang, $tahun, $tglMasuk, $edisi, $website, $email, $jumlah, $kategori;
    public $datas, $tampil;

    public $isbn;

    protected $queryString = ['isbn'];

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
        $collection = Category::all();
        return view('livewire.admin.buku.tambah-buku', compact('collection'))
            ->extends('adminlte::page')
            ->section('content');
    }

    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
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
            'jumlah' => $this->jumlah,
            'id_kategori' => $this->kategori

        ]);

        $this->reset();
        $this->emit('Buku-ditambahkan');
        return redirect()->route('daftar-buku');
    }
}
