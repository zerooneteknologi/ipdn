@extends('admin.layouts.main')
@section('title', 'Visi LSP')

@section('content')
<div class="pagetitle">
    <h1>Visi LSP</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
            <li class="breadcrumb-item">Visi LSP</li>
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
            <h5 class="card-title">Visi LSP</h5>

            <!-- Default Table -->
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Visi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>
                            <button onclick="editvision({{$vision->id}}, '{{ $vision->vision }}')"
                                class="badge bg-warning border-0" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Edit"><i class="bi bi-pencil"></i>
                            </button>
                        </th>
                        <td>{{ $vision->vision }}</td>
                    </tr>
                </tbody>
            </table>
            <!-- End Default Table Example -->
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Misi LSP</h5>
            <button class="btn btn-primary float-start" onclick="addmision()">Tambah Misi</button>

            <!-- Default Table -->
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">No</th>
                        <th scope="col">Misi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($misions as $mision)
                    <tr>
                        <th>
                            <button onclick="editmision({{ $mision->id}}, '{{ $mision->mision}}')"
                                class="badge bg-warning border-0" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Edit"><i class="bi bi-pencil"></i>
                            </button>
                            <form id="deleted-form" action="{{ route('mision.destroy', $mision->id) }}" method="POST"
                                class="d-inline">
                                <button class="badge bg-danger  border-0"
                                    onClick="return confirm(`Apakah Yakin hapus Misi {{ $mision->mision}}?`)">
                                    <i class="bi bi-trash"></i></button>
                                @csrf
                                @method('delete')
                            </form>
                        </th>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $mision->mision }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- End Default Table Example -->
        </div>
    </div>

    <!-- Vertically centered Modal -->
    <div class="modal fade" id="modal_vision" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- General Form Elements -->
                <form action="" method="POST" enctype="multipart/form-data" class="modal-form">
                    @csrf
                    <input type="hidden" name="_method" class="method">
                    <div class="modal-body">
                        <div class="row mb-3">
                            <label for="vision" class="col-sm-2 col-form-label label-modal"></label>
                            <div class="col-sm-10">
                                <textarea name="vision" id="vision" cols="43" rows="4" required></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-sumbmit">Simpan</button>
                    </div>

                </form><!-- End General Form Elements -->
            </div>
        </div>
    </div><!-- End Vertically centered Modal-->
</section>
@endsection
@push('script')
<script>
    /**
     * show modal edit vision
    */
    function editvision(id, vision) {
        $('.modal-form').attr('action', "/vision/" + id)
        $('.method').val('put')
        $('.modal-title').html('Edit Visi');
        $('.label-modal').html('Visi');
        $('textarea').html(vision);
        $('#modal_vision').modal('show');
    }
    
    /**
     * show add modal mision
    */
    function addmision() {
        $('.modal-form').attr('action', "{{ route('mision.store')}}")
        $('.method').val('POST')
        $('.modal-title').html('Tambah Misi');
        $('.label-modal').html('Misi');
        $('textarea').html('');
        $('#modal_vision').modal('show');
    }

    /**
     * show modal edit mision
    */
    function editmision(id, mision) {
        $('.modal-form').attr('action', "/mision/" + id)
        $('.method').val('put')
        $('.modal-title').html('Edit Misi');
        $('.label-modal').html('Misi');
        $('textarea').html(mision);
        $('#modal_vision').modal('show');
    }
</script>
@endpush