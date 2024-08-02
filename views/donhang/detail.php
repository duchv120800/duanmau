<!-- page banner area start -->
<div class="page-banner">
    <img src="<?= BASE_URL ?>client/template/rideo/rideo/img/slider/bg1.jpg" width="1903" height="297" alt="Page Banner" />
</div>
<!-- page banner area end -->
<!-- product details area start -->
<section class="product-details section-padding-top">
    <div class="container">
        <div id="alert" class="alert alert-success" <?= isset($notification) && $notification !== "" ? "" : "hidden"; ?> style="text-align: center">
            <?php
            if (isset($notification) && ($notification != "")) {
                echo $notification;
            ?>
                <script>
                    hidden_notification();
                </script>
            <?php
            }
            ?>
        </div>
        <!-- <div class="row"> -->
        <div style="padding: 10px;text-align:center;border-radius:5px; text-transform:uppercase" class="alert-<?php $id_trangthai = $donhangs[0]['id_trangthai'];
                                                                                                                if ($id_trangthai <= 4) {
                                                                                                                    echo 'warning';
                                                                                                                } else if ($id_trangthai === 5) {
                                                                                                                    echo 'info';
                                                                                                                } else if ($id_trangthai === 6) {
                                                                                                                    echo 'success';
                                                                                                                } else {
                                                                                                                    echo 'danger';
                                                                                                                } ?>">
            <h5><?= $donhangs[0]['tentrangthai'] ?></h5>
        </div>
        <hr>
        <div>
            <p># Mã đơn hàng: <b><?= $donhangs[0]['madonhang'] ?></b></p>
            <h4><i class="bi bi-file-person-fill"></i> <?= $donhangs[0]['tennguoinhan'] ?></h4>
            <p><i class="bi bi-telephone-fill"></i> <?= $donhangs[0]['sodienthoainguoinhan'] ?></p>
            <p><i class="bi bi-geo-alt-fill"></i> <?= $donhangs[0]['diachinhanhang'] ?></p>
        </div>
        <hr>
        <!-- </div> -->
        <?php
        $tongTienHang = 0;
        foreach ($donhangs as $donhang) :
            $tongTienHang += $donhang['tongtien'];
        ?>
            <div class="row">
                <div class="col-4">
                    <img style="width:150px;height:auto" src="<?= BASE_URL ?>uploads/<?= $donhang['hinhanh'] ?>" alt="">
                </div>
                <div class="col-8">
                    <h5><?= $donhang['ten'] ?></h5>
                    <p>Số lượng: <?= $donhang['soluong'] ?></p>
                    <h5><?= number_format((int)$donhang['tongtien'], 0, ',', '.') ?>đ</h5>
                </div>
            </div>
            <hr>
        <?php endforeach; ?>
        <h5 style="text-align: center;">Tổng tiền thanh toán : <?= number_format((int)$tongTienHang + 15000, 0, ',', '.') ?>đ</h5>
        <div class="text-center mt-20 mb-20">
            <a class="btn btn-info btn_donhang" href="<?= BASE_URL ?>?act=donhang&id_ttdh=0">Tất cả đơn hàng</a>
            <?php if ($id_trangthai <= 4) { ?>
                <a class="btn btn-danger btn_donhang" href="<?= BASE_URL ?>?act=huy_donhang&id_dh=<?= $donhang['id'] ?>">Hủy đơn hàng</a>
            <?php } ?>
        </div>
    </div>
</section>
<!-- product details area end -->