@include('layouts.meta')

<body>

    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="hero-text" data-aos="zoom-out">
            <h2>Selamat Datang di LSP</h2>
            <h3 class="text-white">Institut Pemerintahan Dalam Negeri</h3>
            <a href="#about" class="btn btn-get-started scrollto">Get Started</a>
        </div>

    </section><!-- End Hero Section -->

    <main id="main">

        @yield('content')

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('layouts.footer')
    <!-- ======= End Footer ======= -->
