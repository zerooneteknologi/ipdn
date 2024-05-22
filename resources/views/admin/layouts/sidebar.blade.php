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

    </ul>

</aside>