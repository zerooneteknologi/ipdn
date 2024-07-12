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
                        <div class="d-flex justify-content-between align-items-center">
                            <strong class="badge bg-info border-0 text-uppercase my-3">
                                @if ($article->article_type == 3)
                                    {{ $article->category->category_name }}
                                    <span class="mx-2">|</span>
                                @endif
                                <i class="bi bi-clock-fill"></i>
                                {{ date_format($article->created_at, 'd M Y') }}
                            </strong>
                            @if ($article->article_type == 4)
                                @if ($article->article_file !== null)
                                    <a class="badge bg-secondary ms-2"
                                        href="{{ route('download', $article->article_slug) }}"><i
                                            class="bi bi-download"></i> File pdf unduh disini</a>
                                @else
                                    <span class="badge bg-secondary ms-2 text-capitalize">tidak ada berkas file</span>
                                @endif
                            @endif

                            @if ($article->article_type == 3)
                                <a href="{{ route('articles') }}?type=3" class="btn btn-outline-secondary ms-auto"><i
                                        class="bi bi-arrow-left"></i></a>
                            @elseif($article->article_type == 4)
                                <a href="{{ route('articles') }}?type=4" class="btn btn-outline-secondary ms-auto"><i
                                        class="bi bi-arrow-left"></i></a>
                            @endif
                        </div>

                        <hr>
                        @if ($article->article_image)
                            <a class="d-flex justify-content-center align-items-center"
                                href="{{ asset('ipdn/storage/app/public/' . $article->article_image) }}"
                                data-lightbox="image-1" data-title="{{ $article->article_image }}">
                                <img class="rounded img-fluid mx-auto d-block my-5" style="width: 50%;"
                                    src="{{ asset('ipdn/storage/app/public/' . $article->article_image) }}"
                                    alt="{{ $article->article_image }}" class="card-img-top img-fluid">
                            </a>
                        @else
                            <a class="d-flex justify-content-center align-items-center"
                                href="/assets/img/logo/noimage.png" data-lightbox="image-1" data-title="No Image">
                                <img src="/assets/img/logo/noimage.png" class="img-fluid rounded-start mr-3"
                                    alt="no image" style="width: 50%" />
                            </a>
                        @endif
                        <hr class="hr hr-blurry" />
                        <div class="mb-5" style="text-align: justify">{!! $article->article_description !!}</div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section><!-- End Service-details Section -->
@endsection

@push('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet" />
@endpush

@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox-plus-jquery.min.js"></script>
@endpush
