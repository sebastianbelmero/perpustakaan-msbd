<div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Menampilkan {{ $ada }} dari {{ $data }}</h3>
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
            <span><input type="checkbox" wire:model="a"> Judul</span>
            <span><input type="checkbox" wire:model="b"> ISBN</span>
            <span><input type="checkbox" wire:model="c"> Penerbit</span>
            <span><input type="checkbox" wire:model="d"> Pengarang</span>
            <span><input type="checkbox" wire:model="e"> Tahun</span>
            <span><input type="checkbox" wire:model="f"> Edisi</span>
            <span><input type="checkbox" wire:model="g"> Kategori</span>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th class="{{ $a ? '' : 'd-none' }}">Judul</th>
                        <th class="{{ $b ? '' : 'd-none' }}">ISBN</th>
                        <th class="{{ $c ? '' : 'd-none' }}">Penerbit</th>
                        <th class="{{ $d ? '' : 'd-none' }}">Pengarang</th>
                        <th class="{{ $e ? '' : 'd-none' }}">Tahun</th>
                        <th class="{{ $f ? '' : 'd-none' }}">Edisi</th>
                        <th class="{{ $g ? '' : 'd-none' }}">Kategori</th>
                        <th style="width: 40px">Aksi</th>
                    </tr>
                </thead>
                @php($no = 1)
                <tbody>
                    @foreach ($collection as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td class="{{ $a ? '' : 'd-none' }}">{{ Str::limit($item->judul, 50) }}</td>
                        <td class="{{ $b ? '' : 'd-none' }}">{{ $item->isbn }}</td>
                        <td class="{{ $c ? '' : 'd-none' }}">{{ $item->penerbit }}</td>
                        <td class="{{ $d ? '' : 'd-none' }}">{{ $item->pengarang }}</td>
                        <td class="{{ $e ? '' : 'd-none' }}">{{ $item->tahun }}</td>
                        <td class="{{ $f ? '' : 'd-none' }}">{{ $item->edisi }}</td>
                        <td class="{{ $g ? '' : 'd-none' }}">{{ $item->kategori }}</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm text-white" data-toggle="modal" data-target="#exampleModal" wire:model="pilih({{ $item->id }})"><i class="fas fa-search"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            {{ $collection->links() }}
        </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>