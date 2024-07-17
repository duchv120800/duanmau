<main class="app-main"> <!--begin::App Content Header-->
    <?php require_once PATH_VIEW_ADMIN . 'layout/component/main_top.php'; ?>
    <section class="content">
        <!-- Default box -->
        <div class="card card-solid">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3 class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3>
                        <div class="col-12">
                            <img src="<?= BASE_URL . 'uploads/' . $sanpham['hinhanh'] ?>" class="product-image" alt="Product Image">
                        </div>
                        <div class="col-12 product-image-thumbs">
                            <div onclick="setupImageThumbnails()" class="product-image-thumb active"><img src="<?= BASE_URL . 'uploads/' . $sanpham['hinhanh'] ?>" alt="Product Image"></div>
                            <?php foreach ($anh_thumnail as $anh) : ?>
                                <div class="product-image-thumb"><img src="<?= BASE_URL . 'uploads/' . $anh['tenanh'] ?>" alt="Product Image"></div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <h3 class="my-3"><?= $sanpham['ten'] ?></h3>
                        <p> <?= substr($sanpham['mota'], 0, 150) ?>...</p>
                        <hr>
                        <h5> Số lượng : <em><?= $sanpham['soluong'] ? $sanpham['soluong'] : '<span class="badge text-bg-danger">Hết hàng</span>' ?></em></h5>
                        <hr>
                        <h5> Lượt xem : <em><?= $sanpham['luotxem'] ?></em></h5>
                        <hr>
                        <h5 class="mt-3">Giá sản phẩm :
                            <em><span style="text-decoration-line: line-through; color:red"><?= number_format($sanpham['gia'], 0, ',', '.')?>đ</span>
                                <?= number_format($sanpham['gia'], 0, ',', '.')?>đ</em>
                        </h5>

                        <hr>
                        <h5 class="mt-3">Danh mục : <em><?= $sanpham['ten_danhmuc'] ?></em></h5>
                        <hr>
                        <h5 class="mt-3">Thương hiệu : <em><?= $sanpham['thuonghieu'] ?></em></h5>
                        <hr>
                        <h5 class="mt-3">Xuất xứ : <em><?= $sanpham['xuatxu'] ?></em></h5>
                        <hr>
                        <h5 class="mt-3">Phong cách : <em><?= $sanpham['phongcach'] ?></em></h5>
                        <hr>
                        <h5 class="mt-3">Độ lưu hương : <em><?= $sanpham['doluuhuong'] ?></em></h5>
                        <hr>
                        <h5 class="mt-3">Nồng độ : <em><?= $sanpham['nongdo'] ?></em></h5>
                    </div>
                </div>
                <div class="row mt-4">
                    <nav class="w-100">
                        <div class="nav nav-tabs" id="product-tab" role="tablist">
                            <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Mô tả</a>
                        </div>
                    </nav>
                    <div class="tab-content p-3" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
                            <?= $sanpham['mota'] ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <div style="margin-left:25px;">
            <a href="<?= BASE_URL_ADMIN . '?act=ds_sp' ?>" class="btn btn-info">Danh sách sản phầm</a>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</main> <!--end::App Main--> <!--begin::Footer-->