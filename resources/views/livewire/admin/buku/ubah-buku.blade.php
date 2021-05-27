<div>
    <form wire:submit.prevent="updateBook">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="form-group" style="position: relative;">
                    <label for="labelJudul">Judul</label>
                    <input type="text" wire:model.defer="judul" class="form-control" id="labelJudul" placeholder="Input Judul" />
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group" style="position: relative;">
                    <label for="labelKategori">Kategori</label>
                    <select wire:model.defer="kategori" class="form-control">
                        <option value="">Pilih Kategori</option>
                        @foreach ($collection as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="labelISBN">ISBN</label>
                    <input type="text" wire:model.defer="isbn" class="form-control" id="labelISBN" placeholder="Input ISBN" />
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="labelPenerbit">Penerbit</label>
                    <input type="text" wire:model.defer="penerbit" class="form-control" id="labelPenerbit" placeholder="Input Penerbit" />
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="labelPengarang">Pengarang</label>
                    <input type="text" wire:model.defer="pengarang" class="form-control" id="labelPengarang" placeholder="Input Pengarang" />
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="labelTahun">Tahun</label>
                    <input type="text" wire:model.defer="tahun" class="form-control" id="labelTahun" placeholder="Input Tahun Penerbitan Buku" />
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="labelTgl-masuk">Tanggal Masuk</label>
                    <input type="date" wire:model.defer="tglMasuk" class="form-control" id="labelTgl-masuk" />
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="labelEdisi">Edisi</label>
                    <input type="text" wire:model.defer="edisi" class="form-control" id="labelEdisi" placeholder="Input Edisi Buku" />
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="labelWebsite">Website</label>
                    <input type="text" wire:model.defer="website" class="form-control" id="labelWebsite" placeholder="Input Website Buku" />
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="labelEmail">Email</label>
                    <input type="email" wire:model.defer="email" class="form-control" id="labelEmail" placeholder="Input Email" />
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="labelJumlah">Jumlah</label>
                    <input type="number" wire:model.defer="jumlah" class="form-control" id="labelJumlah" placeholder="Input Jumlah Buku" />
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label class="text-white">.</label>
                    <button type="submit" class="btn btn-primary btn-block">
                        Ubah Buku
                    </button>
                </div>
            </div>
        </div>

    </form>
</div>