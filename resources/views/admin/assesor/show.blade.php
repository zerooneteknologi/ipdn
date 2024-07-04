@extends('admin.layouts.main')
@section('title', 'Assesor Kompetensi')

@section('content')
<div class="pagetitle">
    <h1>Assesor Kompetensi</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('assesor.index')}}">Assesor Kompetensi</a></li>
            <li class="breadcrumb-item active">Detail</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section profile">
    <div class="row">
        <div class="col-xl-4">

            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    <img src="{{ asset('ipdn/storage/app/public/'. $assesor->assesor_image )}}"
                        alt="{{ $assesor->assesor_name }}" class="card-img">
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
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">File</button>
                        </li>
                    </ul>
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title">{{ $assesor->assesor_name }}</h5>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Kode Assesor</div>
                                <div class="col-lg-9 col-md-8">{{ $assesor->assesor_code }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Lisensi</div>
                                <div class="col-lg-9 col-md-8">{{ $assesor->assesor_license }}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Kompetensi</div>
                                <div class="col-lg-9 col-md-8">{{ $assesor->assesor_competency }}
                                </div>
                            </div>

                            <div class="row" style="text-align: justify;">
                                {!! $assesor->assesor_detail !!}
                            </div>
                        </div>

                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                            <!-- file preview Form -->
                            @if ($assesor->assesor_file)
                            <embed src="{{ route('viepdf', $assesor->id) }}?type=2" class="w-100 vh-100">
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