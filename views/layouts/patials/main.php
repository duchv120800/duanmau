<!-- slider section start -->
<?php
require_once PATH_VIEW . 'layouts/components/slider.php';
?>
<!-- slider section end -->
<!-- arival two section start -->
<section class="riding-area arival-two riding-one section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-6 col-text-center">
                <div class="section-title text-center">
                    <h2>Hàng <span>Mới về</span></h2>
                    <div class="shape">
                        <img src="<?= BASE_URL ?>client/template/rideo/rideo/img/icon/t-shape.png" width="16" height="16" alt="Title Shape" />
                    </div>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a
                        page when looking at its layout.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row text-center">
            <div class="four-item single-products">
                <?php foreach ($sanphammoihomes as $sanphammoihome) : ?>
                    <div class="product-item-wrap">
                        <div class="product-item">
                            <div class="pro-img">
                                <a href="<?= BASE_URL ?>?act=sp_detail&id_sp=<?= $sanphammoihome['id'] ?>">
                                    <img src="<?= BASE_URL ?>uploads/<?= $sanphammoihome['hinhanh'] ?>" width="396" height="297" alt="Product" />
                                </a>
                            </div>
                            <div class="actions-btn">
                                <ul class="clearfix">
                                    <li>
                                        <a href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view"><i class="fa fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="riding-title clearfix">
                                <div class="product-title">
                                    <a href="<?= BASE_URL ?>?act=sp_detail&id_sp=<?= $sanphammoihome['id'] ?>">
                                        <h3 class="title"><?= $sanphammoihome['ten'] ?></h3>
                                    </a>
                                    <p>Giá: <span><?= number_format($sanphammoihome['giakhuyenmai'], 0, ',', '.') ?>đ </span><del><?= number_format($sanphammoihome['gia'], 0, ',', '.') ?>đ</del></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- arival two section end -->
<!-- up sell section start -->
<section class="discount-area up-sell-two">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="discount-left">
                    <h4>Mountain DCJ bike 5003</h4>
                    <h2>Pormotional <strong>Sale Up 20%</strong></h2>
                    <p>SRAM has always been an engine of innovation in cycling, and the new eTap wireless drivetrain
                        platform is that engine revving to the redline.</p>
                    <div class="count-text clearfix">
                        <ul id="countdown-1">
                            <li>
                                <span class="days timenumbers">00</span>
                                <p class="timeRefDays timedescription">days</p>
                            </li>
                            <li>
                                <span class="hours timenumbers">00</span>
                                <p class="timeRefHours timedescription">hrs</p>
                            </li>
                            <li>
                                <span class="minutes timenumbers">00</span>
                                <p class="timeRefMinutes timedescription">mins</p>
                            </li>
                            <li>
                                <span class="seconds timenumbers">00</span>
                                <p class="timeRefSeconds timedescription">secs</p>
                            </li>
                        </ul>
                    </div>
                    <a class="shop-btn" href="shop.html">view more</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="discount-right">
                    <img src="<?= BASE_URL ?>client/template/rideo/rideo/img/products/6.jpg" width="555" height="426" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- up sell section end -->
<!-- popular-product section start -->
<section class="best-sell-area popular-product section-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-6 col-text-center">
                <div class="section-title text-center">
                    <h2>Sản phẩm <span>phổ biến</span></h2>
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
                        <?php foreach ($sanphamphobienhomes as $sanphamphobienhome) : ?>
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="pro-img">
                                        <a href="<?= BASE_URL ?>?act=sp_detail&id_sp=<?= $sanphamphobienhome['id'] ?>"><img src="<?= BASE_URL ?>uploads/<?= $sanphamphobienhome['hinhanh'] ?>" width="318" height="239" alt="Product" /></a>
                                    </div>
                                    <div class="actions-btn">
                                        <ul class="clearfix">
                                            <li>
                                                <a href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view"><i class="fa fa-eye"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="riding-title clearfix">
                                        <div class="product-title">
                                            <p class="title"><a href="<?= BASE_URL ?>?act=sp_detail&id_sp=<?= $sanphamphobienhome['id'] ?>"><?= $sanphamphobienhome['ten'] ?></a></p>
                                            <p>Giá: <span><?= number_format($sanphamphobienhome['giakhuyenmai'], 0, ',', '.') ?>đ </span><del><?= number_format($sanphamphobienhome['gia'], 0, ',', '.') ?>đ</del></p>
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