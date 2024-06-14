@extends('layouts.app')

@section('content')
@section('title', $article->article_title)
<section id="service-details" class="service-details pt-lg-5 mt-3">

    <div class="container">

        <div class="row">

            <div class="col-12">
                <div class="">
                    @if ($article->article_image)
                        <img class="rounded img-fluid mx-auto d-block" style="width: 80%;"
                            src="{{ asset('ipdn/storage/app/public/' . $article->article_image) }}" alt="Tidak ada gambar"
                            class="card-img-top img-fluid">
                    @else
                        <img class="rounded img-fluid mx-auto d-block" style="width: 80%;"
                            src="/assets/img/logo/noimage.png" alt="Tidak ada gambar" class="card-img-top img-fluid">
                    @endif
                    <hr class="hr hr-blurry" />
                    <div class="card-body">
                        <h1 class="card-title">{{ $article->article_title }}</h1>
                        <strong class="badge bg-info border-0 text-uppercase my-3">
                            @if (!request('type') == 1 || !request('type') == 2)
                                {{ $article->category->category_name }}
                                |
                            @endif
                            {{ date_format($article->created_at, 'd M Y') }}
                        </strong>
                        <hr class="hr hr-blurry" />
                        <p>{!! $article->article_description !!}</p>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section><!-- End Service-details Section -->
@endsection
