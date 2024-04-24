@extends('admin.layouts.main')
@section('title', 'Skema Sertifikasi')

@section('content')
    <div class="pagetitle">
        <h1>Pengaturan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item">Pengaturan</li>
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
                <h5 class="card-title">Pengaturan</h5>

                <!-- Default Table -->
                <table id="sceme" class="table table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Jenis Pengaturan</th>
                            <th scope="col">Detail</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($settings as $setting)
                            <tr>
                                <form action="{{ route('setting.update', $setting->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('put')
                                    <td>{{ $loop->iteration }}</td>
                                    <td>Embed Google Form</td>
                                    <td><input type="text" class="form-control" name="setting_embed"
                                            value="{{ $setting->setting_embed }}"></td>
                                    <th><button type="submit" class="btn btn-warning">Update</button></th>
                                </form>
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
            $('#sceme').DataTable();
        });
    </script>
@endpush
