@extends('layouts.app')

@section('content')
@section('title', 'Pendaftaran')

<!-- ======= registration Section ======= -->
<section id="registration">
    <div class="container" data-aos="fade-up">

        <div class="section-header mt-3">
            <h3 class="section-title">Pendaftaran</h3>
            <span class="section-divider"></span>
        </div>

        <iframe
            src="https://docs.google.com/forms/d/e/1FAIpQLSdthchKJsV5zrlbxZmxClkaJKOFCni_YIPLHdRBmA0mSXtX8w/viewform?embedded=true"
            frameborder="0" marginheight="0" marginwidth="0" width="100%" height="100%" scrolling="auto">
        </iframe>

    </div>
</section>
<!-- End registration Section -->
@endsection
@push('script')
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
@endpush
</script>