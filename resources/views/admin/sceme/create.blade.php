@extends('admin.layouts.main')
@section('title', 'Skema Sertifikasi')

@section('content')
<div class="pagetitle">
    <h1>Skema Sertifikasi</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('sceme.index')}}">Skema Sertifikasi</a></li>
            <li class="breadcrumb-item active">Tambah</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Tambah Skema Sertifikasi</h5>

            <!-- General Form Elements -->
            <form method="POST" action="{{ route('sceme.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label for="sceme_name" class=" col-form-label">Nama Skema</label>
                        <input name="sceme_name" id="sceme_name" type="text" class="form-control" required>

                        <label for="sceme_code" class="col-form-label">Kode Skema</label>
                        <input id="sceme_code" name="sceme_code" type="text" class="form-control" required>

                        <label for="sceme_status" class="col-form-label">Status</label>
                        <select id="sceme_status" name="sceme_status" class="form-select"
                            aria-label="Default select example" required>
                            <option value="">pilih Status</option>
                            <option value="1">Active</option>
                            <option value="2">Tidak Aktif</option>
                        </select>

                    </div>
                    <div class="col-sm-6">
                        <div class="row mb-3">
                            <label for="sceme_file" class="col-sm-4 col-form-label">Tambah File</label>
                            <div class="col-sm-8">
                                <input name="sceme_file" class="form-control" type="file" id="sceme_file"
                                    onchange="validatePDF()">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="sceme_image" class="col-sm-4 col-form-label">Tambah Gambar</label>
                            <div class="col-sm-8">
                                <input name="sceme_image" class="form-control" type="file" id="sceme_image"
                                    onchange="validateImage()">
                                <img id="img-preview" class="img-fluid col-sm-4 mt-3"
                                    src="/assets/img/advanced-feature-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="sceme_detail" class="col-form-label">Deskripsi Skema</label>
                    <div class="col-sm-12">
                        <input id="sceme_detail" type="hidden" name="sceme_detail" required>
                        <trix-editor input="sceme_detail"></trix-editor>
                    </div>
                </div>

                <div class="mb-3 mt-3">
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                </div>

            </form><!-- End General Form Elements -->

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
    // validate file pdf
    function validatePDF() {
        var fileInput = document.getElementById('sceme_file');
        var file = fileInput.files[0];

        if (file.type !== 'application/pdf') {
            alert('Hanya file PDF')
            fileInput.value = null;
        }
    }

    // validata file image
    function validateImage() {
        var fileInput = document.getElementById('sceme_image');
        var file = fileInput.files[0];
        var imgPreview = document.getElementById('img-preview')

        if (!file.type.startsWith('image/')) {
        alert('hanya bisa gambar')
        fileInput.value = null;
        } else {
            const reader = new FileReader();
        
            reader.addEventListener("load", () => {
                imgPreview.src = reader.result;
            }, false);
    
            if (file) {
                reader.readAsDataURL(file);
            }
        }
    }
</script>
@endpush