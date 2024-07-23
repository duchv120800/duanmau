<div class="page-banner">
    <img src="<?= BASE_URL . 'uploads/banner.jpg' ?>" class="banner-child" alt="Page Banner" />
</div>
<!-- page banner area end -->
<!-- cart page content section start -->
<div class="row mt-20">
    <div class="col-2"></div>
    <div class="col-8">
        <div class="card card-outline card-primary">
            <div class="card-header"> 
                <a href="" class="link-dark text-center link-offset-2 link-opacity-100 link-opacity-50-hover">
                    <h3 class="mb-0">Đăng ký tài khoản mới</h3>
                </a> 
            </div>
            <div class="card-body login-card-body">
                <form class="needs-validation" action="" method="POST" enctype="multipart/form-data" novalidate> <!--begin::Body-->
                    <div class="card-body"> <!--begin::Row-->
                        <div class="row g-3"> <!--begin::Col-->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Tên đăng nhập</label>
                                <input type="text" name="tendangnhap" placeholder="Nhập tên đăng nhập" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Có vẻ tốt!</div>
                                <div class="invalid-feedback">
                                    Tên đăng nhập không được để trống.
                                </div>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Mật khẩu</label>
                                <input type="password" name="matkhau" placeholder="Nhập mật khẩu" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Có vẻ tốt!</div>
                                <div class="invalid-feedback">
                                    Mật khẩu không được để trống.
                                </div>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Email</label>
                                <input type="email" name="email" placeholder="Nhập email" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Có vẻ tốt!</div>
                                <div class="invalid-feedback">
                                    Email không được để trống.
                                </div>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Số điện thoại</label>
                                <input type="text" name="sodienthoai" placeholder="Nhập số điện thoại" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Có vẻ tốt!</div>
                                <div class="invalid-feedback">
                                    Số điện thoại không được để trống.
                                </div>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Họ tên</label>
                                <input type="text" name="hoten" placeholder="Nhập họ tên" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Có vẻ tốt!</div>
                                <div class="invalid-feedback">
                                    Họ tên không được để trống.
                                </div>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Địa chỉ</label>
                                <input type="text" name="diachi" placeholder="Nhập địa chỉ" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Có vẻ tốt!</div>
                                <div class="invalid-feedback">
                                    Địa chỉ không được để trống.
                                </div>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-md-6">
                                <label for="validationCustom04" class="form-label">Giới tính</label>
                                <select class="form-select" name="gioitinh" id="validationCustom04" required>
                                    <option value="1" selected>Nam</option>
                                    <option value="0">Nữ</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Vai trò</label>
                                <input type="text" value="Khách hàng" class="form-control" id="validationCustom01" disabled>
                                <div class="invalid-feedback">
                                    Vai trò không được để trống.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom04" class="form-label">Ảnh đại diện</label>
                                <input type="file" name="anhdaidien" class="form-control" id="validationCustom01" required>
                                <div class="invalid-feedback">
                                    Ảnh đại diện không được để trống.
                                </div>
                            </div><!--end::Col--> <!--begin::Col-->
                        </div> <!--end::Row-->
                    </div> <!--end::Body--> <!--begin::Footer-->
                    <div class="card-footer text-center">
                        <input class="btn btn-success" type="submit" name="dangky" value="Đăng ký">
                        <input class="btn btn-info" type="reset" value="Nhập lại">
                    </div> <!--end::Footer-->
                </form> <!--end::Form--> <!--begin::JavaScript-->

            </div> <!-- /.login-card-body -->
        </div>
    </div>
    <div class="col-2"></div>
</div>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
        "use strict";

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms =
            document.querySelectorAll(".needs-validation");

        // Loop over them and prevent submission
        Array.from(forms).forEach((form) => {
            form.addEventListener(
                "submit",
                (event) => {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }

                    form.classList.add("was-validated");
                },
                false
            );
        });
    })();
</script>
<!-- cart page content section end -->