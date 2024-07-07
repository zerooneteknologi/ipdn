@extends('layouts.app')

@section('content')
@section('title', 'Assesor Kompetensi')
<!-- ======= Featuress Section ======= -->
<section id="schema" class=" pb-md-2 pb-lg-5 section-bg pt-lg-5" data-aos="fade-up">
    <div class="d-none d-lg-block" style="margin-top: -60px; padding-top: 60px;"></div>
    <div class="container pb-4 pt-5">
        <h2 class="h1 text-center text-md-center mb-lg-4 pt-1 pt-md-4 title-custom">
            Assesor Kompetensi
        </h2>
        <div class="row align-items-center pb-5 mb-lg-2">
        </div>
        <div class="row row-cols-lg-5 row-cols-sm-2 row-cols-1 gy-md-4 gy-2">
            @foreach ($assesors as $assesor)
            <!-- Item -->
            <div class="col pb-3">
                <article class="card border-0 shadow-sm h-100">
                    <div class="position-relative">
                        @if ($assesor->assesor_image)
                        <img src="{{ asset('storage/' . $assesor->assesor_image) }}" class="card-img-top"
                            alt="{{ $assesor->assesor_name }}" style="height: 200px; object-fit: contain; width: 100%">
                        @else
                        <img src="/assets/img/logo/noimage.png" class="card-img-top" alt="Image"
                            style="height: 200px; object-fit: contain; width: 100%">
                        @endif
                    </div>
                    <div class="card-body pb-4 text-center">
                        <div class="align-items-center justify-content-between mb-3">
                            <span class="fs-sm text-muted">{{ $assesor->assesor_specialize }}</span>
                        </div>
                        <h3 class="h5 mb-0">
                            <a href="{{ route('assesorsingle', $assesor->assesor_slug) }}">{{ $assesor->assesor_name
                                }}</a>
                        </h3>
                    </div>
                </article>
            </div>
            @endforeach

        </div>
        {{ $assesors->links() }}
    </div>

    </div>
</section>
<!-- End Featuress Section -->
@endsection
@push('script')
<script>
    // this.onload = (even) => {
    //     alert('ok')
    // }    
    // $(document).ready(function() {
    //     // Gantilah '#elementID' dengan ID elemen yang ingin Anda scroll ke sana
    //     $('html, body').animate({
    //         scrollTop: $('#schema').offset().top - 100
    //     }, 1000); // Durasi scroll dalam milidetik
    // });
</script>
@endpush