@extends('admin.layouts.main')

@if (request('type') == 3)
@section('title', 'Berita | Tambah')
@else
@section('title', 'Pengumuman | Tambah')
@endif

@section('content')
<div class="pagetitle">
    @if (request('type') == 3)
    <h1>Berita</h1>
    @else
    <h1>Pengumuman</h1>
    @endif
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            @if (request('type') == 3)
            <li class="breadcrumb-item"><a href="{{ route('article.index') }}?type=3">Berita</a></li>
            @else
            <li class="breadcrumb-item"><a href="{{ route('article.index') }}?type=4">Pengumuman</a></li>
            @endif
            <li class="breadcrumb-item active">Tambah</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="card">
        <div class="card-body">
            @if (request('type') == 3)
            <h5 class="card-title">Tambah Berita</h5>
            @else
            <h5 class="card-title">Tambah Pengumuman</h5>
            @endif

            <!-- General Form Elements -->
            <form method="POST" action="{{ route('article.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-6 mb-3">

                        <label for="article_title" class="col-form-label mt-2">Judul</label>
                        <input id="article_title" name="article_title" type="text" value="{{ old('article_title')}}"
                            class="form-control @error('article_title') is-invalid @enderror" required>
                        @error('article_title')
                        <span class="text-danger">{{ 'Maksimal 200 karakter !'}}</span>
                        @enderror

                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                        <input type="hidden" name="article_type" value="{{ request('type') }}">

                        @if (request('type') == 3)
                        <label for="category_id" class="col-form-label">Kategori article</label>
                        <select id="category_id" name="category_id" class="form-control" required>
                            <option disabled>Pilih Kategori</option>
                            @foreach ($categories as $category)
                            @if (old('category_id') == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->category_name }}</option>
                            @else
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endif
                            @endforeach
                        </select>
                        @endif

                        @if (request('type') == 4)
                        <input type="hidden" name="category_id" value="1">

                        <label for="article_file" class="col-sm-4 col-form-label">Tambah File <i>pdf</i></label>
                        <input name="article_file" class="form-control" type="file" id="article_file" accept=".pdf">
                        @endif

                    </div>

                    <div class="col-sm-6">
                        <label for="article_image" class="col-sm-4 col-form-label">Tambah Gambar</label>
                        <input name="article_image" class="form-control" type="file" id="article_image"
                            onchange="validateImage()" accept="image/*">
                        <img id="img-preview" class="img-fluid col-sm-4 mt-3" src="">
                    </div>

                </div>

                <div class="row mb-3">
                    <label for="article_description" class="col-form-label">Description</label><br>
                    <span class="text-danger">
                        @error('article_description')
                        {{ 'Deskripsi tidak boleh kosong' }}
                        @enderror
                    </span>
                    <div class="col-sm-12">
                        <input id="article_description" type="hidden" value="{{ old('article_description')}}"
                            name="article_description" required>
                        <trix-editor input="article_description"></trix-editor>
                    </div>

                </div>

                <div class="mb-3 mt-3">
                    <button type="submit" class="btn btn-success">Simpan</button>
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
            const fileInput = document.getElementById('article_image');
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