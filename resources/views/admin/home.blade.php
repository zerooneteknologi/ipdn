@extends('admin.layouts.main')
@section('title', 'IPDN')

@section('content')
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Dashboard</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
            <div class="row">

                <!-- Sales Card -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card">

                        <div class="card-body">
                            <h5 class="card-title">Skema Sertifikasi</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-archive"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $sceme }}</h6>
                                    <span class="text-success small pt-1 fw-bold">Jumlah Skema yang tersedia</span>

                                </div>
                            </div>

                        </div>

                    </div>
                </div><!-- End Sales Card -->

                <!-- Revenue Card -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card revenue-card">

                        <div class="card-body">
                            <h5 class="card-title">Assesor Kompetensi</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-person-lines-fill"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $assesor }}</h6>
                                    <span class="text-success small pt-1 fw-bold">Jumlah Assesor yang tersedia</span>
                                </div>
                            </div>

                        </div>

                    </div>
                </div><!-- End Revenue Card -->

                <!-- Recent Sales -->
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">

                        <div class="card-body">
                            <h5 class="card-title">Skema Sertifikasi</h5>

                            <table class="table table-borderless datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">BNSP</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($scemes as $sceme)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>
                                            @if ($sceme->sceme_image)
                                            <img width="30px" class="rounded-circle"
                                                src="{{ asset('storage/'. $sceme->sceme_image)}}"
                                                alt="{{ $sceme->sceme_name }}">
                                            @else
                                            <img width="30px" class="rounded-circle" src="/assets/img/logo/noimage.png"
                                                alt="noimage">
                                            @endif
                                        </td>
                                        <td>{{ $sceme->sceme_name}}</td>
                                        <td>
                                            @if ($sceme->sceme_status == 1)
                                            <span class="badge bg-success">aktif</span>
                                        </td>
                                        @else
                                        <span class="badge bg-warning">tidak aktif</span>
                                        @endif
                                        </td>
                                        <td>
                                            @if ($sceme->sceme_bnsp == 1)
                                            <span class="badge bg-success">ya</span>
                                            @else
                                            <span class="badge bg-warning">tidak</span>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div><!-- End Recent Sales -->

                <!-- Top Selling -->
                <div class="col-12">
                    <div class="card top-selling overflow-auto">

                        <div class="card-body pb-0">
                            <h5 class="card-title">Assesor Kompetensi</h5>

                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Spesialisasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($assesors as $assesor)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>
                                            @if ($assesor->assesor_image)
                                            <img src="{{ asset('storage/' . $assesor->assesor_image)}}"
                                                alt="{{ $assesor->assesor_name }}">
                                            @else
                                            <img width="30px" class="rounded-circle" src="/assets/img/logo/noimage.png"
                                                alt="noimage">
                                            @endif
                                        </td>
                                        <td>{{ $assesor->assesor_name }}</td>
                                        <td>{{ $assesor->assesor_specialize }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div><!-- End Top Selling -->

            </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

            <!-- News & Updates Traffic -->
            <div class="card">

                <div class="card-body pb-0">
                    <h5 class="card-title">Berita Terbaru</h5>

                    <div class="news">
                        @foreach ($articles as $article)
                        <div class="post-item clearfix">
                            @if ($article->article_image)
                            <img src="{{ asset('storage/' .$article->article_image) }}"
                                alt="{{ $article->article_title }}">
                            @else
                            <img src="/assets/img/logo/noimage.png" alt="noimage">
                            @endif
                            <h4><a href="{{ route('articlesingle', $article->article_slug) }}">{{
                                    $article->article_title }}</a></h4>
                            <p>
                                {{ Str::after(Str::limit($article->article_description, 50, '...'), '
                            <div>') }}
                                </p>
                            </div>
                            @endforeach

                        </div><!-- End sidebar recent posts-->

                    </div>
                </div><!-- End News & Updates -->

            </div><!-- End Right side columns -->

        </div>
</section>
@endsection