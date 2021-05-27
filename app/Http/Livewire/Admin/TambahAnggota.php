<?php

namespace App\Http\Livewire\Admin;

use App\Models\Members;
use Livewire\Component;

class TambahAnggota extends Component
{
    public $nomorInduk;
    public $nama;
    public $username;
    public $password;
    public $kelas;
    public $tglLahir;
    public $jenisKelamin;
    public function render()
    {
        return view('livewire.admin.tambah-anggota')
            ->extends('adminlte::page')
            ->section('content');
    }
    public function tambahAnggota()
    {
        Members::create([
            'nomor_induk' => $this->nomorInduk,
            'nama' => $this->nama,
            'username' => $this->username,
            'password' => $this->password,
            'kelas' => $this->kelas,
            'tgl_lahir' => $this->tglLahir,
            'jenis_kelamin' => $this->jenisKelamin,

        ]);
        $this->reset();
        return redirect()->route('daftar-anggota');
    }
}
