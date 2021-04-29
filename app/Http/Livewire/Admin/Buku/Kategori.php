<?php

namespace App\Http\Livewire\Admin\Buku;

use App\Models\Category;
use Livewire\Component;

class Kategori extends Component
{
    public $nama;
    public function render()
    {
        return view('livewire.admin.buku.kategori');
    }

    public function tambahKategori()
    {
        Category::create([

            'nama' => $this->nama

        ]);

        $this->reset();
        $this->emit('Kategori-ditambahkan');
    }
}
