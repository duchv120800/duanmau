<main class="app-main"> <!--begin::App Content Header-->
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="card card-info card-outline mb-4"> <!--begin::Header-->
                <div class="card-header bg-info">
                    <div class="card-title">
                        <h3>Cập nhật sản phẩm</h3>
                    </div>
                </div> <!--end::Header--> <!--begin::Form-->
                <form class="needs-validation" action="" method="POST" enctype="multipart/form-data" novalidate> <!--begin::Body-->
                    <div class="card-body"> <!--begin::Row-->
                        <div class="row g-3"> <!--begin::Col-->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Tên sản phẩm</label>
                                <input type="text" value="<?= $sanpham['ten'] ?> " name="ten" placeholder="Nhập Tên sản phẩm" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Có vẻ tốt!</div>
                                <div class="invalid-feedback">
                                    Không được để trống trường này!
                                </div>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Số lượng</label>
                                <input type="number" value="<?= $sanpham['soluong'] ?>" name="soluong" placeholder="Nhập Số lượng" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Có vẻ tốt!</div>
                                <div class="invalid-feedback">
                                    Không được để trống trường này.
                                </div>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Hình ảnh</label>
                                <input type="file" name="hinhanh" placeholder="Chọn hình ảnh" class=" form-control" id="validationCustom01">
                                <img src="<?= BASE_URL . 'uploads/' . $sanpham['hinhanh'] ?>" style="width:100px; height:100px objecfit=contain;" alt="Lỗi hiển thị">
                                <div class="valid-feedback">Có vẻ tốt!</div>
                                <div class="invalid-feedback">
                                    Không được để trống trường này!
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Hình ảnh mô tả</label>
                                <input type="file" name="hinhanhs[]" placeholder="Chọn hình ảnh" class=" form-control" multiple>
                                <?php foreach ($anhsanpham as $anh) : ?>
                                    <img src="<?= BASE_URL . 'uploads/' . $anh['tenanh'] ?>" style="width:100px; height:100px objecfit=contain;" alt="Lỗi hiển thị">
                                <?php endforeach; ?>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Giá</label>
                                <input type="number" value="<?= $sanpham['gia'] ?>" name="gia" placeholder="Nhập giá" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Có vẻ tốt!</div>
                                <div class="invalid-feedback">
                                    Không được để trống trường này!
                                </div>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Giá khuyến mại</label>
                                <input type="number" value="<?= $sanpham['giakhuyenmai'] ?>" name="giakhuyenmai" placeholder="Nhập Giá khuyến mại" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Có vẻ tốt!</div>
                                <div class="invalid-feedback">
                                    Không được để trống trường này!
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Lượt xem</label>
                                <input type="number" value="<?= $sanpham['luotxem'] ?>" name="luotxem" placeholder="Nhập lượt xem" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Có vẻ tốt!</div>
                                <div class="invalid-feedback">
                                    Không được để trống trường này!
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Thương hiệu</label>
                                <input type="text" value="<?= $sanpham['thuonghieu'] ?>" name="thuonghieu" placeholder="Nhập Thương hiệu" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Có vẻ tốt!</div>
                                <div class="invalid-feedback">
                                    Không được để trống trường này.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Xuất xứ</label>
                                <input type="text" value="<?= $sanpham['xuatxu'] ?>" name="xuatxu" placeholder="Nhập Xuất xứ" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Có vẻ tốt!</div>
                                <div class="invalid-feedback">
                                    Không được để trống trường này.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Phong cách</label>
                                <input type="text" value="<?= $sanpham['phongcach'] ?>" name="phongcach" placeholder="Nhập Phong cách" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Có vẻ tốt!</div>
                                <div class="invalid-feedback">
                                    Không được để trống trường này.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Độ lưu hương</label>
                                <input type="text" value="<?= $sanpham['doluuhuong'] ?>" name="doluuhuong" placeholder="Nhập Độ lưu hương" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Có vẻ tốt!</div>
                                <div class="invalid-feedback">
                                    Không được để trống trường này.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Nồng độ</label>
                                <input type="text" value="<?= $sanpham['nongdo'] ?>" name="nongdo" placeholder="Nhập Nồng độ" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Có vẻ tốt!</div>
                                <div class="invalid-feedback">
                                    Không được để trống trường này.
                                </div>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-md-6">
                                <label for="validationCustom04" class="form-label">Danh mục</label>
                                <select class="form-select" name="id_danhmuc" id="validationCustom04" required>
                                    <?php foreach ($listDanhmuc as $danhmuc) : ?>
                                        <option value="<?= $danhmuc['id'] ?>" <?= ($sanpham['id_danhmuc'] === $danhmuc['id']) ? 'selected' : ''; ?>>
                                            <?= $danhmuc['ten'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="invalid-feedback">
                                    Không được để trống trường này!
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Mô tả</label>
                                <textarea name="mota" class="form-control" id="validationCustom01"><?= $sanpham['mota'] ?></textarea>
                                <div class="invalid-feedback">
                                    Không được để trống trường này!
                                </div>
                            </div> <!--end::Col--> <!--begin::Col-->
                        </div> <!--end::Row-->
                    </div> <!--end::Body--> <!--begin::Footer-->
                    <div class="card-footer">
                        <a href="<?= BASE_URL_ADMIN . '?act=ds_sp' ?>" class="btn btn-info">Danh sách sản phẩm</a>
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