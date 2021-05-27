<div>
<form wire:submit.prevent="updateBook">
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="labelISBN">ISBN</label>
                <input wire:model.defer="isbn" type="text" class="form-control" id="labelISBN" placeholder="Input ISBN" />
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
                <input wire:model.defer="edisi" type="text" class="form-control" id="labelEdisi" placeholder="Input Edisi Buku" />
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="labelWebsite">Website</label>
                <input wire:model.defer="website" type="text" class="form-control" id="labelWebsite" placeholder="Input Website Buku" />
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="labelEmail">Email</label>
                <input wire:model.defer="email" type="email" class="form-control" id="labelEmail" placeholder="Input Email" />
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="labelJumlah">Jumlah</label>
                <input wire:model.defer="jumlah" type="number" class="form-control" id="labelJumlah" placeholder="Input Jumlah Buku" />
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label class="text-white">.</label>
                <button type="submit" class="btn btn-primary btn-sm text-white btn-block">
                    Ubah Buku
                </button>
            </div>
        </div>
    </div>
</form>
</div>
