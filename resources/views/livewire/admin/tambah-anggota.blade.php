<div>
    <h3>Tambah Anggota</h3>
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="form-group" style="position: relative;">
                <label for="labelNomorInduk">Nomor Induk</label>
                <input type="text" wire:model.defer="nomorInduk" class="form-control" id="labelNomorInduk" placeholder="Input Nomor Induk"  />
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group" style="position: relative;">
                <label for="labelNama">Nama</label>
                <input type="text" wire:model.defer="nama" class="form-control" id="labelNama" placeholder="Input Nama"/>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="labelUsername">Username</label>
                <input type="text" wire:model.defer="username" class="form-control" id="labelUsername" placeholder="Input Username" />
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="labelPassword">Password</label>
                <input type="password" wire:model.defer="password" class="form-control" id="labelPassword" placeholder="Input Password"/>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="labelKelas">Kelas</label>
                <select wire:model.defer="kelas" class="form-control">
                    <option value="">Pilih Kelas</option>
                    <option value="VII-1">VII - 1</option>
                    <option value="VII-2">VII - 2</option>
                    <option value="VIII-1">VIII - 1</option>
                    <option value="VIII-2">VIII - 2</option>
                    <option value="IX-1">IX - 1</option>
                    <option value="IX-2">IX - 2</option>
                </select>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="labelTgl-lahir">Tanggal Lahir</label>
                <input type="date" wire:model.defer="tglLahir" class="form-control" id="labelTgl-lahir" />
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="labelJenisKelamin">Jenis Kelamin</label><br>
                <select wire:model.defer="jenisKelamin" class="form-control">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-laki">Laki - Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="col-6 col-md-6">
                <div class="form-group">
                    <label class="text-white">.</label>
                    <button wire:click="tambahAnggota" class="btn btn-primary btn-block">
                        Tambah Anggota
                    </button>
                </div>
            </div>
        </div>
    </div>
