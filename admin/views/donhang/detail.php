<main class="app-main"> <!--begin::App Content Header-->
  <section class="content">
    <div class="card card-solid">
      <div class="card-header bg-info">
        <h5 class="mb-0">Chi tiết đơn hàng</h5>
      </div>
      <div class="card-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4">
              <!-- Thông tin người gửi -->
              <div class="invoice-info">
                <h3>Thông tin người đặt</h3>
                <address>
                  <strong>Họ tên:</strong>
                  <?= $donhang['hotennguoidat'] ?><br>
                  <strong>Địa Chỉ:</strong>
                  <?= $donhang['diachinguoidat'] ?><br>
                  <strong>Điện thoại:</strong>
                  <?= $donhang['sodienthoainguoidat'] ?><br>
                  <strong>Email:</strong>
                  <?= $donhang['emailnguoidat'] ?>
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
          <!-- Table row -->
          <div class="row">
            <div class="col-12 table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Tên sản phẩm</th>
                    <th>Ảnh sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Tổng tiền</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $tongtien = 0; ?>
                  <?php foreach ($sanphamdonhangs as $key => $sanpham) : ?>
                    <tr>
                      <td><?= $key + 1 ?></td>
                      <td><?= $sanpham['tensanpham'] ?></td>
                      <td>
                        <img src="<?= BASE_URL . 'uploads/' . $sanpham['anhsanpham'] ?>" alt="" style="width:50px;height:50px;object-fit:contain;">
                      </td>
                      <td><?= $sanpham['dongia'] ?></td>
                      <td><?= $sanpham['soluong'] ?></td>
                      <td><?= $sanpham['tongtien'] ?></td>
                    </tr>
                    <?php $tongtien += $sanpham['tongtien']; ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
          <!-- Thông tin thanh toán -->
          <div class="row">
            <!-- thông tin sản phẩm -->
            <div class="col-md-4">
              <div class="invoice-info">
                <h3>Thanh toán</h3>
                <div class="table-responsive">
                  <table class="table">
                    <tr>
                      <th style="width:50%">Tổng tiền:</th>
                      <td><?= number_format($tongtien, 0, ',', '.') ?>đ</td>
                    </tr>
                    <tr>
                      <th style="width:50%">Phí vận chuyển:</th>
                      <td>15.000đ</td>
                    </tr>
                    <tr>
                      <th style="width:50%">Tổng thanh toán:</th>
                      <td><?= number_format($tongtien + 15000, 0, ',', '.') ?>đ</td>
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