@extends('layouts.utama')
@section('content')
    <div class="about mb-5">
    <div class="container_width">
        <div class="row d_flex">
            <div class="col-md-7">
                <div class="titlepage text_align_left">
                    <h2>Login</h2>
                    <p>
                        Masukkan Nomor Induk dan Password yang diberikan oleh Perpustakaan. 
                        <br>Jika Anda belum memiliki Password, silahkan hubungi Staf Perpustakaan.
                    </p>

                    <a class="read_more" href="{{route('login')}}">Login</a>
                </div>
            </div>
            <div class="col-md-5">
                <div class="about_img text_align_center">
                    <figure><img src="{{asset('covido/images/login.jpg')}}" alt="#" /></figure>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
