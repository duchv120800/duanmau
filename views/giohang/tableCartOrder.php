<?php
session_start();
include '../../commons/env.php';
include '../../commons/global.php';
include '../../commons/connect.php';
include '../../commons/cart.php';
include '../../commons/count.php';
include '../../commons/hidden_notification.php';
//require tất cả file trong controllers và models
require_file(PATH_CONTROLLER);
// require_file(PATH_MODEL);

if (!empty($_SESSION['giohang'])) {
	$giohang = $_SESSION['giohang'];
	$idSanpham = array_column($giohang, 'id');
	$listIdSanpham = implode(',', $idSanpham);
	$listSanphamGiohang = getAllSanphamGiohang($listIdSanpham);
?>
	<div class="row">
		<div class="col-12">
			<div class="table-responsive table-one margin-minus section-padding-bottom">
				<table class="spacing-table text-center">
					<thead style="background-color: #dcdcdc;">
						<tr>
							<th>Thông tin sản phẩm</th>
							<th>Tên</th>
							<th>Số lượng</th>
							<th>Tổng tiền</th>
							<th>Thao tác</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$tongTienHang = 0;
						foreach ($listSanphamGiohang as $key => $sanpham) :
							$soluong = 0;
							foreach ($_SESSION['giohang'] as $item) {
								if ($item['id'] == $sanpham['id']) {
									$soluong = $item['soluong'];
									break;
								}
							}
						?>
							<tr>
								<td class="td-img text-left">
									<a href="<?= BASE_URL ?>?act=sp_detail&id_sp=<?= $sanpham['id'] ?>">
										<img src="<?= BASE_URL ?>uploads/<?= $sanpham['hinhanh'] ?>" width="150" height="auto" alt="<?= $sanpham['ten'] ?>" />
									</a>
									<div class="items-dsc">
										<p style="font-size:x-large;"><a href="<?= BASE_URL ?>?act=sp_detail&id_sp=<?= $sanpham['id'] ?>"><?= $sanpham['ten'] ?></a></p>
									</div>
								</td>
								<td><?= number_format((int)$sanpham['giakhuyenmai'], 0, ',', '.') ?>đ</td>
								<td>
									<form action="#">
										<div class="plus-minus">
											<!-- <a class="dec qtybutton" onclick="capNhatSoLuong()">-</a> -->
											<input type="number" value="<?= $soluong ?>" id="soluong_<?= $sanpham['id'] ?>" oninput="capNhatSoLuong(<?= $sanpham['id'] ?>, <?= $key ?>)" class="plus-minus-box">
											<!-- <a class="inc qtybutton" onclick="capNhatSoLuong()">+</a> -->
										</div>
									</form>
								</td>
								<td><?= number_format((int)$sanpham['giakhuyenmai'] * (int)$soluong, 0, ',', '.') ?>đ</td>
								<td><i onclick="xoaSanphamGiohang(<?= $sanpham['id'] ?>)" class="fa fa-trash" title="Remove this product"></i></td>
							</tr>
						<?php
							$tongTienHang += ((int)$sanpham['giakhuyenmai'] * (int)$soluong);
						endforeach;
						?>
						<tr style="font-weight: bold;">
							<td></td>
							<td colspan="2">Tổng tiền hàng</td>
							<td colspan="2"><?= number_format($tongTienHang, 0, ',', '.') ?>đ</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<?php
	if (isset($_SESSION['taikhoan']['tendangnhap']) && $_SESSION['taikhoan']['vaitro'] === 0) {
	?>
		<form action="?act=thanhtoan" method="post">
			<div class="row">
				<h3>Địa chỉ giao hàng</h3>
				<div class="col-md-4">
					<div class="estimate-text">
						<form action="#">
							<label>Tên người nhận<span style="color:red;">*</span></label>
							<div class="input-text">
								<input type="text" name="tennguoinhan" />
							</div>
							<label>Số điện thoại người nhận<span style="color:red;">*</span></label>
							<div class="input-text">
								<input type="number" name="sodienthoainguoinhan" />
							</div>
							<label>Email người nhận<span style="color:red;">*</span></label>
							<div class="input-text">
								<input type="email" name="emailnguoinhan" />
							</div>
							<label>Ghi chú</label>
							<div>
								<textarea class="ghichu_dathang" name="ghichu" placeholder="" rows="3"></textarea>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-4">
					<div class="estimate-text">
						<label>Tỉnh/Thành phố<span style="color:red;">*</span></label>
						<div class="input-text">
							<input type="text" name="tinh/thanhpho" />
						</div>
						<label>Quận/Huyện<span style="color:red;">*</span></label>
						<div class="input-text">
							<input type="text" name="quan/huyen" />
						</div>
						<label>Xã/Phường<span style="color:red;">*</span></label>
						<div class="input-text">
							<input type="text" name="xa/phuong" />
						</div>
						<label>Tên đường/Số nhà<span style="color:red;">*</span></label>
						<div class="input-text">
							<input type="text" name="tenduong/sonha" />
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="estimate-text responsive">
						<div class="subtotal clearfix">
							<p>Phí vận chuyển: <span class="floatright">15.000đ</span></p>
							<p>Tổng tiền thanh toán: <span class="floatright"><?= number_format($tongTienHang + 15000, 0, ',', '.') ?>đ</span></p>
							<input type="hidden" name="tongtien" value="<?= $tongTienHang + 15000 ?>">
						</div>
						<div class="default-btn text-right">
							<input type="submit" name="thanhtoan" value="THANH TOÁN">
						</div>
					</div>
				</div>
			</div>
		</form>
	<?php
	} else {
		echo '<h4 style="color:#ff6600; text-align:center">Bạn cần đăng nhập để đặt hàng!</h4>';
	}
	?>
<?php
}
?>