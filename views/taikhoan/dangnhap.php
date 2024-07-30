<div class="page-banner">
    <img src="<?= BASE_URL . 'uploads/banner.jpg' ?>" class="banner-child" alt="Page Banner" />
</div>
<!-- page banner area end -->
<!-- cart page content section start -->
<div class="row mt-20">
    <div class="col-4"></div>
    <div class="col-4">
    <div class="card card-outline card-primary mt-20 mb-20">
            <div class="card-header"> <a href="" class="link-dark text-center link-offset-2 link-opacity-100 link-opacity-50-hover">
                    <h3 class="mb-0"> Đăng nhập</h3>
                </a> </div>
            <div class="card-body login-card-body">
                <div id="alert" class="alert <?=$alert ? ' alert-success' : ' alert-danger';?>" <?= isset($notification) && $notification !== "" ? "" : "hidden";?>>
                    <?php 
                        if(isset($notification) && ($notification != "")) {
                            echo $notification;
                    ?>
                    <script>hidden_notification();</script>
                    <?php
                        }
                    ?>
                </div>
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="tendangnhap" class="form-control" placeholder="Nhập tên đăng nhập">
                        <div class="input-group-text">
                            <span class="bi bi-envelope"></span>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="matkhau" class="form-control" placeholder="Nhập mật khẩu">
                        <div class="input-group-text"> <span class="bi bi-lock-fill"></span> </div>
                    </div> <!--begin::Row-->
                    <div class="row">
                        <div class="col-5">
                            <div class="d-grid gap-2"> <button type="submit" name="dangnhap" class="btn btn-primary">Đăng nhập</button> </div>
                        </div>
                    </div> <!--end::Row-->
                </form>
                <p class="mb-1"> <a href="">Quên mật khẩu</a> </p>
                <p class="mb-0"> <a href="<?=BASE_URL.'?act=dangky'?>" class="text-center">Đăng ký tài khoản</a> </p>
            </div> <!-- /.login-card-body -->
        </div>
    </div>
    <div class="col-4"></div>
</div>
<!-- cart page content section end -->