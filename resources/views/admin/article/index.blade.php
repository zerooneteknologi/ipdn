@if (request('type') == 3)

@extends('admin.layouts.main')
@section('title', 'Berita')

@section('content')
<div class="pagetitle">
    <h1>Berita</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Berita</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<section class="section">
    <div class="card">
        <div class="card-body">
            @if (session()->has('success'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <i class="bi bi-star me-1"></i>
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <h5 class="card-title">Kategori Berita</h5>
            <form method="POST" class="row row-cols-lg-auto g-3 align-items-center mb-3"
                action="{{ route('category.store') }}">
                @csrf
                <div class="col-12">
                    <div class="input-group">
                        <input type="text" class="form-control" name="category_name"
                            placeholder="Tambah kategori disini" autofocus>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-success">Tambah</button>
                </div>
            </form>

            <!-- Default Table -->
            <table id="category" class="table table-responsive">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">No</th>
                        <th scope="col">Daftar kategori</th>
                        <th scope="col">Edit kategori</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>
                            <form id="deleted-form" action="{{ route('category.destroy', $category->id) }}"
                                method="POST" class="d-inline">
                                <button class="badge bg-danger  border-0"
                                    onClick="return confirm(`Apakah Yakin hapus kategori {{ $category->category_name }}?`)">
                                    <i class="bi bi-trash"></i></button>
                                @csrf
                                @method('delete')
                            </form>
                        </td>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $category->category_name }}</td>
                        <td>
                            <form method="POST" class="row row-cols-sm-auto g-3 align-items-center"
                                action="{{ route('category.update', $category->id) }}">
                                @csrf
                                @method('put')
                                <div class="col-12">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="category_name"
                                            placeholder="Ubah kategori disini" autofocus>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-sm btn-warning"><i
                                            class="bi bi-pencil"></i></button>
                                </div>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- End Default Table Example -->
        </div>
    </div>

</section>
<section class="section">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Berita</h5>
            <a href="{{ route('article.create') }}?type=3" class="btn btn-primary float-start">Tambah Berita</a>
            <!-- Default Table -->
            <table id="articles" class="table table-responsive">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">No</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Kategori</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>
                            <a href="{{ route('article.edit', $article->id) }}?type=3" class="badge bg-warning"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i
                                    class="bi bi-pencil"></i>
                            </a>
                            <form id="deleted-form" action="{{ route('article.destroy', $article->id) }}" method="POST"
                                class="d-inline">
                                <button class="badge bg-danger  border-0"
                                    onClick="return confirm(`Apakah Yakin hapus article {{ $article->article_title }}?`)">
                                    <i class="bi bi-trash"></i></button>
                                @csrf
                                @method('delete')
                            </form>
                        </td>
                        <td>
                            @if ($article->article_image)
                            <img width="50px" class="rounded-circle"
                                src="{{ asset('storage/' . $article->article_image) }}"
                                alt="{{ $article->article_name }}">
                            @else
                            <img width="50px" class="rounded-circle" src="/assets/img/logo/noimage.png"
                                alt="Tidak ada gambar">
                            @endif
                        </td>
                        <td>{{ $article->article_title }}</td>
                        <td>{{ $article->category->category_name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- End Default Table Example -->
        </div>
    </div>

</section>

@endsection

@push('script')
<script>
    $(document).ready(function() {
            $('#category').DataTable({
                dom: 'Bfrtip', // Menambahkan tombol ekspor
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print' // Pilihan ekspor
                ]
            });
            
            $('#articles').DataTable({
                dom: 'Bfrtip', // Menambahkan tombol ekspor
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print' // Pilihan ekspor
                ]
            });
        });
</script>
@endpush

@endif

@if (request('type') == 1)
@extends('admin.layouts.main')
@section('title', 'Profil LSP')

@section('content')
<div class="pagetitle">
    <h1>Profil LSP</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">Profil LSP</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section profile">
    <div class="row">
        <div class="col-xl-4">

            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    @if ($profile->article_image)
                    <img src="{{ asset('storage/'. $profile->article_image) }}" alt="Profile" class="rounded-circle">
                    @else
                    <img src="/assets/img/logo/noimage.png" alt="no image" class="rounded-circle">
                    @endif
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
                                data-bs-target="#profile-overview">Profil LSP</button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                Profil</button>
                        </li>
                    </ul>
                    <div class="tab-content pt-2">

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
                                        <img src="{{ asset('storage/'. $profile->article_image) }}" alt="Profile"
                                            class="img-fluid col-sm-4 mt-3 img-preview">
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

@endif