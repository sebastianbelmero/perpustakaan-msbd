<?php

namespace App\Http\Livewire\Member;

use App\Models\Book;
use Livewire\Component;

class DetailBuku extends Component
{
    public $idnya;

    public function mount($id)
    {
        $this->idnya = $id;
    }
    public function render()
    {
        $collection = Book::find($this->idnya);
        return view('livewire.member.detail-buku', compact('collection'))
            ->extends('layouts.utama')
            ->section('content');
    }
}
