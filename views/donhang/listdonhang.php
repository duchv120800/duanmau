<!-- page banner area start -->
<div class="page-banner">
    <img src="<?= BASE_URL ?>client/template/rideo/rideo/img/slider/bg1.jpg" width="1903" height="297" alt="Page Banner" />
</div>

<!-- page banner area end -->
<!-- cart page content section start -->
<div style="text-align:center;" class="mt-20">
    <h3>Đơn hàng của bạn</h3>
    <a href="?act=donhang&id_ttdh=0" style="padding-right:10px;" class="<?= $_GET['id_ttdh'] == 0 ? 'active_tt' : '' ?>">Tất cả</a>
    <?php
    for ($i = count($trangthais) - 1; $i >= 0; $i--) {
    ?>
        <a href="?act=donhang&id_ttdh=<?= $trangthais[$i]['id'] ?>" class="ten_trang_thai_dh <?= $_GET['id_ttdh'] == $trangthais[$i]['id'] ? 'active_tt' : '' ?>">
            <?= $trangthais[$i]['tentrangthai'] ?>
        </a>
    <?php
    }
    ?>
</div>
<?php
if (empty($donhangs)) {
    echo "<h2 style='height:200px; text-align:center; color:#ff6600; padding:30px'>Chưa có đơn hàng nào!</h2>";
} else {
?>
    <section class="cart-page section-padding">
        <div id="cartOrder" class="container">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive table-one margin-minus section-padding-bottom">
                        <table class="spacing-table text-center">
                            <thead style="background-color: #dcdcdc;">
                                <tr>
                                    <th>Mã đơn hàng</th>
                                    <th>Trạng thái</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Hình ảnh</th>
                                    <th>Số lượng</th>
                                    <th>Tổng tiền</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $tongTienHang = 0;
                                foreach ($donhangs as $key => $donhang) :
                                ?>
                                    <tr>
                                        <td><?= $donhang['madonhang'] ?></td>
                                        <td>
                                            <span class="badge bg-<?php $trangthai = $donhang['id_trangthai'];
                                                                    if ($trangthai <= 4) {
                                                                        echo 'warning';
                                                                    } else if ($trangthai === 5) {
                                                                        echo 'info';
                                                                    } else if ($trangthai === 6) {
                                                                        echo 'success';
                                                                    } else {
                                                                        echo 'danger';
                                                                    } ?>"><?= $donhang['tentrangthai'] ?></span>
                                        </td>
                                        <td>
                                            <a href=" <?= BASE_URL ?>?act=sp_detail&id_sp=<?= $donhang['id_sanpham'] ?>"><?= $donhang['ten'] ?></a>
                                        </td>
                                        <td>
                                            <a href="<?= BASE_URL ?>?act=sp_detail&id_sp=<?= $donhang['id_sanpham'] ?>">
                                                <img src="<?= BASE_URL ?>uploads/<?= $donhang['hinhanh'] ?>" width="100" height="auto" alt="<?= $donhang['ten'] ?>" />
                                            </a>
                                        </td>
                                        <td><?= $donhang['soluong'] ?></td>
                                        <td><?= number_format((int)$donhang['tongtien'], 0, ',', '.') ?>đ</td>
                                        <td>
                                            <a href="<?= BASE_URL ?>?act=dh_detail&id_dh=<?= $donhang['id'] ?>"><i class="fa fa-eye"></i></a>
                                        </td>
                                    </tr>
                                <?php
                                    $tongTienHang += (int)$donhang['tongtien'];
                                endforeach;
                                ?>
                                <tr style="font-weight: bold;">
                                    <td></td>
                                    <td colspan="4">Tổng tiền hàng</td>
                                    <td colspan="2"><?= number_format($tongTienHang, 0, ',', '.') ?>đ</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cart page content section end -->
<?php
}
?>