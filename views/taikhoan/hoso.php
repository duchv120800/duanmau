<div class="page-banner">
    <img src="<?= BASE_URL . 'uploads/banner.jpg' ?>" class="banner-child" alt="Page Banner" />
</div>
<!-- page banner area end -->
<div class="app-content mt-20 mb-20"> <!--begin::Container-->
    <div class="container-fluid"> <!--begin::Row-->
        <div class="col-12 col-md-12 d-flex align-items-stretch flex-column">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="card bg-light d-flex flex-fill">
                        <div class="card-header">
                        </div>
                        <div class="card-body pl-4">
                            <div class="row ml-4">
                                <div class="col-7">
                                    <h2><b><?= $user['hoten'] ?></b></h2>
                                    <h5><b>Vai trò : </b><?= $user['vaitro'] ? '<strong class="text-bg-success">Quản trị</strong>' : '<strong style="color:#17a2b8;">Khách hàng</strong>' ?></h5>
                                    <hr>
                                    <h5> Họ tên : <strong style="color:#17a2b8"><?= $user['hoten'] ?></strong></h5>
                                    <h5> Tên đăng nhập : <strong style="color:#17a2b8"><?= $user['tendangnhap'] ?></strong></h5>
                                    <h5> Mật khẩu : <strong style="color:#17a2b8">*********</strong></h5>
                                    <h5> Email : <strong style="color:#17a2b8"><?= $user['email'] ?></strong></h5>
                                    <h5> Điện thoại # : <strong style="color:#17a2b8"><?= $user['sodienthoai'] ?></strong></h5>
                                    <h5> Giới tính : <strong style="color:#17a2b8"><?= $user['gioitinh'] ? 'Nam' : 'Nữ' ?></strong></h5>
                                    <h5> Địa chỉ : <strong style="color:#17a2b8"><?= $user['diachi'] ?></strong></h5>
                                </div>
                                <div class="col-5 text-center">
                                    <img src="<?= BASE_URL . 'uploads/' . $user['anhdaidien'] ?>" alt="user-avatar" class="img-circle img-fluid" style="width:250px">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
        </div>

    </div> <!--end::Container-->
</div>