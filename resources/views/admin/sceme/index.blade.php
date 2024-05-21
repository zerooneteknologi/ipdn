@extends('admin.layouts.main')
@section('title', 'Skema Sertifikasi')

@section('content')
<div class="pagetitle">
    <h1>Skema Sertifikasi</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
            <li class="breadcrumb-item">Skema Sertifikasi</li>
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
            <h5 class="card-title">Skema Sertifikasi</h5>
            <a href="{{ route('sceme.create')}}" class="btn btn-primary float-start">Tambah Skema</a>

            <!-- Default Table -->
            <table id="sceme" class="table table-responsive">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">No</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kode</th>
                        <th scope="col">File</th>
                        <th scope="col">Status</th>
                        <th scope="col">Status BNSP</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($scemes as $sceme)
                    <tr>
                        <th>
                            <a href="{{ route('sceme.show', $sceme->id )}}" class="badge bg-info"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Detail"><i
                                    class="bi bi-eye"></i>
                            </a>
                            <a href="{{ route('sceme.edit', $sceme->id) }}" class="badge bg-warning"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i
                                    class="bi bi-pencil"></i>
                            </a>
                            <form id="deleted-form" action="{{ route('sceme.destroy', $sceme->id) }}" method="POST"
                                class="d-inline">
                                <button class="badge bg-danger  border-0"
                                    onClick="return confirm(`Apakah Yakin hapus skema {{ $sceme->sceme_name}}?`)">
                                    <i class="bi bi-trash"></i></button>
                                @csrf
                                @method('delete')
                            </form>
                        </th>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>@if ($sceme->sceme_image)
                            <img width="50px" class="rounded-circle" src="{{ asset('storage/'.$sceme->sceme_image) }}"
                                alt="{{ $sceme->sceme_name}}">
                            @else
                            <img width="50px" class="rounded-circle" src="/assets/img/logo/noimage.png"
                                alt="Tidak ada gambar">
                            @endif
                        </td>
                        <td>{{ $sceme->sceme_name}}</td>
                        <td>{{ $sceme->sceme_code}}</td>
                        <td>
                            @if ($sceme->sceme_file)
                            <span><i class="bi bi-filetype-pdf"></i></span>
                            @endif
                        </td>
                        <td>
                            @if ($sceme->sceme_status == 1)
                            <p class="text-bg-info">Aktif</p>
                            @else
                            <p class="text-bg-danger">Tidak Aktif</p>
                            @endif
                        </td>
                        <td>
                            @if ($sceme->sceme_bnsp == 1)
                            <p class="text-bg-info">Aktif</p>
                            @else
                            <p class="text-bg-danger">Tidak Aktif</p>
                            @endif
                        </td>
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
        $('#sceme').DataTable({
            dom: 'Bfrtip', // Menambahkan tombol ekspor
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print' // Pilihan ekspor
            ]
    });
    });
</script>
@endpush