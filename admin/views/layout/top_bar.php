<div class="container-fluid"> <!--begin::Start Navbar Links-->
    <ul class="navbar-nav ms-auto"> <!--begin::Navbar Search-->
        <li class="nav-item"> <a class="nav-link" href="#" data-lte-toggle="fullscreen"> <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i> <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none;"></i> </a> </li> <!--end::Fullscreen Toggle--> <!--begin::User Menu Dropdown-->
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> <img src="<?= BASE_URL.'uploads/'.$_SESSION['anhdaidien']; ?>" style="object-fit: contain;" class="user-image rounded-circle shadow" alt="User Image">
                <span class="d-none d-md-inline"><?= $_SESSION['tendangnhap'] ?></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <!--begin::User Image-->
                <li class="user-header text-bg-primary"> <img src="<?= BASE_URL.'uploads/'.$_SESSION['anhdaidien']; ?>" class="rounded-circle shadow" alt="User Image" style="object-fit: contain;">
                    <h4>
                        <?= $_SESSION['tendangnhap'] ?> - Quản trị
                    </h4>
                </li> <!--end::User Image--> <!--begin::Menu Body-->

                <li class="user-footer">
                    <a href="<?= BASE_URL_ADMIN . '?act=detail_tk&id=' . $_SESSION['id'] ?>" class="btn btn-info">Profile</a>
                    <a href="<?= BASE_URL_ADMIN . '?act=logout' ?>" class="btn btn-danger flat float-end">Logout</a>
                </li> <!--end::Menu Footer-->
            </ul>
        </li> <!--end::User Menu Dropdown-->
    </ul> <!--end::End Navbar Links-->
</div> <!--end::Container-->