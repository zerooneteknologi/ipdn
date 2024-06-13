@extends('layouts.app')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero">

    <div class="hero-text" data-aos="zoom-out">
        <h2>Selamat Datang di LSP</h2>
        <h3 class="text-white">Institut Pemerintahan Dalam Negeri</h3>
        <a href="#about" class="btn btn-get-started scrollto">Apa Itu LSP?</a>
    </div>

</section><!-- End Hero Section -->

<!-- ======= About Section ======= -->
<section id="about">
    <div class="container" data-aos="fade-up">

        <div class="row">
            <div class="col-lg-6 about-img" data-aos="fade-right" dat-aos-delay="100">
                @if ($profile->article_image)
                <img src="{{ asset('ipdn/storage/app/public/' . $profile->article_image) }}"
                    alt="{{ $profile->article_title }}">
                @else
                <img src="/assets/img/logo/noimage.png" alt="No Image">
                @endif
            </div>

            <div class="col-lg-6 content" data-aos="fade-left" dat-aos-delay="100">
                <h1 class="text-primary">Apa Itu LSP?</h1>
                <h4>{{ $profile->article_title }}</h4>

                {{ Str::after(Str::limit($profile->article_description, 100, '...'), '<div>') }}
                    <br>
                    <a href="{{ route('articlesingle', $profile->article_slug) }}"
                        class="btn btn-danger justify-center mt-3">Selengkapnya</a>
                </div>
            </div>

        </div>
</section><!-- End About Section -->

<!-- ======= Featuress Section ======= -->
<section id="schema" class=" pb-md-2 pb-lg-5 section-bg" data-aos="fade-up">
    <div class="d-none d-lg-block" style="margin-top: -60px; padding-top: 60px;"></div>
    <div class="container pb-4 pt-5">
        <h2 class="h1 text-center text-md-start mb-lg-4 pt-1 pt-md-4">
            Skema Sertifikasi
        </h2>
        <div class="row align-items-center pb-5 mb-lg-2">
            <div class="col-md-8 text-center text-md-start">
                <p class="fs-lg text-muted mb-md-0">
                    Skema sertifikasi juga dapat diartikan sebagai paket kompetensi dan persyaratan spesifik yang
                    berkaitan dengan kategori
                    jabatan atau keterampilan dari seseorang. Skema disusun sesuai dengan kebutuhan dari penggunanya.
                </p>
            </div>
            <div class="col-md-4 d-flex justify-content-center justify-content-md-end">
                <a href="{{ route('scemes') }}" class="btn btn-outline-primary btn-lg">
                    Lihat semua
                </a>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2">
            <!-- Item -->
            @foreach ($scemes as $sceme)
            <div class="col-md-4 col py-4 my-2 my-sm-3" data-aos="fade-up">
                <a href="{{ route('scemesingle', $sceme->sceme_slug) }}"
                    class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 me-xl-2">
                    <div class="card-body pt-3">
                        <div class="d-inline-block bg-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                            @if ($sceme->sceme_image)
                            <img src="{{ asset('ipdn/storage/app/public/' . $sceme->sceme_image) }}"
                                class="d-block m-1 img-fluid" width="100" alt="{{ $sceme->sceme_name }}"
                                style="max-height: 100px; min-height: 100px" />
                            @else
                            <img src="/assets/img/logo/noimage.png" class="d-block m-1 img-fluid" width="100"
                                alt="no image" style="max-height: 100px; min-height: 100px" />
                            @endif
                        </div>
                        <h2 class="h4 mt-3 align-items-center">
                            {{ $sceme->sceme_name }}
                            <i class="bi bi-arrow-right-circle text-primary fs-3 ms-2"></i>
                        </h2>
                        {{ Str::after(Str::limit($sceme->sceme_detail, 100, '...'), '<div>') }}
                        </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Featuress Section -->

