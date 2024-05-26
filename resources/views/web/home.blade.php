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
                <img src="/assets/img/about-img.jpg" alt="">
            </div>

            <div class="col-lg-6 content" data-aos="fade-left" dat-aos-delay="100">
                <h2>Profil LPM</h2>

                <p class="justify-content-between">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio laboriosam sed nihil harum nobis
                    incidunt voluptatem culpa molestias minima laudantium inventore, nam molestiae explicabo placeat
                    quos iste consequuntur dolorum sequi cum pariatur. Laboriosam, cum recusandae nesciunt ut facere ea
                    placeat unde suscipit quibusdam illo consequuntur totam a rerum sequi veritatis nisi maiores beatae
                    dolor! Incidunt unde, sint, velit veritatis consequatur quisquam minima minus ratione possimus
                    quidem neque reprehenderit quos rerum saepe ipsum officiis illo provident iure harum ducimus
                    distinctio. Fugiat quisquam cupiditate laborum est neque ex officia esse odio mollitia, saepe
                    aliquam sed adipisci quia quam natus unde eveniet sapiente?
                </p>

                <a href="#" class="btn btn-danger justify-center">Selengkapnya</a>
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
<section id="pricing" class="section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h3 class="section-title">Pengumuman</h3>
            <span class="section-divider"></span>
            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                doloremque</p>
        </div>

        <div class="row">

            <div class="col-lg-4 col-md-6">
                <div class="box">
                    <h3>Free</h3>
                    <h4><sup>$</sup>0<span> month</span></h4>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> Quam adipiscing vitae proin</li>
                        <li><i class="bi bi-check-circle"></i> Nec feugiat nisl pretium</li>
                        <li><i class="bi bi-check-circle"></i> Nulla at volutpat diam uteera</li>
                        <li><i class="bi bi-check-circle"></i> Pharetra massa massa ultricies</li>
                        <li><i class="bi bi-check-circle"></i> Massa ultricies mi quis hendrerit</li>
                    </ul>
                    <a href="#" class="get-started-btn">Get Started</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="box featured">
                    <h3>Business</h3>
                    <h4><sup>$</sup>29<span> month</span></h4>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> Quam adipiscing vitae proin</li>
                        <li><i class="bi bi-check-circle"></i> Nec feugiat nisl pretium</li>
                        <li><i class="bi bi-check-circle"></i> Nulla at volutpat diam uteera</li>
                        <li><i class="bi bi-check-circle"></i> Pharetra massa massa ultricies</li>
                        <li><i class="bi bi-check-circle"></i> Massa ultricies mi quis hendrerit</li>
                    </ul>
                    <a href="#" class="get-started-btn">Get Started</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="box">
                    <h3>Developer</h3>
                    <h4><sup>$</sup>49<span> month</span></h4>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> Quam adipiscing vitae proin</li>
                        <li><i class="bi bi-check-circle"></i> Nec feugiat nisl pretium</li>
                        <li><i class="bi bi-check-circle"></i> Nulla at volutpat diam uteera</li>
                        <li><i class="bi bi-check-circle"></i> Pharetra massa massa ultricies</li>
                        <li><i class="bi bi-check-circle"></i> Massa ultricies mi quis hendrerit</li>
                    </ul>
                    <a href="#" class="get-started-btn">Get Started</a>
                </div>
            </div>

        </div>
    </div>
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
                        <img src="{{ asset('storage/' . $article->article_image) }}" class="d-block m-1 img-fluid"
                            width="100" alt="{{ $article->article_name }}"
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