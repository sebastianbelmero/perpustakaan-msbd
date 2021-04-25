<form>
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="labelISBN">ISBN</label>
                <input
                    type="text"
                    wire:model="isbn"
                    class="form-control"
                    id="labelISBN"
                    placeholder="Input ISBN"
                />
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="labelJudul">Judul</label>
                <input
                    type="text"
                    wire:model="judul"
                    class="form-control"
                    id="labelJudul"
                    placeholder="Input Judul"
                />
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="labelPenerbit">Penerbit</label>
                <input
                    type="text"
                    wire:model="penerbit"
                    class="form-control"
                    id="labelPenerbit"
                    placeholder="Input Penerbit"
                />
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="labelPengarang">Pengarang</label>
                <input
                    type="text"
                    wire:model="pengarang"
                    class="form-control"
                    id="labelPengarang"
                    placeholder="Input Pengarang"
                />
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="labelTahun">Tahun</label>
                <input
                    type="text"
                    wire:model="tahun"
                    class="form-control"
                    id="labelTahun"
                    placeholder="Input Tahun Penerbitan Buku"
                />
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="labelTgl-masuk">Tanggal Masuk</label>
                <input
                    type="date"
                    wire:model="tglMasuk"
                    class="form-control"
                    id="labelTgl-masuk"
                />
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="labelEdisi">Edisi</label>
                <input
                    type="text"
                    wire:model="edisi"
                    class="form-control"
                    id="labelEdisi"
                    placeholder="Input Edisi Buku"
                />
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="labelWebsite">Website</label>
                <input
                    type="text"
                    wire:model="website"
                    class="form-control"
                    id="labelWebsite"
                    placeholder="Input Website Buku"
                />
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="labelEmail">Email</label>
                <input
                    type="email"
                    wire:model="email"
                    class="form-control"
                    id="labelEmail"
                    placeholder="Input Email"
                />
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="labelJumlah">Jumlah</label>
                <input
                    type="number"
                    wire:model="jumlah"
                    class="form-control"
                    id="labelJumlah"
                    placeholder="Input Jumlah Buku"
                />
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-end">
        <button type="submit" wire:click="tambahBuku" class="btn btn-primary">
            Tambah Buku
        </button>
    </div>
</form>
