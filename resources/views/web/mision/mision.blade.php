@extends('layouts.app')

@section('content')
@section('title', 'Visi Misi LSP')
<section id="service-details" class="service-details py-lg-5 mt-lg-3">

    <div class="container">

        <div class="row gy-5 mt-3">

            <div class="col-12">
                <div class="">
                    <div class="card-body">
                        <h1 class="card-title text-center">Visi LSP</h1>
                        <hr class="hr hr-blurry" />
                        <p class="text-center">{{ $vision->vision }}</p>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title text-center mt-5">Misi LSP</h1>
                        <hr class="hr hr-blurry" />
                        <table class="table table-borderless">
                            @foreach ($misions as $mision)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $mision->mision }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section><!-- End Service-details Section -->
@endsection