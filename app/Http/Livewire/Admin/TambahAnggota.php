<?php

namespace App\Http\Livewire\Admin;

use App\Models\Members;
use App\Models\User;
use Livewire\Component;

class TambahAnggota extends Component
{
    public $nomorInduk;
    public $nama;
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
        $email = explode(' ', $this->nama);
        $email = implode('.', $email);
        $email = $email."@student.ac.id";
        User::create([
            'name' => $this->nama,
            'email' => $email,
            'password' => password_hash($this->nomorInduk, PASSWORD_DEFAULT)
        ]);

        $getLastUser = User::orderBy('id', 'desc')->limit(1)->get();
        $idUser = $getLastUser[0]->id;

        Members::create([
            'id_user' => $idUser,
            'nomor_induk' => $this->nomorInduk,
            'kelas' => $this->kelas,
            'tgl_lahir' => $this->tglLahir,
            'jenis_kelamin' => $this->jenisKelamin,

        ]);
        $this->reset();
        return redirect()->route('daftar-anggota');
    }
}
