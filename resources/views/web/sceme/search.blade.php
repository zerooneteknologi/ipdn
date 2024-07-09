<!-- Item -->
<div class="row row-cols-1 row-cols-md-2 pt-lg-3 mt-lg-4">
    @foreach ($scemes as $sceme)
    <div class="col py-4 my-2 my-sm-3" data-aos="fade-up">
        <a href="{{ route('scemesingle', $sceme->sceme_slug) }}"
            class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 me-xl-2">
            <span class="position-absolute top-0 end-0 bg-info p-1 rounded">
                @if ($sceme->sceme_bnsp == 1)
                Sudah BNSP
                @elseif ($sceme->sceme_bnsp == 2)
                Belum BNSP
                @else
                Dalam Pengajuan
                @endif
            </span>
            <div class="card-body pt-3">
                <div class="d-inline-block bg-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                    @if ($sceme->sceme_image)
                    <img src="{{ asset('storage/' . $sceme->sceme_image) }}" class="d-block m-1 img-fluid" width="100"
                        alt="{{ $sceme->sceme_name }}" style="max-height: 100px; min-height: 100px" />
                    @else
                    <img src="/assets/img/logo/noimage.png" class="d-block m-1 img-fluid" width="100" alt="no image"
                        style="max-height: 100px; min-height: 100px" />
                    @endif
                </div>
                <h2 class="h4 mt-3 align-items-center">
                    {{ $sceme->sceme_name }}
                    <i class="bi bi-arrow-right-circle text-primary fs-3 ms-2"></i>
                </h2>
                {!! Str::between(Str::limit($sceme->sceme_detail, 100), '<div>', '</div>') !!}
            </div>
        </a>
    </div>
    @endforeach
</div>
{{ $scemes->links()}}