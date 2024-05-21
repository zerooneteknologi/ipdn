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
                        <li><a href="#about">Profil LSP</a></li>
                        <li><a href="#about">Visi Misi</a></li>
                        <li><a href="#about">Struktur Organisasi</a></li>
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
        <form action="{{ route('scemes')}}" method="GET" class="search-bar">
            <input type="search" name="search" pattern=".*\S.*" required onfocus="fokus(this)"
                onfocusout="fokusout(this)" autocomplete="false">
            <button class="search-btn" type="submit">
                <span>Search</span>
            </button>
        </form>
    </div>
</header>

@push('script')
<script>
    function fokus(x) {
            $('ul').addClass("d-none")
        }
    function fokusout(x) {
            $('ul').removeClass("d-none")
        }
    $('input').keyup(function() {
        const val = $('input').val()
        $.get('/scemes', {}, function (data) {
            document.open();
            document.write(data);
            document.close();
        // console.log(data);
        $.get('/search', { search : `${val}`}, function(data) {
            $('.filter').html(data)
        })
        });
    })
</script>
@endpush