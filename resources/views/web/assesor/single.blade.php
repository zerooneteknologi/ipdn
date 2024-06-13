@extends('layouts.app')

@section('content')
@section('title', 'Assesor Kompetensi')
<section class=" pb-md-2 pb-lg-5 section-bg pt-lg-5 mt-3" data-aos="fade-up">
    <div class="d-none d-lg-block" style="margin-top: -60px; padding-top: 60px;"></div>
    <div class="container pb-4 pt-5">
        <div class="row">
            <div class="col-xl-4">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center text-center">
                        @if ($assesor->assesor_image)
                            <img src="{{ asset('ipdn/storage/app/public/' . $assesor->assesor_image) }}" alt="Profile"
                                class="rounded" width="250px">
                        @else
                            <img src="/assets/img/logo/noimage.png" alt="Profile" class="rounded" width="200px">
                        @endif
                        <h2>{{ $assesor->assesor_name }}</h2>
                        <h4>{{ $assesor->assesor_specialize }}</h4>
                    </div>
                </div>

            </div>

            <div class="col-xl-8">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab"
                                    data-bs-target="#profile-overview">Profil</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#profile-edit">Detail</button>
                            </li>

                        </ul>
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-overview" id="profile-overview">


                                <h5 class="card-title">Profile</h5>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Nama</div>
                                    <div class="col-lg-9 col-md-8">{{ $assesor->assesor_name }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Nomor</div>
                                    <div class="col-lg-9 col-md-8">{{ $assesor->assesor_code }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Kompetensi</div>
                                    <div class="col-lg-9 col-md-8">{{ $assesor->assesor_specialize }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Alamat</div>
                                    <div class="col-lg-9 col-md-8">{{ $assesor->assesor_address }}</div>
                                </div>

                            </div>

                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                <h5 class="card-title">Detail</h5>
                                {!! $assesor->assesor_detail !!}

                            </div>

                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
