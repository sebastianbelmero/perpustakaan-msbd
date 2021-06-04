<div class="about mb-5">
	<div class="container_width">
		<div class="row d_flex">
			<div class="col-md-12">
				<div class="titlepage text_align_left">
					<h2>Form Usulan</h2>
					<p>Silahkan usulkan buku yang Anda butuhkan dengan mengisi formulir yang telah kami sediakan. 
						Jenis buku yang diusulkan berkaitan dengan kebutuhan buku dalam menunjang pembelajaran 
						atau juga buku yang bersifat umum. Terima kasih
					</p>
					<div class="container">
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
										<input type="text" wire:model.defer="penerbit" class="form-control" id="labelPenerbit" placeholder="Input Penerbit" />
									</div>
								</div>
							</div>
							<div class="row justify-content-center">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="labelPengarang">Pengarang</label>
										<input type="text" wire:model.defer="pengarang" class="form-control" id="labelPengarang" placeholder="Input Pengarang" />
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
				</div>
			</div>

		</div>
	</div>
</div>
