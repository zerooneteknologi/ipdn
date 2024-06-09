@extends('admin.layouts.main')
@if (request('type') == 3)
@section('title', 'Berita')
@else
@section('title', 'Pengumuman')
@endif

@section('content')

<div class="pagetitle">
    @if (request('type') ==3)
    <h1>Berita</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Berita</li>
        </ol>
    </nav>
    @else
    <h1>Pengumuman</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Pengumuman</li>
        </ol>
    </nav>
    @endif
</div><!-- End Page Title -->

@if (request('type') ==3)
<section class="section">
    <div class="card">
        <div class="card-body">
            <label for="" class="bg-warning">{{ $article_type }}</label>
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
@endif
<!-- End Page category -->

<section class="section">
    <div class="card">
        <div class="card-body">
            @if (request('type') ==3)
            <h5 class="card-title">Berita</h5>
            @else
            <h5 class="card-title">Pengumuman</h5>
            @endif
            <a href="{{ route('article.create') }}?type={{ request('type')}}" class="btn btn-primary float-start">Tambah
                Baru</a>
            <!-- Default Table -->
            <table id="articles" class="table table-responsive">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">No</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Judul</th>
                        @if (request('type') ==3)
                        <th scope="col">Kategori</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>
                            <a href="{{ route('article.edit', $article->id) }}?type={{ request('type')}}"
                                class="badge bg-warning" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Edit"><i class="bi bi-pencil"></i>
                            </a>
                            <form id="deleted-form"
                                action="{{ route('article.destroy', $article->id) }}?type={{ request('type')}}"
                                method="POST" class="d-inline">
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
                                src="{{ asset('ipdn/storage/app/public/' . $article->article_image) }}"
                                alt="{{ $article->article_name }}">
                            @else
                            <img width="50px" class="rounded-circle" src="/assets/img/logo/noimage.png"
                                alt="Tidak ada gambar">
                            @endif
                        </td>
                        <td>{{ $article->article_title }}</td>
                        @if (request('type') ==3)
                        <td>{{ $article->category->category_name }}</td>
                        @endif
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
            $('#pengumuman').DataTable({
                dom: 'Bfrtip', // Menambahkan tombol ekspor
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print' // Pilihan ekspor
                ]
            });
        });
</script>
@endpush