<div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Menampilkan {{ $ada }} dari {{ $data }} </h3>
            <div class="card-tools">
                <div class="input-group input-group-sm">
                    <select wire:model="tampil" class="custom-select">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    <input wire:model="search" type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Nama Kategori</th>
                        <th style="width: 40px">Aksi</th>
                    </tr>
                </thead>
                @php($no = 1)
                <tbody>
                    @foreach ($kategories as $kategori)
                    <tr>
                        @if($updateId !== $kategori->id)
                        <td>{{ $kategori->nama }}</td>
                        <td class="d-flex">
                            <button wire:click="showFormKategori({{ $kategori -> id }})" class="btn btn-warning btn-sm text-white col-6"><i class="fas fa-edit"></i></button>
                            <button onclick="return confirm('Apakah anda yakin ingin menghapus kategori {{ $kategori->nama }} ???') || event.stopImmediatePropagation()" wire:click="hapusKategori({{ $kategori->id }})" class="btn btn-danger btn-sm text-white col-6 ml-2"><i class="fas fa-trash"></i></button>
                        </td>
                        @endif
                        @if($updateId === $kategori->id)
                        <td>
                                <form wire:submit.prevent="ubahKategori({{ $kategori -> id }})">
                                <input type="text" wire:model.defer="nama" class="form-control" id="labelNama" />
                            </td>
                            <td class="d-flex">
                                <button type="submit" class="btn btn-primary btn-sm text-white">
                                    Ubah
                                </button>
                            </form>
                            </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            {{ $kategories->links() }}
        </div>
    </div>
