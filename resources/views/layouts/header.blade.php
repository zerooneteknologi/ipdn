<header id="header"
    class="navbar-expand-lg fixed-top d-flex align-items-center {{Request::is('/') ? 'header-transparent' :''}}">
    <div class="container d-flex justify-content-between align-items-center">

        <div id="logo">
            <a href="/" class="navbar-brand pe-3">
                <img src="/assets/img/logo/Logo_IPDN.png" width="47" alt="Silicon" />
                <img src="/assets/img/logo/Logo_LSP.jpg" class="rounded-circle" width="45" alt="Silicon" />
            </a>
            {{-- <h1 class="align-middle"><a href="/">LSP</a></h1> --}}
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="/assets/img/logo.png" alt=""></a> -->
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto {{Request::is('/') ? 'active' :''}}" href="/">Beranda</a>
                </li>
                <li class="dropdown"><a href="#about"><span>Profil LSP</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route('articlesingle', 'profil-lsp') }}?type=1">Profil LSP</a></li>
                        <li><a href="{{ route('mision')}}">Visi Misi</a></li>
                        <li><a href="{{ route('articlesingle', 'struktur-organisasi') }}?type=2">Struktur Organisasi</a>
                        </li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto {{Request::is('scemes') ? 'active' :''}}"
                        href="{{ route('scemes')}}">Skema Sertifikasi</a></li>
                <li><a class="nav-link scrollto {{Request::is('assesors') ? 'active' :''}}"
                        href="{{ route('assesors')}}">Asesor Kompetensi</a></li>
                <li><a class="nav-link scrollto" href="#pengumuman">Pengumuman</a></li>
                <li><a class="nav-link scrollto" href="#berita">Kegiatan</a></li>
                <li><a class="nav-link scrollto {{Request::is('registration') ? 'active' :''}}"
                        href="{{ route('registration') }}">Pendaftaran</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        <form class="search-box">
            <input type="text" name="search" placeholder="Cari Skema " />
            <button type="reset" class="button-reset"></button>
        </form>
    </div>
</header>


@push('script')
@if (!Request::is('assesors'))
<script src="{{ asset('assets/js/costum.js')}}"></script>
@endif
<script>
    $(document).ready(function() {
        const scemes = `
                        <section id="schema" class=" pb-md-2 pb-lg-5 section-bg pt-lg-5" data-aos="fade-up">
                            <div class="d-none d-lg-block" style="margin-top: -60px; padding-top: 60px;"></div>
                            <div class="container pb-4 pt-5">
                                <div class="row align-items-end gy-3 mb-4 pb-lg-3 pb-1">
                                    <div class="col-md-6">
                                        <h2 class="mb-2 mb-md-0">Skema Sertifikasi</h2>
                                    </div>
                                    <div class="col-md-6">
                                        <form class="row gy-2" action="{{ route('search')}}">
                                            <div class="d-flex align-items-center">
                                                <div class="nav flex-nowrap me-sm-4 me-3">
                                                    <label class="nav-link p-0 active" aria-label="Grid view">
                                                        <i class="bi-filter fs-2 text-black"></i>
                                                    </label>
                                                </div>
                                                <select class="form-select sceme_bnsp" name="sceme_bnsp">
                                                    <option value="0">Status BNSP</option>
                                                    <option value="1">BNSP Aktif</option>
                                                    <option value="2">BNSP Tidak Aktif</option>
                                                </select>
                                                <select class="form-select sceme_status" name="sceme_status">
                                                    <option value="0">Status Skema</option>
                                                    <option value="1">Status Aktif</option>
                                                    <option value="2">Status Tidak Aktif</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="row align-items-center pb-5 mb-lg-2">
                                    </div>
                                    <div class="row row-cols-1 row-cols-md-2 pt-lg-3 mt-lg-4 filter"></div>
                                </div>
                            </div>
                        </section>`
        $('input').click(function() {
            $('ul').addClass("d-none")
        })
    
        $('.button-reset').click(function() {
            $('ul').removeClass("d-none")
        })
        $('input').keyup(function() {
            const val = $('input').val()
            
            @if (Request::is('scemes'))
                $.get('/search', { search : `${val}`}, function(data) {
                    $('.filter').html(data)
                })
            @else
            $('#header').removeClass("header-transparent")
                $('#main').html(scemes);
                $.get('/search', { search : `${val}`}, function(data) {
                    $('.filter').html(data)
                })
            @endif
        })
    })
</script>
@endpush