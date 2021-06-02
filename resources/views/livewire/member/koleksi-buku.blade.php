    <div class="about mb-5">
        <div class="container_width">
            <div class="row d_flex">
                <div class="col-md-12">
                    <div class="titlepage text_align_left">
                        <h2>Koleksi Buku</h2>

                            <h3 class="card-title mt-5">Menampilkan {{ $ada }} dari {{ $data }}</h3>
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
                                        <th style="width: 10px">No.</th>
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
                                            <a href="{{ route('detail-buku', $item->id) }}" class="btn btn-primary btn-sm text-white ml-1">Detail</a>
                                            <a href="#" class="btn btn-primary btn-sm text-white ml-1">Pinjam</a>
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        <div class="card-footer clearfix">
                            {{ $collection->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
