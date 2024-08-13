<main class="app-main"> <!--begin::App Content Header-->
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="card card-info card-outline mb-4"> <!--begin::Header-->
                <div class="card-header bg-info">
                    <div class="card-title">
                        <h3>Thêm mới sản phẩm</h3>
                    </div>
                </div> <!--end::Header--> <!--begin::Form-->
                <form class="needs-validation" action="" method="POST" enctype="multipart/form-data" novalidate> <!--begin::Body-->
                    <div class="card-body"> <!--begin::Row-->
                        <div class="row g-3"> <!--begin::Col-->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Tên sản phẩm</label>
                                <input type="text" name="ten" placeholder="Nhập Tên sản phẩm" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Có vẻ tốt!</div>
                                <div class="invalid-feedback">
                                    Không được để trống trường này.
                                </div>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-md-6">
                                <label for="validationCustom04" class="form-label">Danh mục</label>
                                <select class="form-select" name="id_danhmuc" id="validationCustom04" required>
                                    <?php foreach ($listDanhmuc as $danhmuc) : ?>
                                        <option value="<?= $danhmuc['id'] ?>"><?= $danhmuc['ten'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="invalid-feedback">
                                    Không được để trống trường này.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Hình ảnh</label>
                                <input type="file" name="hinhanh" placeholder="Chọn hình ảnh" class=" form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Có vẻ tốt!</div>
                                <div class="invalid-feedback">
                                    Không được để trống trường này.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Hình ảnh mô tả</label>
                                <input type="file" name="hinhanhs[]" placeholder="Chọn hình ảnh" class="form-control" multiple>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">% sale</label>
                                <input type="number" name="sale" placeholder="Nhập số % sale" class="form-control" id="validationCustom01">
                                <div class="valid-feedback">Có vẻ tốt!</div>
                                <div class="invalid-feedback">
                                    Không được để trống trường này.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Giá</label>
                                <input type="number" name="gia" placeholder="Nhập giá" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Có vẻ tốt!</div>
                                <div class="invalid-feedback">
                                    Không được để trống trường này.
                                </div>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Giá khuyến mại</label>
                                <input type="number" name="giakhuyenmai" placeholder="Nhập Giá khuyến mại" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Có vẻ tốt!</div>
                                <div class="invalid-feedback">
                                    Không được để trống trường này.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Số lượng</label>
                                <input type="number" name="soluong" placeholder="Nhập Số lượng" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Có vẻ tốt!</div>
                                <div class="invalid-feedback">
                                    Không được để trống trường này.
                                </div>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Lượt xem</label>
                                <input type="number" name="luotxem" placeholder="Nhập lượt xem" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Có vẻ tốt!</div>
                                <div class="invalid-feedback">
                                    Không được để trống trường này.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Thương hiệu</label>
                                <input type="text" name="thuonghieu" placeholder="Nhập Thương hiệu" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Có vẻ tốt!</div>
                                <div class="invalid-feedback">
                                    Không được để trống trường này.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Xuất xứ</label>
                                <input type="text" name="xuatxu" placeholder="Nhập Xuất xứ" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Có vẻ tốt!</div>
                                <div class="invalid-feedback">
                                    Không được để trống trường này.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Phong cách</label>
                                <input type="text" name="phongcach" placeholder="Nhập Phong cách" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Có vẻ tốt!</div>
                                <div class="invalid-feedback">
                                    Không được để trống trường này.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Độ lưu hương</label>
                                <input type="text" name="doluuhuong" placeholder="Nhập Độ lưu hương" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Có vẻ tốt!</div>
                                <div class="invalid-feedback">
                                    Không được để trống trường này.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Nồng độ</label>
                                <input type="text" name="nongdo" placeholder="Nhập Nồng độ" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">Có vẻ tốt!</div>
                                <div class="invalid-feedback">
                                    Không được để trống trường này.
                                </div>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Mô tả</label>
                                <textarea name="mota" class="form-control" id="validationCustom01"></textarea>
                                <div class="invalid-feedback">
                                    Không được để trống trường này.
                                </div>
                            </div> <!--end::Col--> <!--begin::Col-->
                        </div> <!--end::Row-->
                    </div> <!--end::Body--> <!--begin::Footer-->
                    <div class="card-footer">
                        <a href="<?= BASE_URL_ADMIN . '?act=ds_sp' ?>" class="btn btn-info">Danh sách sản phẩm</a>
                        <input class="btn btn-success" type="submit" name="themmoi" value="Thêm mới">
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