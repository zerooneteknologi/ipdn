@extends('layouts.app')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero">

    <div class="hero-text" data-aos="zoom-out">
        <h2>Selamat Datang di LSP</h2>
        <h3 class="text-white">Institut Pemerintahan Dalam Negeri</h3>
        <a href="#about" class="btn btn-get-started scrollto">Apa iu LSP?</a>
    </div>

</section><!-- End Hero Section -->

<!-- ======= About Section ======= -->
<section id="about">
    <div class="container pt-5" data-aos="fade-up">

        <div class="row">
            <div class="col-lg-6 about-img" data-aos="fade-right" dat-aos-delay="100">
                @if ($profile->article_image)
                <img src="{{ asset('storage/' . $profile->article_image)}}" alt="{{ $profile->article_title}}">
                @else
                <img src="/assets/img/logo/noimage.png" alt="No Image">
                @endif
            </div>

            <div class="col-lg-6 content" data-aos="fade-left" dat-aos-delay="100">
                <h2>{{ $profile->article_title }}</h2>

                {{ Str::after(Str::limit($profile->article_description, 600, '...'), '<div>') }}
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
                    Daftar Lengkap
                </a>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2">
            <!-- Item -->
            @foreach ($scemes as $sceme)
            <div class="col py-4 my-2 my-sm-3" data-aos="fade-up">
                <a href="{{ route('scemesingle', $sceme->sceme_slug) }}"
                    class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 me-xl-2">
                    <div class="card-body pt-3">
                        <div class="d-inline-block bg-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                            @if ($sceme->sceme_image)
                            <img src="{{ asset('storage/' . $sceme->sceme_image) }}" class="d-block m-1 img-fluid"
                                width="100" alt="{{ $sceme->sceme_name }}"
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
                                    <img src="{{ asset('storage/' . $assesor->assesor_image) }}"
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

        <div class="section-header">
            <h3 class="section-title">Pengumuman</h3>
            <span class="section-divider"></span>
            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                doloremque</p>
        </div>

        <div class="row">

            @foreach ($announcements as $announcement)

            <div class="col-lg-4 col-md-6">
                <div class="card border-primary mb-3">
                    @if ($announcement->article_image)
                    <img src="{{ asset('storage/'. $announcement->article_image)}}" class="card-img-top"
                        alt="{{ $announcement->article_title}}" style="max-height: 400px; min-height: 300px">
                    @else
                    <img src="/assets/img/logo/noimage.png" class="card-img-top" alt="no image"
                        style="max-height: 400px; min-height: 300px">
                    @endif
                    <div class="card-body text-primary">
                        <h5 class="card-title">{{ $announcement->article_title}}</h5>
                        {{ Str::after(Str::limit($announcement->article_description, 50, '...'), '<div>') }}
                            <br>
                            <a href="{{ route('articlesingle', $announcement->article_slug) }}"
                                class="btn btn-primary mb-3 mt-3">Selengkapnya</a>
                            <div class="card-footer">
                                <small class="text-muted">{{ date_format($announcement->created_at, 'd M Y') }}</small>
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
<section id="berita" class="section-bg" data-aos="fade-up">
    <div class="container mb-5 pt-5 pb-lg-5">
        <h2 class="h1 mb-4 pt-lg-2 pb-lg-3 py-1 text-center">Berita Terbaru</h2>

        <!-- Blog articles -->
        <div class="pb-3">
            <!-- Blog item -->
            <!-- Article -->
            @foreach ($articles as $article)
            <article class="card border-0 shadow-sm overflow-hidden mb-4" data-aos="fade-up">
                <div class="row g-0">
                    <div class="col-sm-4 position-relative bg-repeat-0 bg-size-cover">
                        @if ($article->article_image)
                        <img src="{{ asset('storage/' . $article->article_image) }}"
                            class="d-block mx-auto d-block m-1 img-fluid" width="100" alt="{{ $article->article_name }}"
                            style="max-height: 100px; min-height: 100px" />
                        @else
                        <img src="/assets/img/logo/noimage.png" class="d-block mx-auto m-1 img-fluid" width="100"
                            alt="no image" style="width: 50%" />
                        @endif
                        <a href="{{ route('articlesingle', $article->article_slug) }}"
                            class="position-absolute top-0 start-0 w-100 h-100" aria-label="Read more"></a>
                        <a href="#"
                            class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3"
                            data-bs-toggle="tooltip" data-bs-placement="left" title="Read later"
                            aria-label="Read later">
                            <i class="bx bx-bookmark"></i>
                        </a>
                    </div>
                    <div class="col-sm-8">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">
                                    {{ $article->category->category_name }}
                                </a>
                                <span class="fs-sm text-muted border-start ps-3 ms-3">
                                    {{ date_format($article->created_at, 'd M Y') }}
                                </span>
                            </div>
                            <h3 class="h4">
                                <a href="{{ route('articlesingle', $article->article_slug) }}">
                                    {{ $article->article_title }}
                                </a>
                            </h3>
                            <p>
                                {{ Str::after(Str::limit($article->article_description, 300, '...'), '
                            <div>') }}
                                </p>
                                <hr class="my-4" />

                            </div>
                        </div>
                    </div>
            </article>
            @endforeach
        </div>

        <!-- Load more btn -->
        <a href="{{ route('articles') }}" class="btn btn-lg btn-outline-primary w-100">
            <i class="bi bi-arrow-down"></i>
            Show more
        </a>
    </div>
</section>
<!-- End Post Section -->

<!-- ======= Clients Section ======= -->
<section id="clients">
    <div class="container" data-aos="fade-up">

        <div class="row">

            @foreach ($partners as $partner)
            @if ($partner->partner_image)
            <div class="col-md-3 d-flex justify-content-center align-items-center">
                <img src="{{ asset('storage/' . $partner->partner_image) }}" alt="">
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section>
@endsection