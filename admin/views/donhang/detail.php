<main class="app-main"> <!--begin::App Content Header-->
  <section class="content">
    <div class="card card-solid">
      <div class="card-header bg-info"><h5 class="mb-0">Chi tiết đơn hàng</h5></div>
      <div class="card-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4">
              <!-- Thông tin người gửi -->
              <div class="invoice-info">
                <h3>Người gửi</h3>
                <address>
                  <strong>Họ tên:</strong>
                  <?= $donhang['hotennguoigui'] ?><br>
                  <strong>Địa Chỉ:</strong>
                  <?= $donhang['diachinguoigui'] ?><br>
                  <strong>Điện thoại:</strong>
                  <?= $donhang['sodienthoainguoigui'] ?><br>
                  <strong>Email:</strong>
                  <?= $donhang['emailnguoigui'] ?>
                </address>
              </div>
            </div>
            <div class="col-md-4">
              <!-- Thông tin người nhận -->
              <div class="invoice-info">
                <h3>Thông tin người nhận</h3>
                <address>
                  <strong>Họ tên:</strong>
                  <?= $donhang['tennguoinhan'] ?><br>
                  <strong>Địa chỉ:</strong>
                  <?= $donhang['diachinhanhang'] ?><br>
                  <strong>Điện thoại:</strong>
                  <?= $donhang['sodienthoainguoinhan'] ?><br>
                  <strong>Email:</strong>
                  <?= $donhang['emailnguoinhan'] ?><br>
                </address>
              </div>
            </div>
            <!-- Thông tin đơn hàng -->
            <div class="col-md-4">
              <div class="invoice-info">
                <h3>Thông tin đơn hàng</h3>
                <strong>Mã đơn hàng:</strong>
                <?= $donhang['madonhang'] ?><br>
                <strong>Ngày đặt hàng:</strong>
                <?= $donhang['ngaydathang'] ?><br>
                <strong>Trạng thái đơn hàng:</strong>
                <?= $donhang['tentrangthai'] ?><br>
                <strong>Hình thức thanh toán:</strong>
                <?= $donhang['hinhthucthanhtoan'] ?><br>
              </div>
            </div>
          </div>
          <hr>
          <!-- Thông tin thanh toán -->
          <div class="row">
            <!-- thông tin sản phẩm -->
            <div class="col-md-8">
              <div class="invoice-info">
                <h3>Thông tin sản phẩm</h3>
                <img src="<?= BASE_URL . 'uploads/' . $donhang['hinhanhsanpham'] ?>" alt="" style="width:100px;height:100px;object-fit:contain;"><br>
                <h5><?= $donhang['tensanpham'] ?></h5>
                <strong>Ghi chú:</strong>
                <?= $donhang['ghichu'] ?><br>
                <strong>Giá sản phẩm:</strong>
                <?= $donhang['giasanpham'] ?>đ<br>
              </div>
            </div>
            <div class="col-md-4">
              <div class="invoice-info">
                <h3>Thanh toán</h3>
                <div class="table-responsive">
                  <table class="table">
                    <tr>
                      <th style="width:50%">Giá sản phẩm:</th>
                      <td><?= $donhang['tongtien'] ?>đ</td>
                    </tr>
                    <tr>
                      <th style="width:50%">Phí vận chuyển:</th>
                      <td><?= $phivanchuyen = 15000; ?>đ</td>
                    </tr>
                    <tr>
                      <th style="width:50%">Tổng thanh toán:</th>
                      <td><?= $donhang['tongtien'] + $phivanchuyen ?>đ</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <!-- Nút quay lại danh sách đơn hàng -->
          <div class="row no-print">
            <div class="col-12">
              <br><a href="<?= BASE_URL_ADMIN . '?act=ds_dh' ?>" class="btn btn-info">Danh sách đơn hàng</a><br>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
</main>