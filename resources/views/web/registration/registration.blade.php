@extends('layouts.app')

@section('content')
    <!-- ======= Header ======= -->
    @include('layouts.header')
    <!-- End Header -->

    <!-- ======= registration Section ======= -->
    <section id="registration">
        <div class="container" data-aos="fade-up" style="height: 2000">

            <div class="section-header mt-3">
                <h3 class="section-title">Pendaftaran</h3>
                <span class="section-divider"></span>
            </div>

            <div class="row">
                <div class="col-lg">
                    <div class="box">
                        <iframe
                            src="https://docs.google.com/forms/d/e/1FAIpQLSdthchKJsV5zrlbxZmxClkaJKOFCni_YIPLHdRBmA0mSXtX8w/viewform?embedded=true"
                            width="100%" height="1000" frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End registration Section -->
    <script>
        // Tentukan elemen tujuan
        var targetElement = document.getElementById("registration");

        // Dapatkan posisi relatif elemen terhadap dokumen
        var rect = targetElement.getBoundingClientRect();

        // Gulir halaman ke posisi elemen tersebut
        window.scrollTo({
            // top: rect.top + window.scrollY,
            top: rect.top + (window.scrollY - 80),
            behavior: 'smooth' // untuk animasi scroll
        });
    </script>
@endsection
