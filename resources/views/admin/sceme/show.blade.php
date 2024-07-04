@extends('admin.layouts.main')
@section('title', 'Skema Sertifikasi')

@section('content')
<div class="pagetitle">
    <h1>Skema Sertifikasi</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('sceme.index')}}">Skema Sertifikasi</a></li>
            <li class="breadcrumb-item active">Detail</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section profile">
    <div class="row">
        <div class="col-xl-4">

            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    <img src="{{ asset('ipdn/storage/app/public/'. $sceme->sceme_image )}}" alt="Profile"
                        class="rounded-circle">
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
                                data-bs-target="#profile-overview">Deskripsi</button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">File</button>
                        </li>

                        {{-- <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab"
                                data-bs-target="#profile-settings">Settings</button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab"
                                data-bs-target="#profile-change-password">Change Password</button>
                        </li> --}}

                    </ul>
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title">{{ $sceme->sceme_name }}</h5>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Kode Skema</div>
                                <div class="col-lg-9 col-md-8">{{ $sceme->sceme_code }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Status</div>
                                <div class="col-lg-9 col-md-8">
                                    @if ($sceme->sceme_status == 1)
                                    Aktif
                                    @else
                                    Tidak Aktif
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Status BNSP</div>
                                <div class="col-lg-9 col-md-8">
                                    @if ($sceme->sceme_bnsp == 1)
                                    Aktif
                                    @else
                                    @if ($sceme->sceme_bnsp == 3)
                                    Pengajuan
                                    @else
                                    Tidak Aktif
                                    @endif
                                    @endif
                                </div>
                            </div>
                            <h5 class="card-title">Detail</h5>

                            {!! $sceme->sceme_detail !!}
                        </div>

                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                            <!-- file preview Form -->
                            @if ($sceme->sceme_file)
                            <embed src="{{ route('viepdf', $sceme->id) }}?type=1" type="" class="w-100 vh-100">
                            @else
                            <div class="row">Tidak Ada file</div>
                            @endif
                            <!-- End file preview Form -->

                        </div>

                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

        </div>
    </div>
</section>
@endsection