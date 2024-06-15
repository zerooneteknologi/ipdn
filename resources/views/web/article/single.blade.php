@extends('layouts.app')

@section('content')
@section('title', $article->article_title)
<section id="service-details" class="service-details pt-lg-5 mt-3">

    <div class="container">

        <div class="row">

            <div class="col-12">
                <div class="">
                    <hr class="hr hr-blurry" />
                    <div class="card-body">
                        <h1 class="card-title text-capitalize title-custom">{{ $article->article_title }}</h1>
                        <strong class="badge bg-info border-0 text-uppercase my-3">
                            @if ($article->article_type == 3)
                                {{ $article->category->category_name }}
                                <span class="mx-2">|</span>
                            @endif
                            <i class="bi bi-clock-fill"></i>
                            {{ date_format($article->created_at, 'd M Y') }}
                        </strong>
                        <hr>
                        @if ($article->article_image)
                            <img class="rounded img-fluid mx-auto d-block my-5" style="width: 50%;"
                                src="{{ asset('ipdn/storage/app/public/' . $article->article_image) }}"
                                alt="{{ $article->article_image }}" class="card-img-top img-fluid">
                        @else
                            <img class="rounded img-fluid mx-auto d-block my-5" style="width: 50%;"
                                src="/assets/img/logo/noimage.png" alt="Tidak ada gambar"
                                class="card-img-top img-fluid">
                        @endif
                        <hr class="hr hr-blurry" />
                        <div style="text-align: justify">{!! $article->article_description !!}</div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section><!-- End Service-details Section -->
@endsection
