<main class="app-main"> <!--begin::App Content Header-->
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="card card-info card-outline mb-4"> <!--begin::Header-->
                <div class="card-header">
                    <div class="card-title">Cập nhật tài khoản</div>
                </div> <!--end::Header--> <!--begin::Form-->
                <form class="needs-validation" action="" method="POST" novalidate> <!--begin::Body-->
                    <div class="card-body"> <!--begin::Row-->
                        <div class="row g-3"> <!--begin::Col-->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Tên đăng nhập</label>
                                <input type="text" name="tendangnhap" value="<?= $user['tendangnhap']?>" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Looks good!</div>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Mật khẩu</label>
                                <input type="password" name="matkhau" value="<?= $user['matkhau']?>" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Looks good!</div>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Email</label>
                                <input type="email" name="email" value="<?= $user['email']?>" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Looks good!</div>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Số điện thoại</label>
                                <input type="text" name="sodienthoai" value="<?= $user['sodienthoai']?>" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Looks good!</div>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Họ tên</label>
                                <input type="text" name="hoten" value="<?= $user['hoten']?>" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Looks good!</div>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Địa chỉ</label>
                                <input type="text" name="diachi" value="<?= $user['diachi']?>" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Looks good!</div>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-md-6">
                                <label for="validationCustom04" class="form-label">Giới tính</label>
                                <select class="form-select" name="gioitinh" id="validationCustom04" required>
                                    <option value="1" <?= $user['gioitinh'] ? 'selected' : '';?>>Nam</option>
                                    <option value="0" <?= $user['gioitinh'] ? '' : 'selected';?>>Nữ</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Vai trò</label>
                                <input type="text" value="Khách hàng" class="form-control" id="validationCustom01" disabled>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div> <!--end::Col--> <!--begin::Col-->
                        </div> <!--end::Row-->
                    </div> <!--end::Body--> <!--begin::Footer-->
                    <div class="card-footer">
                        <a href="<?= BASE_URL_ADMIN . '?act=ds_tk' ?>" class="btn btn-info">Danh sách tài khoản</a>
                        <input class="btn btn-success" type="submit" name="update" value="Cập nhật">
                    </div> <!--end::Footer-->
                </form> <!--end::Form--> <!--begin::JavaScript-->
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
                </script> <!--end::JavaScript-->
            </div> <!--end::Form Validation-->
        </div><!--end::Container-->
    </div> <!--end::App Content Header--> <!--begin::App Content-->

</main> <!--end::App Main--> <!--begin::Footer-->