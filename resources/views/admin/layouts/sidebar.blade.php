<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-heading">Menu Utama</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('home') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#scema" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Skema Sertifikasi</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="scema" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('sceme.index') }}">
                        <i class="bi bi-circle"></i><span>Daftar Skema</span>
                    </a>
                    <a href="{{ route('sceme.create') }}">
                        <i class="bi bi-circle"></i><span>Tambah Skema</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Sceme Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#assesor" data-bs-toggle="collapse" href="#">
                <i class="bi bi-person"></i><span>Assesor Sertifikasi</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="assesor" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('assesor.index') }}">
                        <i class="bi bi-circle"></i><span>Daftar Assesor</span>
                    </a>
                    <a href="{{ route('assesor.create') }}">
                        <i class="bi bi-circle"></i><span>Tambah Assesor</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Assesor Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('partner.index') }}">
                <i class="bi bi-person"></i>
                <span>Partner</span>
            </a>
        </li><!-- End Partner Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#setting" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gear"></i><span>Pengaturan</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="setting" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('setting.index') }}">
                        <i class="bi bi-circle"></i><span>Data</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Setting Nav -->

        <li class="nav-heading">Artikel</li>

        <a class="nav-link collapsed" data-bs-target="#article" data-bs-toggle="collapse" href="#">
            <i class="bi bi-newspaper"></i><span>Berita</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="article" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ route('article.index') }}?type=3">
                    <i class="bi bi-circle"></i><span>Daftar Berita</span>
                </a>
                <a href="{{ route('article.create') }}?type=3">
                    <i class="bi bi-circle"></i><span>Tambah Berita</span>
                </a>
            </li>
        </ul>
        </li><!-- End Article Nav -->

        <a class="nav-link collapsed" data-bs-target="#announcement" data-bs-toggle="collapse" href="#">
            <i class="bi bi-newspaper"></i><span>Pengumuman</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="announcement" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ route('article.index') }}?type=4">
                    <i class="bi bi-circle"></i><span>Daftar Pengumuman</span>
                </a>
                <a href="{{ route('article.create') }}?type=4">
                    <i class="bi bi-circle"></i><span>Tambah Pengumuman</span>
                </a>
            </li>
        </ul>
        </li><!-- End Article Nav -->

        <li class="nav-heading">Tentang LSP</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('article.index') }}?type=1">
                <i class="bi bi-person-badge"></i>
                <span>Profil LSP</span>
            </a>
        </li><!-- End profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('vision.index') }}?type=1">
                <i class="bi bi-eye"></i>
                <span>Visi Misi</span>
            </a>
        </li><!-- End vision Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('article.index') }}?type=2">
                <i class="bi bi-bookmark-star-fill"></i>
                <span>Struktur Organisasi</span>
            </a>
        </li><!-- End organizer Page Nav -->

    </ul>

</aside>