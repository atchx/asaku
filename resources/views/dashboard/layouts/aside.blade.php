<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/dashboard" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="/img/sidikalang.png" alt="" width="30px">
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2 text-uppercase">ASAKU</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ Request::is('dashboard') ? 'active' : '' }}">
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Layanan</span>
        </li>
        <li class="menu-item {{ Request::is('dashboard/skkb') ? 'active' : '' }}">
            <a href="/dashboard/skkb" class="menu-link">
                <i class="menu-icon tf-icons bx bx-street-view"></i>
                <div data-i18n="SKKB">Surat Keterangan Kelakuan Baik ( SKKB )</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('dashboard/srkip') ? 'active' : '' }}">
            <a href="/dashboard/srkip" class="menu-link">
                <i class="menu-icon tf-icons bx bx-money"></i>
                <div data-i18n="SRKIP">Surat Rekomendasi Kartu Indonesia Pintar (KIP)</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('dashboard/skaw') ? 'active' : '' }}">
            <a href="/dashboard/skaw" class="menu-link">
                <i class="menu-icon tf-icons bx bx-ghost"></i>
                <div data-i18n="SKAW">Surat Keterangan Ahli Waris</div>
            </a>
        </li>
        <!-- Forms & Tables -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Komponen</span></li>
        <!-- Tables -->
        <li class="menu-item {{ Request::is('dashboard/product') ? 'active' : '' }}">
            <a href="/dashboard/product" class="menu-link">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="product">Produk UMKM</div>
            </a>
        </li>
        <!-- <li class="menu-item {{ Request::is('dashboard/pegawai') ? 'active' : '' }}">
            <a href="/dashboard/pegawai" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="pegawai">Pegawai Kelurahan</div>
            </a>
        </li> -->
    </ul>

</aside>