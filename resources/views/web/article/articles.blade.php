@extends('layouts.app')

@section('content')
@section('title', 'Articles')
<!-- ======= Featuress Section ======= -->
<section id="schema" class=" pb-md-2 pb-lg-5 section-bg pt-lg-5" data-aos="fade-up">
    <div class="d-none d-lg-block" style="margin-top: -60px; padding-top: 60px;"></div>
    <div class="container pb-4 pt-5">
        <h2 class="h1 text-center text-md-center mb-lg-4 pt-1 pt-md-4">
            LIst Articles
        </h2>
        <div class="row align-items-center pb-5 mb-lg-2">
        </div>
        <div class="row row-cols-1 row-cols-md-2">
            <!-- Item -->
            @foreach ($articles as $article)
                <div class="col py-4 my-2 my-sm-3" data-aos="fade-up">
                    <a href="{{ route('articlesingle', $article->article_slug) }}"
                        class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 me-xl-2">
                        <div class="card-body pt-3">
                            <div
                                class="d-inline-block bg-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                                @if ($article->article_image)
                                    <img src="{{ asset('storage/' . $article->article_image) }}"
                                        class="d-block m-1 img-fluid" width="100" alt="{{ $article->article_title }}"
                                        style="max-height: 100px; min-height: 100px" />
                                @else
                                    <img src="/assets/img/logo/noimage.png" class="d-block m-1 img-fluid" width="100"
                                        alt="no image" style="max-height: 100px; min-height: 100px" />
                                @endif
                            </div>
                            <h2 class="h4 mt-3 align-items-center">
                                {{ $article->article_name }}
                                <i class="bi bi-arrow-right-circle text-primary fs-3 ms-2"></i>
                            </h2>
                            {{ Str::after(Str::limit($article->article_description, 100, '...'), '<div>') }}
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        {{ $articles->links() }}
    </div>
</section>
<!-- End Featuress Section -->
@endsection
@push('script')
<script>
    // this.onload = (even) => {
    //     alert('ok')
    // }
</script>
@endpush
