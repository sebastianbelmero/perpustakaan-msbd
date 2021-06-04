@extends('layouts.utama')
@section('content')
<!-- about -->
<div class="about">
    <div class="container_width">
        <div class="row d_flex">
            <div class="col-md-7">
                <div class="titlepage text_align_left">
                    <h2>Profil SMPN 5 Penyabungan</h2>
                    <p>NPSN : 10259549
                        <br>Status : Negeri
                        <br>Bentuk Pendidikan : SMP
                        <br>SK Pendirian Sekolah : 420/602/K/2003
                        <br>Tanggal SK Pendirian : 1995-12-31
                        <br>SK Izin Operasional : 420/602/K/2003
                        <br>Tanggal SK Izin Operasional : 2003-10-07
                    </p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="about_img text_align_center">
                    <figure><img src="{{asset('covido/images/about.jpeg')}}" alt="#" /></figure>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- end about -->
<!-- coronata -->
<!-- <div class="coronata">
    <div class="container">
        <div class="row d_flex grid">
            <div class="col-md-7">
                <div class="coronata_img text_align_center">
                    <figure><img src="{{asset('covido/images/corona.png')}}" alt="#" /></figure>
                </div>
            </div>
            <div class="col-md-5 oder1">
                <div class="titlepage text_align_left">
                    <h2>Coronavirus what it is?</h2>
                    <p>when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using
                    </p>
                    <a class="read_more" href="coronata.html">About More</a>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- end coronata -->

<!-- protect -->
<div class="protect">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage text_align_center">
                    <h2>Layanan Perpustakaan</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="protect_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--  Demos -->
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="protect_box text_align_center">
                                <div class="desktop">
                                    <i><img src="{{asset('covido/images/koleksi.jpg')}}" alt="#" /></i>
                                    <h3>Koleksi Buku</h3>
                                    <span>Lihat seluruh koleksi buku yang ada di Perpustakaan SMPN 5 Penyabungan</span>
                                </div>
                                <a class="read_more" href="{{ route ('koleksi-buku')}}">Detail</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="protect_box text_align_center">
                                <div class="desktop">
                                    <i><img src="{{asset('covido/images/usulan.jpg')}}" alt="#" /></i>
                                    <h3>Form Usulan</h3>
                                    <span>Usulkan buku yang Anda butuhkan dalam menunjang pembelajaran atau juga buku yang bersifat umum</span>
                                </div>
                                @guest
                                <a class="read_more" href="{{ route ('validasi-login')}}">Detail</a>
                                @else
                                <a class="read_more" href="{{ route ('form-usulan')}}">Detail</a>
                                @endguest

                            </div>
                        </div>
                        <div class="item">
                            <div class="protect_box text_align_center">
                                <div class="desktop">
                                    <i><img src="{{asset('covido/images/pinjam.jpg')}}" alt="#" /></i>
                                    <h3>Cek Peminjaman</h3>
                                    <span>Lakukan pengecekan peminjaman buku maupun denda dari buku yang telah dipinjam</span>
                                </div>
                                @guest
                                <a class="read_more" href="{{ route ('validasi-login')}}">Detail</a>
                                @else
                                <a class="read_more" href="#">Detail</a>
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- end protect -->
<!-- cases -->
<!-- <div class="cases">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage text_align_center ">
                    <h2>Coronavirus Cases</h2>
                    <p>making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful</p>
                </div>
            </div>
        </div>
        <div class="row d_flex">
            <div class=" col-md-4">
                <div class="latest text_align_center">
                    <figure><img src="{{asset('covido/images/cases1.png')}}" alt="#" /></figure>
                    <a class="read_more" href="cases.html">Read More</a>
                    <div class="nostrud">
                        <h3>Cases 01</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                    </div>
                </div>
            </div>
            <div class=" col-md-4">
                <div class="latest text_align_center">
                    <figure><img src="{{asset('covido/images/cases2.png')}}" alt="#" /></figure>
                    <a class="read_more" href="cases.html">Read More</a>
                    <div class="nostrud">
                        <h3>Cases 02</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                    </div>
                </div>
            </div>
            <div class=" col-md-4">
                <div class="latest text_align_center">
                    <figure><img src="{{asset('covido/images/cases3.png')}}" alt="#" /></figure>
                    <a class="read_more" href="cases.html">Read More</a>
                    <div class="nostrud">
                        <h3>Cases 03</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- end cases -->
<!-- doctors -->
<!-- <div class="doctors">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage text_align_center ">
                    <h2>What doctors say..</h2>
                </div>
            </div>
        </div>
        <div class="row d_flex">
            <div class=" col-md-6">
                <div id="ho_efcet" class="reader text_align_center">
                    <i><img src="{{asset('covido/images/doctor1.png')}}" alt="#" /></i>
                    <h3>Dr.Golap den</h3>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                    <span><img src="{{asset ('covido/images/do.png')}}" alt="#" /></span>
                </div>
            </div>
            <div class=" col-md-6">
                <div id="ho_efcet" class="reader text_align_center">
                    <i><img src="{{asset('covido/images/doctor2.png')}}" alt="#" /></i>
                    <h3>Dr.Golap den</h3>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                    <span><img src="images/do.png" alt="#" /></span>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- end cases -->
<!-- update -->
<!-- <div class="update">
    <div class="cevery_white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Get Every Update.... </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cevery_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form id="colof" class="form_subscri">
                        <input class="newsl" placeholder="Your Email" type="text" name="Email">
                        <button class="subsci_btn">Subscribe Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- update -->
@stop