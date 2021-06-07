<section id="mu-book-overview">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-book-overview-area">
                    <div class="mu-heading-area">
                        <h2 class="mu-heading-title">LAYANAN PERPUSTAKAAN</h2>
                        <span class="mu-header-dot"></span>
                    </div>

                    <!-- Start Book Overview Content -->
                    <div class="mu-book-overview-content">
                        <div class="d-flex justify-content-center">
                            @foreach ($singleContent as $key => $item)
                            <div class="col-md-3 col-sm-6">
                                <div class="mu-book-overview-single">
                                    <img
                                        style="width: 10em"
                                        src="{{
                                            asset($item['img'])
                                        }}"
                                        alt="#"
                                    />
                                    <h4>{{ $key }}</h4>
                                    <p>
                                        {{ $item['p'] }}
                                    </p>
                                    <a
                                        class="btn btn-warning text-white"
                                        href="{{ route($item['route']) }}"
                                        >Detail</a
                                    >
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .d-flex{
            display:-ms-flexbox!important;
            display:flex!important;
        }
        .justify-content-center{
            -ms-flex-pack:center!important;
            justify-content:center!important;
        }
    </style>
</section>
