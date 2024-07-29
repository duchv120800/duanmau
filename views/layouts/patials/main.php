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
                                        <button class="addToCard" data-id="<?= $sanphammoihome['id'] ?>" onclick="addGiohang(<?= $sanphammoihome['id'] ?>, '<?= $sanphammoihome['ten'] ?>', <?= $sanphammoihome['giakhuyenmai'] ?>)">Thêm vào giỏ hàng</button>
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
                    <h4><?= $sanphamsales[0]['ten'] ?></h4>
                    <h2><strong>Sale Up To <?= $sanphamsales[0]['sale'] ?>%</strong></h2>
                    <p><?= substr($sanphamsales[0]['mota'], 0, 300) ?>...</p>
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
                    <img src="<?= BASE_URL ?>uploads/<?= $sanphamsales[0]['hinhanh'] ?>" width="555" height="426" alt="" />
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
                            <div class="col-md-4 mb-20">
                                <div class="product-item">
                                    <div class="pro-img">
                                        <a href="<?= BASE_URL ?>?act=sp_detail&id_sp=<?= $sanphamphobienhome['id'] ?>"><img src="<?= BASE_URL ?>uploads/<?= $sanphamphobienhome['hinhanh'] ?>" width="318" height="239" alt="Product" /></a>
                                    </div>
                                    <div class="actions-btn">
                                        <ul class="clearfix">
                                            <li>
                                                <button class="addToCard" data-id="<?= $sanphamphobienhome['id'] ?>" onclick="addGiohang(<?= $sanphamphobienhome['id'] ?>, '<?= $sanphamphobienhome['ten'] ?>', <?= $sanphamphobienhome['giakhuyenmai'] ?>)">Thêm vào giỏ hàng</button>
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

<!-- start ajax -->
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script>
    let tongSanpham = document.getElementById('tongSanpham');

    function addGiohang(idSanpham, tenSanpham, giaSanpham) {
        $.ajax({
            type: "POST",
            url: "<?= BASE_URL ?>models/giohang.php",
            data: {
                id: idSanpham,
                ten: tenSanpham,
                gia: giaSanpham,
            },
            success: function(response) {
                tongSanpham.innerText = response;
                alert("Bạn đã thêm sản phẩm vào giỏ hàng thành công");
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
</script>