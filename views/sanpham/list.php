<!-- page banner area start -->
<div class="page-banner">
    <img src="<?= BASE_URL ?>client/template/rideo/rideo/img/slider/bg1.jpg" width="1903" height="200" alt="Page Banner" />
</div>
<!-- page banner area end -->
<!-- popular-product section start -->
<section class="best-sell-area popular-product section-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-6 col-text-center">
                <div class="section-title text-center">
                    <h2>Tất cả <span>sản phẩm</span></h2>
                    <div class="shape">
                        <img src="<?= BASE_URL ?>client/template/rideo/rideo/img/icon/t-shape.png" width="16" height="16" alt="Title Shape" />
                    </div>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a
                        page when looking at its layout.</p>
                </div>
            </div>
        </div>
        <div class="text-center tab-content">
            <div class="tab-pane fade show active" id="bikes">
                <div class="single-products">
                    <div class="row">
                        <?php foreach ($listsanphams as $listsanpham) : ?>
                            <div class="col-md-4 mb-20">
                                <div class="product-item">
                                    <div class="pro-img">
                                        <a href="<?= BASE_URL ?>?act=sp_detail&id_sp=<?= $listsanpham['id'] ?>"><img src="<?= BASE_URL ?>uploads/<?= $listsanpham['hinhanh'] ?>" width="318" height="239" alt="Product" /></a>
                                    </div>
                                    <div class="actions-btn">
                                        <ul class="clearfix">
                                            <li>
                                                <button class="addToCard" data-id="<?= $listsanpham['id'] ?>" onclick="addGiohang(<?= $listsanpham['id'] ?>, '<?= $listsanpham['ten'] ?>', <?= $listsanpham['giakhuyenmai'] ?>)">
                                                    Thêm vào giỏ hàng
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="riding-title clearfix">
                                        <div class="product-title">
                                            <p class="title"><a href="<?= BASE_URL ?>?act=sp_detail&id_sp=<?= $listsanpham['id'] ?>"><?= $listsanpham['ten'] ?></a></p>
                                            <p>Giá: <span><?= number_format($listsanpham['giakhuyenmai'], 0, ',', '.') ?>đ </span><del><?= number_format($listsanpham['gia'], 0, ',', '.') ?>đ</del></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- popular-product section end -->