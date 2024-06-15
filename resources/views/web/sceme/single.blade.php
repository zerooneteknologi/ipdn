@extends('layouts.app')

@section('content')
@section('title', $sceme->sceme_name)
<section id="service-details" class="service-details pt-lg-5 mt-lg-3">

    <div class="container">

        <div class="row gy-5 mt-3">

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

                <div class="service-box">
                    {{-- <iframe src="{{ route('viepdf')}}" frameborder="0"></iframe> --}}
                </div>
                <!-- End Services List -->
                {{-- <div class="card">

                </div> --}}

                <div class="service-box">
                    <div class="card-body pt-4 d-flex flex-column align-items-center">
                        @if ($sceme->sceme_image)
                            <img src="{{ asset('ipdn/storage/app/public/' . $sceme->sceme_image) }}" alt="Profile"
                                class="rounded" width="300px">
                        @else
                            <img src="/assets/img/logo/noimage.png" alt="Profile" class="rounded" width="200px">
                        @endif
                    </div>
                </div>
                <!-- End Services List -->

            </div>

            <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                <ul class="nav nav-tabs nav-tabs-bordered">

                    <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="tab"
                            data-bs-target="#profile-overview">Deskripsi</button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#data-sceme">Data Skema</button>
                    </li>

                </ul>
                <div class="tab-content pt-2">
                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                        <h3 class="mt-3 text-uppercase fw-bold text-center">{{ $sceme->sceme_name }}</h3>
                        <h4>Detail Skema</h4>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 label ">Nama Skema</div>
                            <div class="col-lg-9 col-md-8">{{ $sceme->sceme_name }}</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 label ">Kode Skema</div>
                            <div class="col-lg-9 col-md-8">{{ $sceme->sceme_code }}</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 label ">Status Skema</div>
                            @if ($sceme->sceme_status == 1)
                                <div class="col-lg-9 col-md-8">Aktif</div>
                            @else
                                <div class="col-lg-9 col-md-8">Tidak Aktif</div>
                            @endif
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3 col-md-4 label ">Status BNSP</div>
                            @if ($sceme->sceme_bnsp == 1)
                                <div class="col-lg-9 col-md-8">Ya</div>
                            @else
                                <div class="col-lg-9 col-md-8">Tidak</div>
                            @endif
                        </div>

                        {!! $sceme->sceme_detail !!}

                    </div>
                    <div class="tab-pane fade profile-edit pt-3" id="data-sceme">
                        @if ($sceme->sceme_file)
                            <embed src="{{ route('viepdf', $sceme->sceme_slug) }}" type="" class="w-100 vh-100">
                        @endif
                    </div>
                </div>
            </div>

        </div>

    </div>

</section><!-- End Service-details Section -->
@endsection
