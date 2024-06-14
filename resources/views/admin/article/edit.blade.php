@extends('admin.layouts.main')
@if (request('type') == 3)
    @section('title', 'Berita | Ubah')
@else
    @section('title', 'Pengumuman | Ubah')
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
                    <li class="breadcrumb-item"><a href="{{ route('article.index') }}?type=3">Pengumuman</a></li>
                @endif
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="card">
            <div class="card-body">
                @if (request('type') == 3)
                    <h5 class="card-title">Edit Berita</h5>
                @else
                    <h5 class="card-title">Edit Pengumuman</h5>
                @endif

                <!-- General Form Elements -->
                <form method="POST" action="{{ route('article.update', $article->id) }}?type={{ request('type') }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <input type="hidden" name="article_type" value="{{ request('type') }}">
                        <div class="col-sm-6 mb-3">
                            @if (request('type') == 3)
                                <label for="article_name" class="col-form-label mt-2">Kategori Berita</label>
                                <select id="article_id" name="category_id" class="form-control" required>
                                    @foreach ($categories as $category)
                                        @if ($article->category_id == $category->id)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @else
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            @endif

                            <label for="article_name" class="col-form-label mt-2">Judul</label>
                            <input value="{{ $article->article_title }}" id="article_title" name="article_title"
                                type="text" class="form-control" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="article_image" class="col-sm-4 col-form-label">Tambah Gambar</label>
                            <input name="article_image" class="form-control" type="file" id="article_image"
                                onchange="validateImage()" accept="image/*">
                            <img id="img-preview" class="img-fluid col-sm-4 mt-3"
                                src="{{ asset('ipdn/storage/app/public/' . $article->article_image) }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="article_description" class="col-form-label">Detail</label>
                        <div class="col-sm-12">
                            <input value="{{ $article->article_description }}" id="article_description" type="hidden"
                                name="article_description" required>
                            <trix-editor input="article_description"></trix-editor>
                        </div>
                        <span class="text-danger">
                            @error('article_description')
                                {{ 'Deskripsi tidak boleh kosong' }}
                            @enderror
                        </span>
                    </div>

                    <div class="mb-3 mt-3">
                        <button type="submit" class="btn btn-warning">Simpan</button>
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
