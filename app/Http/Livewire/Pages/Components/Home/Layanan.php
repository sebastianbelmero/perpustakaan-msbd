<?php

namespace App\Http\Livewire\Pages\Components\Home;

use Livewire\Component;

class Layanan extends Component
{
    public $data;

    public function mount()
    {
        $this->data['layanan'] = [
            'Koleksi Buku' => [
                'img' => 'covido/images/koleksi.jpg',
                'p' => 'Lihat seluruh koleksi buku yang ada di Perpustakaan SMPN 5 Penyabungan',
                'route' => 'koleksi-buku'
            ],
            'Form Usulan' => [
                'img' => 'covido/images/usulan.jpg',
                'p' => 'Usulkan buku yang Anda butuhkan dalam menunjang pembelajaran atau juga buku yang bersifat umum',
                'route' => 'form-usulan'
            ],
            'Cek Peminjaman' => [
                'img' => 'covido/images/pinjam.jpg',
                'p' => 'Lakukan pengecekan peminjaman buku maupun denda dari buku yang telah dipinjam',
                'route' => 'form-usulan'
            ],
        ];
    }
    public function render()
    {
        return view('livewire.pages.components.home.layanan');
    }
}
