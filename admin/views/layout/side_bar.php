<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
    <div class="sidebar-brand"> <!--begin::Brand Link-->
        <a href="<?= BASE_URL_ADMIN ?>" class="brand-link"> <!--begin::Brand Image-->
            <img src="<?= BASE_URL_ADMIN ?>assets/admin/dist/assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text-->
            <span class="brand-text fw-light">AdminDAH</span><!--end::Brand Text-->
        </a> <!--end::Brand Link-->
    </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2"> <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= BASE_URL_ADMIN ?>" class="nav-link <?= ($view == 'dashboard') ? 'active' : ''; ?>"> <i class="nav-icon bi bi-speedometer"></i>
                                <p>TRANG CHỦ</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= BASE_URL_ADMIN . '?act=ds_tk' ?>" class="nav-link <?=($view == 'taikhoan/list') ? 'active' : ''; ?>"> <i class="nav-icon bi bi-circle"></i>
                                <p>TÀI KHOẢN</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= BASE_URL_ADMIN .'?act=ds_dm'?>" class="nav-link <?= ($view == 'danhmuc/list') ? 'active' : ''; ?>"> <i class="nav-icon bi bi-circle"></i>
                                <p>DANH MỤC</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= BASE_URL_ADMIN .'?act=ds_sp'?>" class="nav-link <?= ($view == 'sanpham/list') ? 'active' : ''; ?>"> <i class="nav-icon bi bi-circle"></i>
                                <p>SẢN PHẨM</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= BASE_URL_ADMIN .'?act=ds_dh'?>" class="nav-link <?= ($view == 'donhang/list') ? 'active' : ''; ?>"> <i class="nav-icon bi bi-circle"></i>
                                <p>ĐƠN HÀNG</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul> <!--end::Sidebar Menu-->
        </nav>
    </div> <!--end::Sidebar Wrapper-->
</aside> <!--end::Sidebar--> <!--begin::App Main-->