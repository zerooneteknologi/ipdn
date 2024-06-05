@extends('admin.layouts.main')
@section('title', 'Partner')

@section('content')
<div class="pagetitle">
    <h1>Partner</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
            <li class="breadcrumb-item">Partner</li>
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
            <h5 class="card-title">Partner</h5>
            <button class="btn btn-primary float-start btn-add">Tambah
                Partner</button>

            <!-- Default Table -->
            <table id="partner" class="table table-responsive">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">No</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Nama</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($partners as $partner)
                    <tr>
                        <th>
                            <button
                                onclick="edit( {{ $partner->id }}, '{{$partner->partner_name}}', '{{ $partner->partner_image }}' )"
                                class="badge bg-warning border-0" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Edit"><i class="bi bi-pencil"></i>
                            </button>
                            <form id="deleted-form" action="{{ route('partner.destroy', $partner->id) }}" method="POST"
                                class="d-inline">
                                <button class="badge bg-danger  border-0"
                                    onClick="return confirm(`Apakah Yakin hapus Partner {{ $partner->partner_name}}?`)">
                                    <i class="bi bi-trash"></i></button>
                                @csrf
                                @method('delete')
                            </form>
                        </th>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>@if ($partner->partner_image)
                            <img width="50px" class="rounded-circle"
                                src="{{ asset('ipdn/storage/app/public/'.$partner->partner_image) }}"
                                alt="{{ $partner->partner_name}}">
                            @else
                            <img width="50px" class="rounded-circle" src="/assets/img/logo/noimage.png"
                                alt="Tidak ada gambar">
                            @endif
                        </td>
                        <td>{{ $partner->partner_name}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- End Default Table Example -->
        </div>
    </div>

</section>

<!-- Vertically centered Modal -->
<div class="modal fade" id="modal_partner" tabindex="-1">
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
                        <label for="partner_name" class="col-sm-5 col-form-label">Nama Partner</label>
                        <div class="col-sm-7">
                            <input id="partner_name" name="partner_name" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="partner_image" class="col-sm-5 col-form-label">Tambah Gambar</label>
                        <div class="col-sm-7">
                            <input class="form-control" type="file" id="partner_image" name="partner_image"
                                accept="image/*">
                            <img class="img-fluid col-sm-4 mt-3 img-preview" src="">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sumbmit"></button>
                </div>

            </form><!-- End General Form Elements -->
        </div>
    </div>
</div><!-- End Vertically centered Modal-->
@endsection

@push('script')
<script>
    $(document).ready(function() {
        $('#partner').DataTable({
            dom: 'Bfrtip', // Menambahkan tombol ekspor
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print' // Pilihan ekspor
            ]
    });
    });

    /**
     * image preview
    */
    $('#partner_image').change(function() {
    const file = this.files[0]
    const readfFle = new FileReader();
    
    readfFle.readAsDataURL(file);
    readfFle.onload = function(e) {
    $('.img-preview').attr('src', e.target.result);
    }
    })

    /**
     * show modal create
    */
    $('.btn-add').click(function (e) {
        $('.modal-title').html('Tambah Partner');
        $('.btn-sumbmit').html('Tambah')
        $('.modal-form').attr('action', "{{ route('partner.store')}}");
        $('.method').val('POST')
        $('#partner_name').val('')
        $('#partner_image').val('')
        $('.img-preview').attr('src', '')
        $('#modal_partner').modal('show');
    })

    function edit(id, partner_name, partner_image) {
        $('.modal-title').html('Edit Partner');
        $('.btn-sumbmit').html('Edit')
        $('.modal-form').attr('action', "/partner/" + id);
        $('.method').val('PUT')
        $('#partner_name').val(partner_name)
        $('.img-preview').attr('src', 'ipdn/storage/app/public/' + partner_image)
        $('#modal_partner').modal('show');
    }
</script>
@endpush