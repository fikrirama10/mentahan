<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo py-3 px-4 ms-2">
        <a href="{{ route('home') }}" class="d-block w-100">
           Admin
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti ti-menu-2 d-none d-lg-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-lg-none ti-sm align-middle"></i>
        </a>
    </div>
    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Page -->
        <li class="menu-item {{ request()->routeIs('home') ? 'active' : '' }}">
            <a href="{{ route('home') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>
        <li class="menu-item {{ $id == 'kepegawaian' ? 'active' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-users"></i>
                <div data-i18n="Kepegawaian">Kepegawaian</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('kepegawaian') }}" class="menu-link">
                        <div data-i18n="Pegawai Aktif">Pegawai Aktif</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('kepegawaian','nonaktif') }}" class="menu-link">
                        <div data-i18n="Pegawai Non Aktif">Pegawai Non Aktif</div>
                    </a>
                </li>
            </ul>
        </li>
        {{-- <li class="menu-item {{ $id == 'kepegawaian' ? 'active' : '' }}">
            <a href="{{ route('kepegawaian') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-users"></i>
                <div data-i18n="Kepegawaian">Kepegawaian</div>
            </a>
        </li> --}}
        <li class="menu-item {{ $id == 'kriteria' ? 'active' : '' }}">
            <a href="{{ route('kriteria') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-filter"></i>
                <div data-i18n="Kriteria">Kriteria</div>
            </a>
        </li>
        <li class="menu-item {{ $id == 'penilaian' ? 'active' : '' }}">
            <a href="{{ route('penilaian') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-chart-line"></i>
                <div data-i18n="Perangkingan">Perangkingan</div>
            </a>
        </li>
        <li class="menu-item {{ $id == 'laporan' ? 'active' : '' }}">
            <a href="{{ route('laporan') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-file-analytics"></i>
                <div data-i18n="Laporan">Laporan</div>
            </a>
        </li>
    </ul>
</aside>
