@extends('admin.layouts.main')
@section('title', 'Assesor Kompetensi')

@section('content')
<div class="pagetitle">
    <h1>Assesor Kompetensi</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('assesor.index')}}">Assesor Kompetensi</a></li>
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
                        <input value="{{ $assesor->assesor_name }}" name="assesor_name" id="assesor_name" type="text"
                            class="form-control" required>

                        <label for="assesor_code" class="col-form-label">Kode Assesor</label>
                        <input value="{{$assesor->assesor_code}}" id="assesor_code" name="assesor_code" type="text"
                            class="form-control" required>

                        <label for="assesor_specialize" class="col-form-label">Keahlian Assesor</label>
                        <input value="{{ $assesor->assesor_specialize}}" id="assesor_specialize"
                            name="assesor_specialize" type="text" class="form-control" required>

                    </div>
                    <div class="col-sm-6">
                        <label for="assesor_address" class="col-form-label">Alamat Assesor</label>
                        <input value="{{ $assesor->assesor_address }}" id="assesor_address" name="assesor_address"
                            type="text" class="form-control" required>

                        <label for="assesor_image" class="col-sm-4 col-form-label">Tambah Gambar</label>
                        <input name="assesor_image" class="form-control" type="file" id="assesor_image"
                            onchange="validateImage()" accept="image/*">
                        <img id="img-preview" class="img-fluid col-sm-4 mt-3"
                            src="{{ asset('storage/' .$assesor->assesor_image)}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="assesor_detail" class="col-form-label">Detail Assesor</label>
                    <div class="col-sm-12">
                        <input value="{{ $assesor->assesor_detail }}" id="assesor_detail" type="hidden"
                            name="assesor_detail" required>
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