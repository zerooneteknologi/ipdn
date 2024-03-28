@include('layouts.meta')

<body>

    <!-- ======= Header ======= -->
    @include('layouts.header')
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="hero-text" data-aos="zoom-out">
            <h2>Selamat Datang di LSP</h2>
            <p>We are team of talented designers making websites with Bootstrap</p>
            <a href="#about" class="btn btn-get-started scrollto">Get Started</a>
        </div>

    </section><!-- End Hero Section -->

    <main id="main">

        @yield('content')

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('layouts.footer')
    <!-- ======= End Footer ======= -->