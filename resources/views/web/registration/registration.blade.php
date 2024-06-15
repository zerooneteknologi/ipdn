@extends('layouts.app')

@section('content')
@section('title', 'Pendaftaran')

<!-- ======= registration Section ======= -->
<section id="registration" class="pt-lg-5 mt-lg-5">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2 class="h1 text-center text-md-center mb-lg-4 pt-1 pt-md-4 title-custom">Pendaftaran</h2>
            <span class="section-divider"></span>
        </div>

        {!! $iframe->setting_embed !!}

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
