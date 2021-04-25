<div>
    <div wire:loading wire:target="cari" class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
    <form wire:submit.prevent="cari">
        <div class="row">
            <div class="col-12">
                <div class="form-group" style="position: relative;">
                    <label for="labelJudul">Judul</label>
                    <input type="text" wire:model="judul" class="form-control" id="labelJudul" placeholder="Input Judul" />
                    <ul class="list-group w-100 {{ $judul != '' ? '' : 'd-none' }}" style="position: absolute; z-index: 1">
                        @if ($datas != '' && $isbn == '')    
                        <li class="list-group-item active">Menampilkan 5 dari {{ $tampil }} Judul</li>
                        @foreach ($datas as $data)
                        <button wire:click="setIsbn('{{$data['ISBN']}}')" class="list-group-item text-left">{{ $data['Judul'] }}</button>
                        @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </form>
    <form>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="labelISBN">ISBN</label>
                    <input type="text" wire:model="isbn" class="form-control" id="labelISBN" placeholder="Input ISBN" />
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="labelPenerbit">Penerbit</label>
                    <input type="text" wire:model="penerbit" class="form-control" id="labelPenerbit" placeholder="Input Penerbit" />
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="labelPengarang">Pengarang</label>
                    <input type="text" wire:model="pengarang" class="form-control" id="labelPengarang" placeholder="Input Pengarang" />
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="labelTahun">Tahun</label>
                    <input type="text" wire:model="tahun" class="form-control" id="labelTahun" placeholder="Input Tahun Penerbitan Buku" />
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="labelTgl-masuk">Tanggal Masuk</label>
                    <input type="date" wire:model="tglMasuk" class="form-control" id="labelTgl-masuk" />
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="labelEdisi">Edisi</label>
                    <input type="text" wire:model="edisi" class="form-control" id="labelEdisi" placeholder="Input Edisi Buku" />
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="labelWebsite">Website</label>
                    <input type="text" wire:model="website" class="form-control" id="labelWebsite" placeholder="Input Website Buku" />
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="labelEmail">Email</label>
                    <input type="email" wire:model="email" class="form-control" id="labelEmail" placeholder="Input Email" />
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="labelJumlah">Jumlah</label>
                    <input type="number" wire:model="jumlah" class="form-control" id="labelJumlah" placeholder="Input Jumlah Buku" />
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label class="text-white">.</label>
                    <button type="submit" wire:click="tambahBuku" class="btn btn-primary btn-block">
                        Tambah Buku
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>