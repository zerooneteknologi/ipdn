@extends('admin.layouts.main')
@section('title', 'Assesor Kompetensi')

@section('content')
<div class="pagetitle">
    <h1>Assesor Kompetensi</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('assesor.index') }}">Assesor Kompetensi</a></li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edit Assesor Kompetensi</h5>

            <!-- General Form Elements -->
            <form method="POST" action="{{ route('assesor.update', $assesor->id) }}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label for="assesor_name" class=" col-form-label">Nama Assesor</label>
                        <input value="{{ old('assesor_name',$assesor->assesor_name) }}" name="assesor_name"
                            id="assesor_name" type="text"
                            class="form-control @error('assesor_name') is-invalid @enderror" required>
                        @error('assesor_name')
                        <span class="text-danger">{{ 'maksimal 225 karakter !' }}</span><br>
                        @enderror

                        <label for="assesor_code" class="col-form-label">Kode Assesor</label>
                        <input value="{{ old('assesor_code',$assesor->assesor_code) }}" id="assesor_code"
                            name="assesor_code" type="text"
                            class="form-control @error('assesor_code') is-invalid @enderror" required>
                        @error('assesor_code')
                        <span class="text-danger">{{ 'maksimal 225 karakter !' }}</span><br>
                        @enderror

                        <label for="assesor_license" class="col-form-label">Lisensi Assesor</label>
                        <input value="{{ old('assesor_license',$assesor->assesor_license) }}" id="assesor_license"
                            name="assesor_license" type="text"
                            class="form-control @error('assesor_license') is-invalid @enderror" required>
                        @error('assesor_license')
                        <span class="text-danger">{{ 'maksimal 225 karakter !' }}</span><br>
                        @enderror

                        <label for="assesor_competency" class="col-form-label">Kompetensi Assesor</label>
                        <input value="{{ old('assesor_competency',$assesor->assesor_competency) }}"
                            id="assesor_competency" name="assesor_competency" type="text" class="form-control" required>
                    </div>
                    <div class="col-sm-6">
                        <label for="assesor_file" class="col-sm-4 col-form-label">File <i>pdf</i></label>
                        <input name="assesor_file" class="form-control" type="file" id="assesor_file" accept=".pdf">

                        <label for="assesor_image" class="col-sm-4 col-form-label">Gambar</label>
                        <input name="assesor_image" class="form-control" type="file" id="assesor_image"
                            onchange="validateImage()" accept="image/*">
                        <img id="img-preview" class="img-fluid col-sm-4 mt-3"
                            src="{{ asset('ipdn/storage/app/public/' . $assesor->assesor_image) }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="assesor_detail" class="col-form-label">Detail Assesor</label><br>
                    <span class="text-danger">
                        @error('assesor_detail')
                        {{ 'Detail tidak boleh kosong' }}
                        @enderror
                    </span>
                    <div class="col-sm-12">
                        <input value="{{ old('assesor_detail',$assesor->assesor_detail) }}" id="assesor_detail"
                            type="hidden" name="assesor_detail" required>
                        <trix-editor input="assesor_detail"></trix-editor>
                    </div>

                </div>

                <div class="mb-3 mt-3">
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                </div>

            </form><!-- End General Form Elements -->

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
            const fileInput = document.getElementById('assesor_image');
            const file = fileInput.files[0];
            const imgPreview = document.getElementById('img-preview')

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