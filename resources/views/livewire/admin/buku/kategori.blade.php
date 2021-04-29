<div>
        <form>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="labelkategori">Nama Kategori</label>
                    <input type="text" wire:model="nama" class="form-control" id="labelkategori" placeholder="Nama Kategori" />
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label class="text-white">.</label>
                    <button type="submit" wire:click="tambahKategori" class="btn btn-primary btn-block">
                        Tambah Kategori
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
