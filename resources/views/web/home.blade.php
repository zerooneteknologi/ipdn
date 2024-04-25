@extends('layouts.app')

@section('content')
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
                <a href="{{ route('scemes')}}" class="btn btn-outline-primary btn-lg">
                    Daftar Lengkap
                </a>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2">
            <!-- Item -->
            @foreach ($scemes as $sceme)
            <div class="col py-4 my-2 my-sm-3" data-aos="fade-up">
                <a href="{{ route('scemesingle', $sceme->sceme_slug)}}"
                    class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 me-xl-2">
                    <div class="card-body pt-3">
                        <div class="d-inline-block bg-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                            <img src="{{ asset('storage/'. $sceme->sceme_image) }}" class="d-block m-1 img-fluid"
                                width="100" alt="{{ $sceme->sceme_name}}"
                                style="max-height: 100px; min-height: 100px" />
                        </div>
                        <h2 class="h4 mt-3 align-items-center">
                            {{ $sceme->sceme_name}}
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

<!-- ======= Pricing Section ======= -->
<section id="pricing" class="section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h3 class="section-title">Pricing</h3>
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

<!-- ======= Team Section ======= -->
<section id="team" class="section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h3 class="section-title">Our Team</h3>
            <span class="section-divider"></span>
            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                doloremque</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="member">
                    <div class="pic"><img src="assets/img/team/team-1.jpg" alt=""></div>
                    <h4>Walter White</h4>
                    <span>Chief Executive Officer</span>
                    <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="member">
                    <div class="pic"><img src="assets/img/team/team-2.jpg" alt=""></div>
                    <h4>Sarah Jhinson</h4>
                    <span>Product Manager</span>
                    <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="member">
                    <div class="pic"><img src="assets/img/team/team-3.jpg" alt=""></div>
                    <h4>William Anderson</h4>
                    <span>CTO</span>
                    <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="member">
                    <div class="pic"><img src="assets/img/team/team-4.jpg" alt=""></div>
                    <h4>Amanda Jepson</h4>
                    <span>Accountant</span>
                    <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section><!-- End Team Section -->

