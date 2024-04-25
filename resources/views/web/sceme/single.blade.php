@extends('layouts.app')

@section('content')
@section('title', $sceme->sceme_name)
<section id="service-details" class="service-details">

    <div class="container">

        <div class="row gy-5 mt-3">

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

                <div class="service-box">
                </div>
                <!-- End Services List -->

                {{-- <div class="service-box">
                    <h4>Download Catalog</h4>
                    <div class="download-catalog">
                        <a href="#"><i class="bi bi-filetype-pdf"></i><span>Catalog PDF</span></a>
                        <a href="#"><i class="bi bi-file-earmark-word"></i><span>Catalog DOC</span></a>
                    </div>
                </div> --}}
                <!-- End Services List -->

                {{-- <div class="help-box d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-headset help-icon"></i>
                    <h4>Have a Question?</h4>
                    <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>+1 5589
                            55488 55</span></p>
                    <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a
                            href="/cdn-cgi/l/email-protection#15767a7b6174766155706d74786579703b767a78"><span
                                class="__cf_email__"
                                data-cfemail="2d4e4243594c4e596d48554c405d4148034e4240">[email&#160;protected]</span></a></span>
                    </p>
                </div> --}}

            </div>

            <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('storage/' . $sceme->sceme_image )}}" alt="" class="img-fluid services-img">
                <h3 class="mt-3">{{ $sceme->sceme_name }}</h3>
                {!! $sceme->sceme_detail !!}
            </div>

        </div>

    </div>

</section><!-- End Service-details Section -->
@endsection