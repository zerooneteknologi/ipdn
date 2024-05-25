@extends('admin.layouts.main')
@section('title', 'Article')

@section('content')
    <div class="pagetitle">
        <h1>Article</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active">Article</li>
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
                <h5 class="card-title">Category Article</h5>
                <form method="POST" class="row row-cols-lg-auto g-3 align-items-center"
                    action="{{ route('category.store') }}">
                    @csrf
                    <div class="col-12">
                        <div class="input-group">
                            <input type="text" class="form-control" name="category_name"
                                placeholder="Tambah kategori disini" autofocus>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>

                <!-- Default Table -->
                <table id="article" class="table table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Action</th>
                            <th scope="col">Daftar Kategory</th>
                            <th scope="col">Edit Kategory</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
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
                <h5 class="card-title">Article</h5>
                <a href="{{ route('article.create') }}" class="btn btn-primary float-start">Tambah Article</a>
                <!-- Default Table -->
                <table id="article" class="table table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Action</th>
                            <th scope="col">Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>
                                    {{-- <a href="{{ route('article.show', $article->id) }}" class="badge bg-info"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Detail"><i
                                            class="bi bi-eye"></i>
                                    </a> --}}
                                    <a href="{{ route('article.edit', $article->id) }}" class="badge bg-warning"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i
                                            class="bi bi-pencil"></i>
                                    </a>
                                    <form id="deleted-form" action="{{ route('article.destroy', $article->id) }}"
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
{{-- 
@push('script')
    <script>
        $(document).ready(function() {
            $('#article').DataTable({
                dom: 'Bfrtip', // Menambahkan tombol ekspor
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print' // Pilihan ekspor
                ]
            });
        });
    </script>
@endpush --}}
