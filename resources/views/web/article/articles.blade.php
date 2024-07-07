@extends('layouts.app')

@section('content')
@section('title', 'Articles')
<!-- ======= Featuress Section ======= -->
<section id="schema" class=" pb-md-2 pb-lg-5 section-bg pt-lg-5" data-aos="fade-up">
    <div class="d-none d-lg-block" style="margin-top: -60px; padding-top: 60px;"></div>
    <div class="container pb-4 pt-5">
        <h2 class="h1 text-center text-md-center mb-lg-4 pt-1 pt-md-4 title-custom">
            @if (request('type') == 3)
            Daftar Berita
            @else
            Daftar Pengumuman
            @endif
        </h2>
        <div class="row align-items-center pb-5 mb-lg-2">
        </div>

        <!-- Blog articles -->
        <div class="pb-3">
            <!-- Blog item -->
            <!-- Article -->
            @foreach ($articles as $article)
            <article class="card border-0 shadow-sm overflow-hidden mb-4" data-aos="fade-up">
                <div class="row g-0 p-3">
                    <div class="col-sm-6 col-md-2 position-relative bg-repeat-0 bg-size-cover">
                        @if ($article->article_image)
                        <img src="{{ asset('storage/' . $article->article_image) }}"
                            class="img-fluid rounded-start mr-3" alt="{{ $article->article_name }}"
                            style="height: 150px; object-fit: cover; width: 100%" />
                        @else
                        <img src="/assets/img/logo/noimage.png" class="img-fluid rounded-start mr-3" alt="no image"
                            style="height: 150px; object-fit: cover; width: 100%" />
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
                    <div class="col-sm-6 col-md-10">
                        <div class="card-body">
                            <div class="align-items-center mb-3">
                                <h3 class="h4">
                                    <a href="{{ route('articlesingle', $article->article_slug) }}">
                                        {{ $article->article_title }}
                                    </a>
                                </h3>
                                @if (request('type') == 3)
                                <a href="#" class="badge fs-sm text-nav bg-warning text-decoration-none ps-3">
                                    {{ $article->category->category_name }}
                                </a>
                                <span class="mx-2">|</span>
                                @endif
                                <span class="fs-sm text-muted ">
                                    <i class="bi bi-clock-fill"></i>
                                    {{ date_format($article->created_at, 'd M Y') }}
                                </span>
                            </div>
                            <p>
                                {!! Str::after(Str::limit($article->article_description, 100, '...'), '
                            <div>') !!}
                                </p>

                            </div>
                        </div>
                    </div>
            </article>
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