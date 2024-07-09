@extends('layouts.app')

@section('content')
@section('title', 'Skema Sertifikasi')
<!-- ======= Featuress Section ======= -->
<section id="schema" class=" pb-md-2 pb-lg-5 section-bg pt-lg-5" data-aos="fade-up">
    <div class="d-none d-lg-block" style="margin-top: -60px; padding-top: 60px;"></div>
    <div class="container pb-4 pt-5">
        <div class="row align-items-end gy-3 mb-4 pb-lg-3 pb-1">
            <div class="col-md-6">
                <h2 class="mb-2 mb-md-0 title-custom">Skema Sertifikasi</h2>
            </div>
            <div class="col-md-6">
                <form class="row gy-2" action="{{ route('search') }}">
                    <div class="d-flex align-items-center">
                        <div class="nav flex-nowrap me-sm-4 me-3">
                            <label class="nav-link p-0 active" aria-label="Grid view">
                                <i class="bi-filter fs-2 text-black"></i>
                            </label>
                        </div>
                        <select class="form-select sceme_bnsp" name="sceme_bnsp">
                            <option disabled value="0">Status BNSP</option>
                            <option value="0">Tampilkan Semua</option>
                            <option value="1">BNSP Aktif</option>
                            <option value="2">BNSP Tidak Aktif</option>
                            <option value="3">BNSP Pengajuan</option>
                        </select>
                        <select class="form-select sceme_status" name="sceme_status">
                            <option disabled value="0">Status Skema</option>
                            <option value="0">Tampilkan Semua</option>
                            <option value="1">Status Aktif</option>
                            <option value="2">Status Tidak Aktif</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="row align-items-center pb-5 mb-lg-2">
            </div>
            <div class="filter"></div>
        </div>
    </div>
</section>
<!-- End Featuress Section -->
@endsection