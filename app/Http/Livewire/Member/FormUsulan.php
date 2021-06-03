<?php

namespace App\Http\Livewire\Member;

use App\Models\Message;
use Livewire\Component;
use Illuminate\Support\Facades\Http;

class FormUsulan extends Component
{
    public $judul, $penerbit, $pengarang;
    
    public function render()
    {
        return view('livewire.member.form-usulan')
            ->extends('layouts.utama')
            ->section('content');
    }

    public function tambahUsulan()
    {
        Message::create([
            'judul' => $this->judul,
            'penerbit' => $this->penerbit,
            'pengarang' => $this->pengarang,

        ]);

        $this->reset();
    }
}
