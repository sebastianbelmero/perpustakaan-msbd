<?php

namespace App\Http\Livewire\Admin;

use App\Models\Suggestion;
use Livewire\Component;
use Livewire\WithPagination;

class DaftarSaran extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $tampil = 10;

    public $search;

    protected $queryString = ['search'];
    public function render()
    {
        $saran = Suggestion::where('pesan', 'like', '%'.$this->search.'%')->simplePaginate($this->tampil);
        $data = Suggestion::where('pesan', 'like', '%'.$this->search.'%')->count();
        $ada = $saran->count();
        return view('livewire.admin.daftar-saran', compact('saran', 'data', 'ada'))
            ->extends('adminlte::page')
            ->section('content');
    }
}
