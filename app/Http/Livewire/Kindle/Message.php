<?php

namespace App\Http\Livewire\Kindle;

use App\Models\Message as ModelsMessage;
use Livewire\Component;

class Message extends Component
{
    public $judul, $penerbit, $pengarang;

    public function render()
    {
        return view('livewire.kindle.message');
    }

    public function tambahUsulan()
    {
        ModelsMessage::create([
            'judul' => $this->judul,
            'penerbit' => $this->penerbit,
            'pengarang' => $this->pengarang,

        ]);

        $this->reset();
    }
}