<!-- ======= Team Section ======= -->
<section id="team">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-xl-3">
                <div class="d-xl-block d-flex align-items-center justify-content-between mb-xl-0 mb-4 pb-xl-0 pb-3">
                    <h3 class="h1 mb-xl-4 mb-0 pb-xl-3">Tim Aseesor</h3>
                    <a href="{{ route('assesors') }}" class="btn btn-primary ms-xl-0 ms-4">Lihat semua</a>
                </div>
            </div>
            <div class="col-xl-9">
                <div class="row">
                    @foreach ($assesors as $assesor)
                    <div class="col-lg-3 col-md-6">
                        <a href="{{ route('assesorsingle', $assesor->assesor_slug) }}">
                            <div class="member">
                                <div class="pic bg-black">
                                    @if ($assesor->assesor_image)
                                    <img src="{{ asset('ipdn/storage/app/public/' . $assesor->assesor_image) }}"
                                        alt="{{ $assesor->assesor_name }}">
                                    @else
                                    <img src="/assets/img/logo/noimage.png" alt="no image">
                                    @endif
                                </div>
                                <h4>{{ $assesor->assesor_name }}</h4>
                                <span>{{ $assesor->assesor_specialize }}</span>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Team Section -->

<!-- ======= Pricing Section ======= -->
<section id="pengumuman" class="section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header mt-lg-5">
            <h3 class="h1 mb-xl-4 mb-0 pb-xl-3">Pengumuman</h3>
            <div class="row align-items-center pb-5 mb-lg-2">
                <div class="col-md-9 text-center text-md-start">
                    <p class="fs-lg text-muted mb-md-0">
                        Pengumuman terbaru seputar LSP IPDN dan lainya
                    </p>
                </div>
                <div class="col-md-3 d-flex justify-content-center justify-content-md-end">
                    <a href="{{ route('articles') }}?type=4" class="btn btn-outline-primary text-primary">
                        Lihat semua
                    </a>
                </div>
            </div>
        </div>

        <div class="row">

            @foreach ($announcements as $announcement)
            <div class="col-lg-4 col-md-6">
                <div class="card border-primary mb-3">
                    @if ($announcement->article_image)
                    <img src="{{ asset('ipdn/storage/app/public/' . $announcement->article_image) }}"
                        class="card-img-top" alt="{{ $announcement->article_title }}"
                        style="max-height: 400px; min-height: 300px">
                    @else
                    <img src="/assets/img/logo/noimage.png" class="card-img-top" alt="no image"
                        style="max-height: 400px; min-height: 300px">
                    @endif
                    <div class="card-body text-primary">
                        <h5 class="card-title">{{ $announcement->article_title }}</h5>
                        {{ Str::after(Str::limit($announcement->article_description, 50, '...'), '<div>') }}
                            <br>
                            <a href="{{ route('articlesingle', $announcement->article_slug) }}?type=4"
                                class="btn btn-primary mb-3 mt-3">Selengkapnya</a>
                            <div class="card-footer">
                                <small class="text-muted">{{ $announcement->created_at->diffForHumans() }}</small>
                            </div>
                        </div>
                        {{-- <div class="card border-primary">
                            <h3>{{ $announcement->article_title}}</h3>
                            {{ Str::after(Str::limit($announcement->article_description, 300, '...'), '
                            <div>') }}
                                <a href="#" class="get-started-btn">Get Started</a>
                            </div>
                        </div> --}}
                    </div>
                </div>
                @endforeach

</section><!-- End Pricing Section -->

<!-- Post Section -->
<!-- ======= Call To Action Section ======= -->
<section id="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 cta-btn-container text-center">
                <div
                    class="d-xl-block d-flex align-items-center text-white justify-content-between mb-xl-0 mb-4 pb-xl-0 pb-3">
                    <h3 class="h1 mb-xl-4 mb-0 pb-xl-3">Kabar Terbaru</h3>
                    <p class="">ikuti terus informasi terbaru seputar berita dan kegiatan LSP IPDN</p>
                    <button class="btn btn-outline-light owl-prev"><i
                            class="bi bi-chevron-left fs-4 text-dark"></i></button>
                    <a href="{{ route('articles') }}?type=3" class="cta-btn align-middle">Lihat semua</a>
                    <button class="btn btn-outline-light owl-next"><i
                            class="bi bi-chevron-right fs-4 text-dark"></i></button>
                </div>
                <div class="custom-controls">
                    <div class="owl-dots"></div>
                </div>
            </div>
            <div class="col-sm-9 text-center text-lg-start row">
                <div class="owl-carousel owl-theme">
                    @foreach ($articles as $article)
                    <div class="item">
                        <div class="packages-item">
                            <div class="packages-img">
                                @if ($article->article_image)
                                <img src="{{ asset('ipdn/storage/app/public/' . $article->article_image) }}"
                                    class="img-fluid w-100 rounded-top" alt="{{ $article->article_title }}">
                                @else
                                <img src="/assets/img/logo/noimage.png" class="img-fluid w-100 rounded-top"
                                    alt="no image">
                                @endif
                            </div>
                            <div class="packages-content bg-light">
                                <div class="p-4 pb-0">
                                    <h5 class="mb-0">{{ $article->article_title }}</h5>
                                    {{-- <span class="text-uppercase badge text-bg-warning">{{
                                        $article->created_at->diffForHumans }}</span> --}}
                                    <span class="text-uppercase badge text-bg-warning">{{
                                        $article->created_at->diffForHumans() }}</span>
                                    <div class="mb-3">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                    <p class="mb-4">
                                        {{ Str::after(Str::limit($article->article_description, 50, '...'), '
                                    <div>') }}
                                        </p>
                                    </div>
                                    <div class="row bg-primary rounded-bottom mx-0">
                                        <div class="col-6 text-start px-0 mx-auto">
                                            <a href="{{ route('articlesingle', $article->article_slug) }}?type=3"
                                                class="btn-hover btn text-white py-2 px-4">Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- Repeat the .item div for more slides -->
                    </div>
                </div>

            </div>

        </div>
</section><!-- End Call To Action Section -->
<!-- End Post Section -->

<!-- ======= Clients Section ======= -->
<section id="clients">
    <div class="container" data-aos="fade-up">
        <h3 class="mb-4 pt-lg-2 pb-lg-3 py-1 text-center">Partner Kerjasama Kami</h3>
        <div class="d-flex flex-wrap justify-content-center align-items-center">
            @foreach ($partners as $partner)
            @if ($partner->partner_image)
            <img src="{{ asset('ipdn/storage/app/public/' . $partner->partner_image) }}"
                alt="{{ $partner->partner_name }}" class="img-fluid" style="height: 100px; object-fit: contain;">
            @endif
            @endforeach
        </div>
    </div>
</section>
@endsection

@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">

<style>
    .packages-item {
        margin: 15px;
    }

    .custom-controls {
        text-align: center;
        margin-top: 20px;
    }

    .owl-dots {
        display: inline-block;
        margin-top: 10px;
    }

    .owl-dot {
        display: inline-block;
        margin: 0 5px;
    }

    .owl-dot span {
        width: 10px;
        height: 10px;
        background: #000;
        display: block;
        border-radius: 50%;
    }

    .owl-dot.active span {
        background: #007bff;
    }
</style>
@endpush

@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
            var owl = $(".owl-carousel");
            owl.owlCarousel({
                items: 3,
                loop: true,
                margin: 20,
                // margin-right:10,
                nav: false,
                dots: true
            });
            $('.owl-prev').click(function() {
                owl.trigger('owl.prev');
            });
            $('.owl-next').click(function() {
                owl.trigger('owl.next');
            });

            // Move the dots to custom control area
            owl.on('initialized.owl.carousel', function(event) {
                var dots = $('.owl-dots').detach();
                $('.custom-controls').append(dots);
            });
        });
</script>
@endpush