<!-- Post Section -->
<section id="berita" class="section-bg" data-aos="fade-up">
    <div class="container mb-5 pt-5 pb-lg-5">
        <h2 class="h1 mb-4 pt-lg-2 pb-lg-3 py-1 text-center">Berita Terbaru</h2>

        <!-- Blog articles -->
        <div class="pb-3">
            <!-- Blog item -->
            <article class="card border-0 shadow-sm overflow-hidden mb-4" data-aos="fade-up">
                <div class="row g-0">
                    <div class="col-sm-4 position-relative bg-repeat-0 bg-size-cover" style="
                background-image: url(/assets/img/gallery/gallery-1.jpg);
                min-height: 15rem;">
                        <a href="blog-single.html" class="position-absolute top-0 start-0 w-100 h-100"
                            aria-label="Read more"></a>
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
                                    Startups
                                </a>
                                <span class="fs-sm text-muted border-start ps-3 ms-3">
                                    Sep 3, 2023
                                </span>
                            </div>
                            <h3 class="h4">
                                <a href="blog-single.html">
                                    5 Bad Landing Page Examples &amp; How We Would Fix Them
                                </a>
                            </h3>
                            <p>
                                Tellus sagittis dolor pellentesque vel porttitor magna
                                aliquet arcu. Interdum risus mauris pulvinar et vel. Morbi
                                tellus, scelerisque vel metus. Scelerisque arcu egestas ac
                                commodo, ac nibh. Pretium ac elit sed nulla nec.
                            </p>
                            <hr class="my-4" />
                        </div>
                    </div>
                </div>
            </article>

            <!-- Article -->
            <article class="card border-0 shadow-sm overflow-hidden mb-4" data-aos="fade-up">
                <div class="row g-0">
                    <div class="col-sm-4 position-relative bg-repeat-0 bg-size-cover" style="
                background-image: url(/assets/img/gallery/gallery-2.jpg);
                min-height: 15rem;">
                        <a href="blog-single.html" class="position-absolute top-0 start-0 w-100 h-100"
                            aria-label="Read more"></a>
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
                                    Startups
                                </a>
                                <span class="fs-sm text-muted border-start ps-3 ms-3">
                                    Sep 10, 2023
                                </span>
                            </div>
                            <h3 class="h4">
                                <a href="blog-single.html">
                                    How Agile is Your Forecasting Process?
                                </a>
                            </h3>
                            <p>
                                Nulla fringilla arcu justo augue fringilla in nunc volutpat
                                sit. Dui diam, faucibus vitae ultricies vitae mollis nunc
                                elementum. Et, habitasse porta neque tempor tellus ut.
                                Sagittis odio porttitor erat viverra erat neque.
                            </p>
                            <hr class="my-4" />

                        </div>
                    </div>
                </div>
            </article>

            <!-- Article -->
            <article class="card border-0 shadow-sm overflow-hidden mb-4" data-aos="fade-up">
                <div class="row g-0">
                    <div class="col-sm-4 position-relative bg-repeat-0 bg-size-cover" style="
                background-image: url(/assets/img/gallery/gallery-3.jpg);
                min-height: 15rem;">
                        <a href="blog-single.html" class="position-absolute top-0 start-0 w-100 h-100"
                            aria-label="Read more"></a>
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
                                    Digital
                                </a>
                                <span class="fs-sm text-muted border-start ps-3 ms-3">
                                    Oct 9, 2023
                                </span>
                            </div>
                            <h3 class="h4">
                                <a href="blog-single.html">
                                    Inclusive Marketing: Why and How Does it Work?
                                </a>
                            </h3>
                            <p>
                                Nunc aliquet scelerisque pellentesque imperdiet tortor elit,
                                dictum. Tristique odio at dignissim viverra aliquet eleifend
                                erat. Tellus, at arcu, egestas praesent. Varius aliquet
                                pharetra adipiscing tincidunt orci nec neque.
                            </p>
                            <hr class="my-4" />

                        </div>
                    </div>
                </div>
            </article>

            <!-- Article -->
            <article class="card border-0 shadow-sm overflow-hidden mb-4" data-aos="fade-up">
                <div class="row g-0">
                    <div class="col-sm-4 position-relative bg-repeat-0 bg-size-cover" style="
                background-image: url(/assets/img/gallery/gallery-4.jpg);
                min-height: 15rem;">
                        <a href="blog-single.html" class="position-absolute top-0 start-0 w-100 h-100"
                            aria-label="Read more"></a>
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
                                    Strategy
                                </a>
                                <span class="fs-sm text-muted border-start ps-3 ms-3">
                                    Sep 3, 2023
                                </span>
                            </div>
                            <h3 class="h4">
                                <a href="blog-single.html">
                                    This Long-Awaited Technology May Finally Change the World
                                </a>
                            </h3>
                            <p>
                                Sapien, nulla placerat in at. Vitae tincidunt quam ornare
                                massa porttitor. Neque a vitae feugiat in sit habitant
                                integer. Cursus et at pulvinar sed neque vitae. Aliquam
                                vitae hac phasellus purus lectus facilisi. Vitae vel ac
                                quam.
                            </p>
                            <hr class="my-4" />

                        </div>
                    </div>
                </div>
            </article>
        </div>

        <!-- Load more btn -->
        <a href="#" class="btn btn-lg btn-outline-primary w-100">
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

            <div class="col-md-2">
                <img src="/assets/img/clients/client-1.png" alt="">
            </div>

            <div class="col-md-2">
                <img src="/assets/img/clients/client-2.png" alt="">
            </div>

            <div class="col-md-2">
                <img src="/assets/img/clients/client-3.png" alt="">
            </div>

            <div class="col-md-2">
                <img src="/assets/img/clients/client-4.png" alt="">
            </div>

            <div class="col-md-2">
                <img src="/assets/img/clients/client-5.png" alt="">
            </div>

            <div class="col-md-2">
                <img src="/assets/img/clients/client-6.png" alt="">
            </div>

        </div>
    </div>
</section>
<!-- End Clients Section -->

