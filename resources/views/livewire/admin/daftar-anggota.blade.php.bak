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
                        <th style="width: 10px">No.</th>
                        <th>Nomor Induk</th>
                        <th>Nama Anggota</th>
                        <th>Kelas</th>
                        <th style="width: 40px">Aksi</th>
                    </tr>
                </thead>
                @php($no = 1)
                <tbody>
                    @foreach ($members as $member)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $member->nomor_induk }}</td>
                        <td>{{ $member->nama }}</td>
                        <td>{{ $member->kelas }}</td>
                        <td class="d-flex">
                            <button onclick="return confirm('Apakah anda yakin ingin menghapus anggota {{ $member->nama }} ???') || event.stopImmediatePropagation()" wire:click="hapusAnggota({{ $member->id }})" class="btn btn-danger btn-sm text-white ml-2">Hapus</button>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            {{ $members->links() }}
        </div>
    </div>
