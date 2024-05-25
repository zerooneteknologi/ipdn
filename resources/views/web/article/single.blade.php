@extends('layouts.app')

@section('content')
@section('title', $article->article_title)
<section id="service-details" class="service-details">

    <div class="container">

        <div class="row">

            <div class="col-12">
                <div class="">
                    <img class="rounded img-fluid mx-auto d-block" style="width: 80%;" src="/assets/img/logo/noimage.png"
                        alt="Tidak ada gambar" class="card-img-top img-fluid">
                    <hr class="hr hr-blurry" />
                    <div class="card-body">
                        <h1 class="card-title">{{ $article->article_title }}</h1>
                        <strong
                            class="badge bg-info border-0 text-uppercase my-3">{{ $article->category->category_name }}
                            |
                            {{ date_format($article->created_at, 'd M Y') }}</strong>
                        <hr class="hr hr-blurry" />
                        <p>{!! $article->article_description !!}</p>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section><!-- End Service-details Section -->
@endsection
