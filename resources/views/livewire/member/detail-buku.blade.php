@extends('layouts.utama')
@section('content')
<div class="about mb-5">
    <div class="container_width">
        <div class="row d_flex">
            <div class="col-md-7">
                <div class="titlepage text_align_left">
                    <h2 class="mb-5">Detail Buku</h2>
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th>Judul</td>
                            <td>{{$collection['judul']}}</td>
                        </tr>
                        <tr>
                            <th>ISBN</td>
                            <td>{{$collection['isbn']}}</td>
                        </tr>
                        <tr>
                            <th>Penerbit</td>
                            <td>{{$collection['penerbit']}}</td>
                        </tr>
                        <tr>
                            <th>Pengarang</td>
                            <td>{{$collection['pengarang']}}</td>
                        </tr>
                        <tr>
                            <th>Tahun Masuk</td>
                            <td>{{$collection['tahun']}}</td>
                        </tr>
                        <tr>
                            <th>Edisi</td>
                            <td>{{$collection['edisi']}}</td>
                        </tr>
                        <tr>
                            <th>Website</td>
                            <td>{{$collection['website']}}</td>
                        </tr>
                        <tr>
                            <th>Email</td>
                            <td>{{$collection['email']}}</td>
                        </tr>
                        <tr>
                            <th>Jumlah</td>
                            <td>{{$collection['jumlah']}}</td>
                        </tr>
                    </table>

print_r({{$collection}})
                    <a class="read_more" href="about.html">About More</a>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection