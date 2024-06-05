@extends('admin.layouts.main')

@if (request('type') == 1)
@section('title', 'Profil LSP')
@else
@section('title', 'Struktur Organisasi')
@endif

@section('content')
<div class="pagetitle">
    <h1>Profil LSP</h1>
    <nav>
        <ol class="breadcrumb">
            @if (request('type') == 1)
            <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">Profil LSP</li>
            @else
            <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">Struktu Organisasi</li>
            @endif
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section profile">
    <div class="row">
        <div class="col-xl-4">

            <div class="card">
                @if (request('type') == 1)
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    @if ($profile->article_image)
                    <img src="{{ asset('ipdn/storage/app/public/'. $profile->article_image) }}"
                        alt="{{ $profile->article_title }}" class="rounded-circle">
                    @else
                    <img src="/assets/img/logo/noimage.png" alt="no image" class="rounded-circle">
                    @endif
                </div>
                @else
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    @if ($organizer->article_image)
                    <img src="{{ asset('ipdn/storage/app/public/'. $organizer->article_image) }}"
                        alt="{{ $organizer->article_title }}" class="rounded-circle">
                    @else
                    <img src="/assets/img/logo/noimage.png" alt="no image" class="rounded-circle">
                    @endif
                </div>
                @endif
            </div>

        </div>

        <div class="col-xl-8">

            <div class="card">
                <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    @if (request('type') == 1)
                    <ul class="nav nav-tabs nav-tabs-bordered">

                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab"
                                data-bs-target="#profile-overview">Profil LSP</button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                Profil</button>
                        </li>
                    </ul>
                    @else
                    <ul class="nav nav-tabs nav-tabs-bordered">

                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab"
                                data-bs-target="#profile-overview">Struktur Organisasi LSP</button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                Struktur Organisasi</button>
                        </li>
                    </ul>
                    @endif
                    <div class="tab-content pt-2">

                        @if (request('type') == 1)
                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title">{{ $profile->article_title }}</h5>


                            {!! $profile->article_description !!}
                        </div>

                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                            <!-- General Form Elements -->
                            <form method="POST" action="{{ route('article.update', $profile->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <input type="hidden" name="article_type" value="{{ request('type')}}">

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Judul</label>
                                    <div class="col-sm-10">
                                        <input id="article_title" value="{{ $profile->article_title }}"
                                            name="article_title" type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="article_image" class="col-sm-2 col-form-label">Gambah</label>
                                    <div class="col-sm-10">
                                        <input name="article_image" class="form-control" type="file" id="article_image"
                                            onchange="validateImage()" accept="image/*">
                                        @if ($profile->article_image)
                                        <img src="{{ asset('ipdn/storage/app/public/'. $profile->article_image) }}"
                                            alt="Profile" class="img-fluid col-sm-4 mt-3 img-preview">
                                        @else
                                        <img class="img-fluid col-sm-4 mt-3 img-preview" src="">
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="article_description" class="col-form-label">Description article</label>
                                    <div class="col-sm-12">
                                        <input value="{{ $profile->article_description }}" id="article_description"
                                            type="hidden" name="article_description" required>
                                        <trix-editor input="article_description"></trix-editor>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>

                            </form><!-- End General Form Elements -->

                        </div>
                        @else
                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title">{{ $organizer->article_title }}</h5>


                            {!! $organizer->article_description !!}
                        </div>

                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                            <!-- General Form Elements -->
                            <form method="POST" action="{{ route('article.update', $organizer->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <input type="hidden" name="article_type" value="{{ request('type')}}">

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Judul</label>
                                    <div class="col-sm-10">
                                        <input id="article_title" value="{{ $organizer->article_title }}"
                                            name="article_title" type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="article_image" class="col-sm-2 col-form-label">Gambah</label>
                                    <div class="col-sm-10">
                                        <input name="article_image" class="form-control" type="file" id="article_image"
                                            onchange="validateImage()" accept="image/*">
                                        @if ($organizer->article_image)
                                        <img src="{{ asset('ipdn/storage/app/public/'. $organizer->article_image) }}"
                                            alt="Profile" class="img-fluid col-sm-4 mt-3 img-preview">
                                        @else
                                        <img class="img-fluid col-sm-4 mt-3 img-preview" src="">
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="article_description" class="col-form-label">Description article</label>
                                    <div class="col-sm-12">
                                        <input value="{{ $organizer->article_description }}" id="article_description"
                                            type="hidden" name="article_description" required>
                                        <trix-editor input="article_description"></trix-editor>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>

                            </form><!-- End General Form Elements -->

                        </div>
                        @endif

                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

        </div>
    </div>
</section>
@endsection

@push('css')
<style>
    trix-toolbar [data-trix-button-group="file-tools"] {
        display: none;
    }
</style>
@endpush

@push('script')
<script>
    // validata file image
        function validateImage() {
            const fileInput = document.getElementById('article_image');
            const file = fileInput.files[0];
            const imgPreview = document.getElementById('.img-preview')

            const reader = new FileReader();

            reader.addEventListener("load", () => {
                imgPreview.src = reader.result;
            }, false);

            if (file) {
                reader.readAsDataURL(file);
            }
        }
</script>
@endpush