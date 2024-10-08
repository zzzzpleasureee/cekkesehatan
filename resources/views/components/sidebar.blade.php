<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html"><img src="{{ asset('/images/logo/logo.png') }}" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Cek Kesehatan</li>

                <li class="sidebar-item  ">
                    <a href="{{ route('admin.menu') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span> Menu</span>
                    </a>
                </li>

                <li class="sidebar-item  ">
                    <a href="{{ route('admin.doctor.index') }}" class='sidebar-link'>
                        <i class="bi bi-building"></i>
                        <span>Doctor</span>
                    </a>
                </li>

                <li class="sidebar-item  ">
                    <a href="{{ route('admin.patient.index') }}" class='sidebar-link'>
                        <i class="bi bi-people"></i>
                        <span>Pasien Daftar Online</span>
                    </a>
                </li>

                <li class="sidebar-item  ">
                    <a href="{{ route('admin.kunjungan.index') }}" class='sidebar-link'>
                        <i class="bi bi-door-open"></i>
                        <span>Kunjungan Pasien</span>
                    </a>
                </li>

                <li class="sidebar-item  ">
                    <a href="{{ route('admin.treatment.index') }}" class='sidebar-link'>
                        <i class="bi bi-clipboard-data"></i>
                        <span>Data Treatment</span>
                    </a>
                </li>

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
