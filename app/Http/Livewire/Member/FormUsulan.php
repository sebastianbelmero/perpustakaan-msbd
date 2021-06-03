<?php

namespace App\Http\Livewire\Member;

use App\Models\Message;
use Livewire\Component;
use Illuminate\Support\Facades\Http;

class FormUsulan extends Component
{
    public $judul, $penerbit, $pengarang;
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
        }

        return view('livewire.member.form-usulan')
            ->extends('layouts.utama')
            ->section('content');
    }
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }

    public function tambahUsulan()
    {
        Message::create([

            'isbn' => $this->isbn,
            'judul' => $this->judul,
            'penerbit' => $this->penerbit,
            'pengarang' => $this->pengarang,

        ]);

        $this->reset();
    }
}
