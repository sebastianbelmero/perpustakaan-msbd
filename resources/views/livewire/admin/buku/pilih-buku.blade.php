<div>
    <form wire:submit.prevent="cari">
        <div class="form-group text-center">
            <label for="cari" class="display-4">Masukkan Judul/ISBN</label>
            <h1 class="text-center {{ isset($isbn) ? '' : 'd-none' }}">{{$isbn}}</h1>
            <div class="mb-3">
                <a href="/member/form-usulan?isbn={{ $isbn }}" class="btn btn-primary {{ isset($isbn) ? '' : 'd-none' }}">lanjutkan <i class="fas fa-arrow-right"></i></a>
            </div>
            {{-- <h1 class="text-center d-none" wire:loading wire:loading.class="d-block" wire:loading.class.remove="d-none" wire:target="pilih()">Loading...</h1> --}}
            <input wire:model="judul" type="text" class="form-control" id="cari">
        </div>
        <div class="row justify-content-center">
            <div class="col-6 text-right">
                <div class="form-check">
                    <input wire:model="pilihan" class="form-check-input" name="sama" type="radio" value="judul" id="judul">
                    <label class="form-check-label" for="judul">
                        Judul
                    </label>
                </div>
            </div>
            <div class="col-6 text-left">
                <div class="form-check">
                    <input wire:model="pilihan" class="form-check-input" name="sama" type="radio" value="isbn" id="isbn" checked>
                    <label class="form-check-label" for="isbn">
                        ISBN
                    </label>
                </div>
            </div>
        </div>
    </form>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Judul</th>
                <th>ISBN</th>
                <th>Penerbit</th>
                <th>Pengarang</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            @if (isset($data))
                @foreach ($data as $book)
                <tr>
                    <td>{{ $book['Judul'] }}</td>
                    <td>{{ $book['ISBN'] }}</td>
                    <td>{{ $book['Penerbit'] }}</td>
                    <td>{{ $book['Pengarang'] }}</td>
                    <td><button wire:click="pilih('{{ $book['ISBN'] }}')" class="btn btn-primary btn-sm rounded-pill"><i class="fas fa-check"></i></button></td>
                </tr>
                @endforeach
            @else
            <tr>
                <td class="text-center" colspan="5">
                    <span class="d-block" wire:loading wire:loading.class="d-none" wire:loading.class.remove="d-block" wire:target="cari">Data Kosong...</span>
                    <span class="d-none" wire:loading.class="d-block" wire:loading wire:target="cari">Loading...</span>
                </td>
            </tr>
            @endif
        </tbody>
    </table>
</div>