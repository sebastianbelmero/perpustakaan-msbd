<?php

namespace App\Http\Livewire\Pages\Components;

use Livewire\Component;

class Header extends Component
{
    public $data;

    public function mount()
    {
        $this -> data['title'] = 'SMPN 5 Penyabungan';
        $this -> data['links'] = [
            'link' => [
                'Beranda' => [
                    'route' => 'halaman-depan'
                ],
                'Koleksi' => [
                    'route' => 'halaman-depan.koleksi'
                ],
                'Peminjaman' => [
                    'route' => 'halaman-depan.peminjaman'
                ],
                'Pembayaran' => [
                    'route' => 'halaman-depan.pembayaran'
                ],
                'Denda' => [
                    'route' => 'halaman-depan.denda'
                ],
                'Usulan' => [
                    'route' => 'halaman-depan.usulan'
                ]
            ]

        ];
    }
    public function render()
    {
        return view('livewire.pages.components.header');
    }
}
