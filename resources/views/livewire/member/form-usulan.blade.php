<div class="container py-5">
	<form wire:submit.prevent="tambahUsulan">
		<div class="row justify-content-center">
			<div class="col-12 col-md-6">
				<div class="form-group" style="position: relative;">
					<label for="labelJudul">Judul</label>
					<input type="text" wire:model.defer="judul" class="form-control" id="labelJudul" placeholder="Input Judul" />
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-12 col-md-6">
				<div class="form-group">
					<label for="labelPenerbit">Penerbit</label>
					<input type="text" wire:model.defer="penerbit" class="form-control" id="labelPenerbit"
						placeholder="Input Penerbit" />
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-12 col-md-6">
				<div class="form-group">
					<label for="labelPengarang">Pengarang</label>
					<input type="text" wire:model.defer="pengarang" class="form-control" id="labelPengarang"
						placeholder="Input Pengarang" />
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-12 col-md-6">
				<div class="form-group">
					<label class="text-white">.</label>
					<button type="submit" class="btn btn-primary btn-block">
						Tambah Usulan
					</button>
				</div>
			</div>
		</div>
	</form>
</div>