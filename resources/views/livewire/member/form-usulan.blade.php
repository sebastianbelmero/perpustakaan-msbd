<div>
    <div wire:loading wire:target="cari" class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="form-group" style="position: relative;">
                    <label for="labelJudul">Judul</label>
                    <input type="text" wire:model.defer="judul" class="form-control" id="labelJudul" placeholder="Input Judul" />
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
                    <label class="text-white">.</label>
                    <button wire:click="tambahUsulan" class="btn btn-primary btn-block">
                        Tambah Usulan
                    </button>
                </div>
            </div>
        </div>
</div>