<main class="app-main"> <!--begin::App Content Header-->
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="card card-info card-outline mb-4"> <!--begin::Header-->
                <div class="card-header">
                    <div class="card-title">
                        <h3>Cập nhật đơn hàng</h3>
                    </div>
                </div> <!--end::Header--> <!--begin::Form-->
                <form class="needs-validation" action="" method="POST" novalidate> <!--begin::Body-->
                    <div class="card-body"> <!--begin::Row-->
                        <div class="row g-3"> <!--begin::Col-->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Mã đơn hàng</label>
                                <input type="text" value="<?= $donhang['madonhang'] ?>" name="madonhang" placeholder="Nhập mã đơn hàng" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Looks good!</div>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Địa chỉ nhận hàng</label>
                                <input type="text" value="<?= $donhang['diachinhanhang'] ?>" name="diachinhanhang" placeholder="Nhập Địa chỉ nhận hàng" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Looks good!</div>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Tên người nhận hàng</label>
                                <input type="text" value="<?= $donhang['tennguoinhan'] ?>" name="tennguoinhan" placeholder="Nhập tên người nhận hàng" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Looks good!</div>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Số điện thoại người nhận</label>
                                <input type="number" value="<?= $donhang['sodienthoainguoinhan'] ?>" name="sodienthoainguoinhan" placeholder="Nhập số điện thoại" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Looks good!</div>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Email người nhận</label>
                                <input type="email" value="<?= $donhang['emailnguoinhan'] ?>" name="emailnguoinhan" placeholder="Nhập Email người nhận" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Looks good!</div>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Ngày đặt hàng</label>
                                <input type="date" value="<?= $donhang['ngaydathang'] ?>" name="ngaydathang" placeholder="Nhập theo fomat yyyy/mm/dd" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Looks good!</div>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Ghi chú</label>
                                <input type="text" value="<?= $donhang['ghichu'] ?>" name="ghichu" placeholder="Nhập Ghi chú" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Looks good!</div>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Tổng tiền</label>
                                <input type="number" value="<?= $donhang['tongtien'] ?>" name="tongtien" placeholder="Nhập tổng số tiền" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Looks good!</div>
                            </div> <!--end::Col--> <!--begin::Col-->
                        </div> <!--end::Row-->
                        <div class="col-md-6">
                            <label for="validationCustom04" class="form-label">Tài khoản</label>
                            <select class="form-select" name="id_taikhoan" id="validationCustom04" required>
                                <?php foreach ($listTaikhoan as $taikhoan) : ?>
                                    <option value="<?= $taikhoan['id'] ?>" <?= ($donhang['id_taikhoan'] === $taikhoan['id']) ? 'selected' : ''; ?>><?= $taikhoan['tendangnhap'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom04" class="form-label">Sản phẩm</label>
                            <select class="form-select" name="id_sanpham" id="validationCustom04" required>
                                <?php foreach ($listSanpham as $sanpham) : ?>
                                    <option value="<?= $sanpham['id'] ?>" <?= ($donhang['id_sanpham'] === $sanpham['id']) ? 'selected' : ''; ?>><?= $sanpham['ten'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom04" class="form-label">Trạng thái</label>
                            <select class="form-select" name="id_trangthai" id="validationCustom04" required>
                                <?php foreach ($listTrangthai as $trangthai) : ?>
                                    <option value="<?= $trangthai['id'] ?>" <?= ($donhang['id_trangthai'] === $trangthai['id']) ? 'selected' : ''; ?>><?= $trangthai['tentrangthai'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                    </div> <!--end::Body--> <!--begin::Footer-->
                    <div class="card-footer">
                        <a href="<?= BASE_URL_ADMIN . '?act=ds_tk' ?>" class="btn btn-info">Danh sách đơn hàng</a>
                        <input class="btn btn-success" type="submit" name="themmoi" value="Cập nhật">
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