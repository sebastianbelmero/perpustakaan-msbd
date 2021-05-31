<?php

namespace App\Http\Livewire;

use App\Models\Suggestion;
use Livewire\Component;

class Hubungi extends Component
{
    public $nama;
    public $email;
    public $pesan;


    public function render()
    {
        return view('livewire.hubungi')
            ->extends('layouts.utama')
            ->section('content');
    }
    public function tambahSaran()
    {
        Suggestion::create([
            'nama' => $this->nama,
            'email' => $this->email,
            'pesan' => $this->pesan,
        ]);
        $this->reset();
    }
}
