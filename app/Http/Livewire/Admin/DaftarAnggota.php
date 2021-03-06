<?php

namespace App\Http\Livewire\Admin;

use App\Models\Members;
use App\Models\VMember;
use Livewire\Component;
use Livewire\WithPagination;

class DaftarAnggota extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $tampil = 10;

    public $search;

    protected $queryString = ['search'];

    public function render()
    {
        $members = VMember::where('name', 'like', '%' . $this->search . '%')->simplePaginate($this->tampil);
        $data = VMember::where('name', 'like', '%' . $this->search . '%')->count();
        $ada = $members->count();
        return view('livewire.admin.daftar-anggota', compact('members', 'data', 'ada'))
            ->extends('adminlte::page')
            ->section('content');
    }
    public function hapusAnggota($memberId)
    {
        $member = Members::find($memberId);
        $member->delete();
    }
}
