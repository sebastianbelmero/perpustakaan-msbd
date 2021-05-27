<div>
    <form wire:submit.prevent="tambahKategori">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="labelkategori">Nama Kategori</label>
                    <input type="text" wire:model.defer="nama" class="form-control" id="labelkategori" placeholder="Input Nama Kategori" />
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label class="text-white">.</label>
                    <button type="submit" class="btn btn-primary btn-block">
                        Tambah Kategori
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