<!-- ======= Advanced Featuress Section ======= -->
{{-- <section id="advanced-features">

    <div class="features-row section-bg" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img class="advanced-feature-img-right wow fadeInRight" src="/assets/img/advanced-feature-1.jpg"
                        alt="">
                    <div>
                        <h2>Duis aute irure dolor in reprehenderit in voluptate velit esse</h2>
                        <h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                            qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="features-row" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img class="advanced-feature-img-left" src="/assets/img/advanced-feature-2.jpg" alt="">
                    <div>
                        <h2>Duis aute irure dolor in reprehenderit in voluptate velit esse</h2>
                        <i class="bi bi-calendar4-week"></i>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        <i class="bi bi-bar-chart"></i>
                        <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                        <i class="bi bi-brightness-high"></i>
                        <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="features-row section-bg" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img class="advanced-feature-img-right wow fadeInRight" src="/assets/img/advanced-feature-3.jpg"
                        alt="">
                    <div>
                        <h2>Duis aute irure dolor in reprehenderit in voluptate velit esse</h2>
                        <h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        <i class="bi bi-binoculars"></i>
                        <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                            qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- End Advanced Featuress Section -->

<!-- ======= Call To Action Section ======= -->
{{-- <section id="call-to-action">
    <div class="container">
        >>>>>>> 02d28ddc1cd8171ced10b07b80dcac59ae793778
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
                    We are focused on helping brands grow through digital
                    transformation services. We bring real solutions to each
                    client’s problems through a deep understanding of their market,
                    solution, and vision.
                </p>
            </div>
            <div class="col-md-4 d-flex justify-content-center justify-content-md-end">
                <a href="services-v1.html" class="btn btn-outline-primary btn-lg">
                    See all services
                </a>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2">
            <!-- Item -->
            <div class="col py-4 my-2 my-sm-3" data-aos="fade-up">
                <a href="services-single-v1.html"
                    class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 me-xl-2">
                    <div class="card-body pt-3">
                        <div class="d-inline-block bg-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                            <img src="/assets/img/gallery/gallery-1.jpg" class="d-block m-1" width="100" alt="Icon" />
                        </div>
                        <h2 class="h4 d-inline-flex align-items-center">
                            Custom Software Development
                            <i class="bx bx-right-arrow-circle text-primary fs-3 ms-2"></i>
                        </h2>
                        <p class="fs-sm text-body mb-0">
                            Nisi, dis sed cursus eget pellentesque mattis. Odio eu proin
                            aliquam a. Semper bibendum tellus non tellus, facilisi
                            dignissim in quam massa. Aliquam, feugiat ut cum tellus,
                            sit. Quis consectetur gravida ac ac lectus cursus egestas.
                        </p>
                    </div>
                </a>
            </div>

            <!-- Item -->
            <div class="col py-4 my-2 my-sm-3" data-aos="fade-up">
                <a href="services-single-v1.html"
                    class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
                    <div class="card-body pt-3">
                        <div
                            class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                            <img src="/assets/img/gallery/gallery-2.jpg" class="d-block m-1" width="100" alt="Icon" />
                        </div>
                        <h2 class="h4 d-inline-flex align-items-center">
                            Software Integration
                            <i class="bx bx-right-arrow-circle text-primary fs-3 ms-2"></i>
                        </h2>
                        <p class="fs-sm text-body mb-0">
                            Id eget blandit sapien cras massa lectus lorem placerat.
                            Quam dolor commodo fermentum bibendum dictumst. Risus
                            pretium eget at viverra eget. Sit neque adipiscing malesuada
                            blandit justo, quam.
                        </p>
                    </div>
                </a>
            </div>

            <!-- Item -->
            <div class="col py-4 my-2 my-sm-3" data-aos="fade-up">
                <a href="services-single-v1.html"
                    class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
                    <div class="card-body pt-3">
                        <div
                            class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                            <img src="/assets/img/gallery/gallery-3.jpg" class="d-block m-1" width="100" alt="Icon" />
                        </div>
                        <h2 class="h4 d-inline-flex align-items-center">
                            Mobile App Development
                            <i class="bx bx-right-arrow-circle text-primary fs-3 ms-2"></i>
                        </h2>
                        <p class="fs-sm text-body mb-0">
                            Nunc, justo, diam orci, dictum purus convallis risus.
                            Suscipit hendrerit at egestas id id blandit interdum est.
                            Integer fames placerat turpis pretium quis hac leo lacus.
                            Orci, dictum nunc mus quis semper eu bibendum enim, morbi.
                        </p>
                    </div>
                </a>
            </div>

            <!-- Item -->
            <div class="col py-4 my-2 my-sm-3" data-aos="fade-up">
                <a href="services-single-v1.html"
                    class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
                    <div class="card-body pt-3">
                        <div
                            class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                            <img src="/assets/img/gallery/gallery-4.jpg" class="d-block m-1" width="100" alt="Icon" />
                        </div>
                        <h2 class="h4 d-inline-flex align-items-center">
                            Business Analytics
                            <i class="bx bx-right-arrow-circle text-primary fs-3 ms-2"></i>
                        </h2>
                        <p class="fs-sm text-body mb-0">
                            Gravida eget euismod tempus diam dignissim quam. Dignissim
                            magnis blandit faucibus convallis augue nisl, etiam. Feugiat
                            ut molestie non arcu senectus sed. Diam pellentesque sit
                            mattis nec amet varius nunc a sed.
                        </p>
                    </div>
                </a>
            </div>

            <!-- Item -->
            <div class="col py-4 my-2 my-sm-3" data-aos="fade-up">
                <a href="services-single-v1.html"
                    class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
                    <div class="card-body pt-3">
                        <div
                            class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                            <img src="/assets/img/gallery/gallery-5.jpg" class="d-block m-1" width="100" alt="Icon" />
                        </div>
                        <h2 class="h4 d-inline-flex align-items-center">
                            Software Testing
                            <i class="bx bx-right-arrow-circle text-primary fs-3 ms-2"></i>
                        </h2>
                        <p class="fs-sm text-body mb-0">
                            Quis rhoncus quam venenatis facilisi. Risus dis libero nisl
                            condimentum quis. Tincidunt ultricies vulputate ornare nunc
                            rhoncus in. Ultrices dolor eu natoque volutpat praesent
                            curabitur ultricies.
                        </p>
                    </div>
                </a>
            </div>

            <!-- Item -->
            <div class="col py-4 my-2 my-sm-3" data-aos="fade-up">
                <a href="services-single-v1.html"
                    class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
                    <div class="card-body pt-3">
                        <div
                            class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                            <img src="/assets/img/gallery/gallery-6.jpg" class="d-block m-1" width="100" alt="Icon" />
                        </div>
                        <h2 class="h4 d-inline-flex align-items-center">
                            Project Management
                            <i class="bx bx-right-arrow-circle text-primary fs-3 ms-2"></i>
                        </h2>
                        <p class="fs-sm text-body mb-0">
                            Massa dis morbi sagittis, tellus sit gravida. Id ut non ut
                            in faucibus eu, ac. Tempus feugiat enim id pellentesque a
                            sagittis vitae, convallis. Nunc, arcu enim orci ullamcorper
                            aenean. Scelerisque eget a nibh bibendum commodo.
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- End Featuress Section -->

<!-- ======= Team Section ======= -->
<section id="asesor" class="section-bg pb-5">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h3 class="section-title">Our Team</h3>
            <span class="section-divider"></span>
            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                accusantium doloremque</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="member">
                    <div class="pic"><img src="/assets/img/team/team-1.jpg" alt=""></div>
                    <h4>Walter White</h4>
                    <span>Chief Executive Officer</span>
                    <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="member">
                    <div class="pic"><img src="/assets/img/team/team-2.jpg" alt=""></div>
                    <h4>Sarah Jhinson</h4>
                    <span>Product Manager</span>
                    <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="member">
                    <div class="pic"><img src="/assets/img/team/team-3.jpg" alt=""></div>
                    <h4>William Anderson</h4>
                    <span>CTO</span>
                    <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="member">
                    <div class="pic"><img src="/assets/img/team/team-4.jpg" alt=""></div>
                    <h4>Amanda Jepson</h4>
                    <span>Accountant</span>
                    <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <<<<<<< HEAD </div>
</section>
<!-- End Team Section -->
=======
<!-- ======= Team Section ======= -->
<section id="asesor" class="section-bg pb-5">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h3 class="section-title">Asesor</h3>
            <span class="section-divider"></span>
            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                accusantium doloremque</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="member">
                    <div class="pic"><img src="/assets/img/team/team-1.jpg" alt=""></div>
                    <h4>Walter White</h4>
                    <span>Chief Executive Officer</span>
                    <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======= Advanced Featuress Section ======= -->
{{-- <section id="advanced-features">

    <div class="features-row section-bg" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img class="advanced-feature-img-right wow fadeInRight" src="/assets/img/advanced-feature-1.jpg"
                        alt="">
                    <div>
                        <h2>Duis aute irure dolor in reprehenderit in voluptate velit esse</h2>
                        <h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                            deserunt
                            mollit anim id est laborum.</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa
                            qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="features-row" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img class="advanced-feature-img-left" src="/assets/img/advanced-feature-2.jpg" alt="">
                    <div>
                        <h2>Duis aute irure dolor in reprehenderit in voluptate velit esse</h2>
                        <i class="bi bi-calendar4-week"></i>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        <i class="bi bi-bar-chart"></i>
                        <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                        <i class="bi bi-brightness-high"></i>
                        <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="features-row section-bg" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img class="advanced-feature-img-right wow fadeInRight" src="/assets/img/advanced-feature-3.jpg"
                        alt="">
                    <div>
                        <h2>Duis aute irure dolor in reprehenderit in voluptate velit esse</h2>
                        <h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                            deserunt
                            mollit anim id est laborum.</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        <i class="bi bi-binoculars"></i>
                        <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa
                            qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- End Advanced Featuress Section -->

<!-- ======= Call To Action Section ======= -->
{{-- <section id="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 text-center text-lg-start">
                <h3 class="cta-title">Call To Action</h3>
                <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
                <a class="cta-btn align-middle" href="#">Call To Action</a>
            </div>
        </div>

    </div>
</section> --}}
<!-- End Call To Action Section -->

<!-- ======= Frequently Asked Questions Section ======= -->
{{-- <section id="faq">
    <div class="container">

        <div class="section-header">
            <h3 class="section-title">Frequently Asked Questions</h3>
            <span class="section-divider"></span>
            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                accusantium doloremque</p>
        </div>

        <ul class="faq-list">

            <li>
                <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a
                    erat
                    nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i
                        class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet
                        non
                        curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor
                        purus
                        non.
                    </p>
                </div>
            </li>

            <li>
                <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque
                    varius morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i
                        class="bi bi-chevron-up icon-close"></i>
                </div>
                <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                        velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend
                        donec
                        pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus
                        turpis massa tincidunt dui.
                    </p>
                </div>
            </li>

            <li>
                <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet
                    consectetur adipiscing elit pellentesque habitant morbi? <i
                        class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                </div>
                <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                        pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit.
                        Rutrum
                        tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna
                        molestie at elementum eu facilisis sed odio morbi quis
                    </p>
                </div>
            </li>

            <li>
                <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci
                    dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i
                        class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                        velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend
                        donec
                        pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus
                        turpis massa tincidunt dui.
                    </p>
                </div>
            </li>

            <li>
                <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam
                    pellentesque
                    nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i
                        class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in
                        est
                        ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit
                        adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                    </p>
                </div>
            </li>

            <li>
                <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus
                    faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i
                        class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                </div>
                <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo
                        integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc
                        eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                        Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus.
                        Nibh tellus molestie nunc non blandit massa enim nec.
                    </p>
                </div>
            </li>

        </ul>

    </div>
</section> --}}
<!-- End Frequently Asked Questions Section -->

<!-- ======= Gallery Section ======= -->
{{-- <section id="gallery">
    <div class="container-fluid" data-aos="fade-up">
        <div class="section-header">
            <h3 class="section-title">Gallery</h3>
            <span class="section-divider"></span>
            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                accusantium doloremque</p>
        </div>

        <div class="row g-0">

            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <a href="/assets/img/gallery/gallery-1.jpg" data-gall="portfolioGallery" class="gallery-lightbox">
                        <img src="/assets/img/gallery/gallery-1.jpg" alt="">
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <a href="/assets/img/gallery/gallery-2.jpg" data-gall="portfolioGallery" class="gallery-lightbox">
                        <img src="/assets/img/gallery/gallery-2.jpg" alt="">
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <a href="/assets/img/gallery/gallery-3.jpg" data-gall="portfolioGallery" class="gallery-lightbox">
                        <img src="/assets/img/gallery/gallery-3.jpg" alt="">
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <a href="/assets/img/gallery/gallery-4.jpg" data-gall="portfolioGallery" class="gallery-lightbox">
                        <img src="/assets/img/gallery/gallery-4.jpg" alt="">
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <a href="/assets/img/gallery/gallery-5.jpg" data-gall="portfolioGallery" class="gallery-lightbox">
                        <img src="/assets/img/gallery/gallery-5.jpg" alt="">
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <a href="/assets/img/gallery/gallery-6.jpg" data-gall="portfolioGallery" class="gallery-lightbox">
                        <img src="/assets/img/gallery/gallery-6.jpg" alt="">
                    </a>
                </div>
            </div>

        </div>

    </div>
</section> --}}
<!-- End Gallery Section -->

<!-- ======= Contact Section ======= -->
{{-- <section id="contact">
    <div class="container" data-aos="fade-up">
        <div class="row">

            <div class="col-lg-4 col-md-4">
                <div class="contact-about">
                    <h3>Avilon</h3>
                    <p>Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam
                        phasellus.
                        Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc
                        congue.</p>
                    <div class="social-links">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="info">
                    <div>
                        <i class="bi bi-geo-alt"></i>
                        <p>A108 Adam Street<br>New York, NY 535022</p>
                    </div>

                    <div>
                        <i class="bi bi-envelope"></i>
                        <p>info@example.com</p>
                    </div>

                    <div>
                        <i class="bi bi-phone"></i>
                        <p>+1 5589 55488 55s</p>
                    </div>

                </div>
            </div>

            <div class="col-lg-5 col-md-8">
                <div class="form">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            </div>
                            <div class="form-group col-lg-6 mt-3 mt-lg-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit" title="Send Message">Send
                                Message</button></div>
                    </form>
                </div>
            </div>

        </div>

    </div>
</section> --}}
<!-- End Contact Section -->
@endsection