<nav class="sidebar me-5" id="sidebar">
    <div class="sidebar-header">
        <div class="d-flex align-items-center text-white" id="sidebar-header">
            <img src="{{ asset('images/logo.avif') }}" alt="Logo" class="me-2"
                style="width: 60px; height: 60px; object-fit: contain;">

            <h4 class="mb-0">
                SISTEM <span class="d-block">INFORMASI</span> <span class="d-block">KEARSIPAN</span>
            </h4>
        </div>

        <button class="sidebar-toggle" id="sidebarToggle" type="button">
            <i class="fas fa-bars"></i>
        </button>
    </div>

    <ul class="sidebar-menu">
        <!-- Dashboard -->
        <li>
            <a href="/  " class="menu-item active" data-tooltip="Dashboard">
                <i class="fas fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <!-- Arsip TU dengan Submenu -->
        <li>
            <a href="#" class="menu-item dropdown-toggle" data-tooltip="Arsip TU"
                data-bs-target="#arsipTuSubmenu">
                <i class="fa-regular fa-folder-open"></i>
                <span>Arsip TU</span>
                <i class="fas fa-chevron-down dropdown-arrow"></i>
            </a>
            <ul class="submenu" id="arsipTuSubmenu">
                <li><a href="/arsip-tu/surat-masuk" class="submenu-item"><i class="fa-regular fa-folder"></i>Surat
                        Masuk</a></li>
                <li><a href="/arsip-tu/surat-keluar" class="submenu-item"><i class="fa-regular fa-folder"></i>Surat
                        Keluar</a></li>
                <li><a href="/arsip-tu/data-personal-kesehatan" class="submenu-item"><i
                            class="fa-regular fa-folder"></i>Data Personal
                        Kesehatan</a>
                </li>
                <li><a href="/arsip-tu/mou" class="submenu-item"><i class="fa-regular fa-folder"></i>MoU</a></li>
                <li><a href="/arsip-tu/latihan-fungsional-kesehatan" class="submenu-item"><i
                            class="fa-regular fa-folder"></i>Latihan Fungsional
                        <span class="d-block" style="margin-left: 45px">Kesehatan</span></a>
                </li>
            </ul>
        </li>

        <!-- Arsip Medis -->
        <li>
            <a href="#" class="menu-item dropdown-toggle" data-tooltip="Arsip Medis"
                data-bs-target="#arsipMedisSubmenu">
                <i class="fa-solid fa-folder"></i>
                <span>Arsip Medis</span>
                <i class="fas fa-chevron-down dropdown-arrow"></i>
            </a>
            <ul class="submenu" id="arsipMedisSubmenu">
                <li><a href="/arsip-medis/sertifikat" class="submenu-item"><i
                            class="fa-regular fa-folder"></i>Sertifikat</a></li>
                <li><a href="/arsip-medis/surat-hibah" class="submenu-item"><i class="fa-regular fa-folder"></i>Surat
                        Hibah</a></li>
                <li><a href="/arsip-medis/barang-masuk" class="submenu-item"><i class="fa-regular fa-folder"></i>Barang
                        Masuk</a></li>
                <li><a href="/arsip-medis/pengadaan-alat" class="submenu-item"><i
                            class="fa-regular fa-folder"></i>Pengadaan Alat</a></li>
                <li><a href="/arsip-medis/pembelian" class="submenu-item"><i
                            class="fa-regular fa-folder"></i>Pembelian</a></li>
            </ul>
        </li>

        <!-- Unggah Berkas -->
        <li>
            <a href="/unggah-berkas" class="menu-item" data-tooltip="Unggah Berkas">
                <i class="fas fa-cloud-upload-alt"></i>
                <span>Unggah Berkas</span>
            </a>
        </li>

        <!-- Referensi 5 Tahun -->
        <li>
            <a href="/referensi-5-tahun" class="menu-item" data-tooltip="Referensi 5 Tahun">
                <i class="fa-solid fa-clock"></i>
                <span>Referensi 5 Tahun</span>
            </a>
        </li>

        <!-- Detail Berkas -->
        <li>
            <a href="/detail-berkas" class="menu-item" data-tooltip="Detail Berkas">
                <i class="fas fa-file-alt"></i>
                <span>Detail Berkas</span>
            </a>
        </li>

        <!-- Pencarian -->
        <li>
            <a href="/pencarian" class="menu-item" data-tooltip="Pencarian">
                <i class="fa-solid fa-magnifying-glass"></i>
                <span>Pencarian</span>
            </a>
        </li>

        <!-- Pengaturan -->
        <li>
            <a href="" class="menu-item" data-tooltip="Pengaturan">
                <i class="fas fa-cog"></i>
                <span>Pengaturan</span>
            </a>
        </li>
    </ul>
</nav>

<!-- Overlay untuk mobile -->
<div class="sidebar-overlay" id="sidebarOverlay"></div>

<script>
    document.getElementById('sidebar-header')
        .addEventListener('click', () => window.location.href = '{{ url('/') }}');
</script>
