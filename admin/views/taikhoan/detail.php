<main class="app-main"> <!--begin::App Content Header-->
    <?php require_once PATH_VIEW_ADMIN . 'layout/component/main_top.php'; ?>
    <div class="app-content"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
        <div class="col-12 col-md-12 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header bg-info border-bottom-0">
                  Chi tiết tài khoản
                </div>
                <div class="card-body pl-4">
                  <div class="row ml-4">
                    <div class="col-7">
                      <h2><b><?=$user['hoten']?></b></h2>
                      <h5><b>Vai trò : </b><?=$user['vaitro'] ? '<strong class="badge text-bg-success">Quản trị</strong>' : '<strong class="badge text-bg-warning">Khách hàng</strong>'?></h5>
                      <hr>
                      <ul class="ml-4 mb-0 fa-ul">
                        <li><span class="fa-li"><i class="fas fa-lg fa-solid fa-user"></i></span><h5> Tên đăng nhập : <strong style="color:#17a2b8"><?=$user['tendangnhap']?></strong></h5></li>
                        <li><span class="fa-li"><i class="fas fa-lg fa-key"></i></span><h5> Mật khẩu : <strong style="color:#17a2b8">*********</strong></h5></li>
                        <li><span class="fa-li"><i class="fas fa-lg fa-solid fa-envelope"></i></span><h5> Email : <strong style="color:#17a2b8"><?=$user['email']?></strong></h5></li>
                        <li><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span><h5> Điện thoại # : <strong style="color:#17a2b8"><?=$user['sodienthoai']?></strong></h5></li>
                        <li><span class="fa-li"><i class="fas fa-lg fa-building"></i></span><h5> Địa chỉ : <strong style="color:#17a2b8"><?=$user['diachi']?></strong></h5></li>
                        <li><span class="fa-li"><i class="fas fa-lg fa-signature"></i></span><h5> Họ tên : <strong style="color:#17a2b8"><?=$user['hoten']?></strong></h5></li>
                        <li><span class="fa-li"><i class="fas fa-lg fa-venus-mars"></i></span><h5> Giới tính : <strong style="color:#17a2b8"><?=$user['gioitinh']?'Nam':'Nữ'?></strong></h5></li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="<?= BASE_URL.'uploads/'.$user['anhdaidien']?>" alt="user-avatar" class="img-circle img-fluid" style="width:250px">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                </div>
              </div>
            </div>
            <div class="ml-2">
                <a href="<?= BASE_URL_ADMIN . '?act=ds_tk' ?>" class="btn btn-info">Danh sách tài khoản</a>
            </div>
        </div> <!--end::Container-->
    </div> <!--end::App Content-->
</main> <!--end::App Main--> <!--begin::Footer-->