<div>
    <h2>Daftar Saran dan Masukan</h1>
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
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Saran dan Masukan</th>
                    </tr>
                </thead>
                @php($no = 1)
                <tbody>
                    @foreach ($saran as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->pesan }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            {{ $saran->links() }}
        </div>
    </div>