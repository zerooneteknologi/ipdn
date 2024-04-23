@extends('admin.layouts.main')
@section('title', 'Assesor Kompetensi')

@section('content')
<div class="pagetitle">
    <h1>Assesor Kompetensi</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">Assesor Kompetensi</li>
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
            <h5 class="card-title">Assesor Kompetensi</h5>
            <a href="{{ route('assesor.create')}}" class="btn btn-primary float-start">Tambah Assesor</a>

            <!-- Default Table -->
            <table id="assesor" class="table table-responsive">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">foto</th>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kode</th>
                        <th scope="col">spesialsasi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($assesors as $assesor)
                    <tr>
                        <th>
                            <a href="{{ route('assesor.show', $assesor->id )}}" class="badge bg-info"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Detail"><i
                                    class="bi bi-eye"></i>
                            </a>
                            <a href="{{ route('assesor.edit', $assesor->id) }}" class="badge bg-warning"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i
                                    class="bi bi-pencil"></i>
                            </a>
                            <form id="deleted-form" action="{{ route('assesor.destroy', $assesor->id) }}" method="POST"
                                class="d-inline">
                                <button class="badge bg-danger  border-0"
                                    onClick="return confirm(`Apakah Yakin hapus skema {{ $assesor->assesor_name}}?`)">
                                    <i class="bi bi-trash"></i></button>
                                @csrf
                                @method('delete')
                            </form>
                        </th>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>@if ($assesor->assesor_image)
                            <img width="50px" class="rounded-circle"
                                src="{{ asset('storage/'.$assesor->assesor_image) }}" alt="{{ $assesor->assesor_name}}">
                            @else
                            <img width="50px" class="rounded-circle" src="/assets/img/logo/noimage.png"
                                alt="Tidak ada gambar">
                            @endif
                        </td>
                        <td>{{ $assesor->assesor_name}}</td>
                        <td>{{ $assesor->assesor_code}}</td>
                        <td>{{ $assesor->assesor_specialize}}</td>
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
        $('#assesor').DataTable({
            dom: 'Bfrtip', // Menambahkan tombol ekspor
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print' // Pilihan ekspor
            ]
    });
    });
</script>
@endpush