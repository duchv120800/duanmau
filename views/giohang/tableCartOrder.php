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
							<thead>
								<tr>
									<th>Ảnh sản phẩm</th>
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
												<p><a href="<?= BASE_URL ?>?act=sp_detail&id_sp=<?= $sanpham['id'] ?>"><?= $sanpham['ten'] ?></a></p>
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
										<td><i class="fa fa-trash" title="Remove this product"></i></td>
									</tr>

								<?php
									$tongTienHang += ((int)$sanpham['giakhuyenmai'] * (int)$soluong);
								endforeach;
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="estimate-text">
						<h3>Estimate Shipping And Tax</h3>
						<p>Enter your destination to get shipping & tax</p>
						<form action="#">
							<div class="single-select">
								<label>Country *</label>
								<div class="custom-select">
									<select class="form-control">
										<option>Options</option>
										<option>Aruba</option>
										<option>Australia </option>
										<option>Bahrain</option>
										<option>Bangladesh</option>
										<option>Chile</option>
									</select>
								</div>
							</div>
							<div class="single-select">
								<label>State/Province *</label>
								<div class="custom-select">
									<select class="form-control">
										<option>Options</option>
										<option>Kerala</option>
										<option>Madhya</option>
										<option>Manipur</option>
										<option>Dhaka</option>
										<option>Chili</option>
									</select>
								</div>
							</div>
							<div class="single-select">
								<label>Zip/Postal Code</label>
								<div class="input-text">
									<input type="text" name="zip" />
								</div>
								<div class="submit-text quotes">
									<input type="submit" name="submit" value="Get A Quote">
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-4">
					<div class="estimate-text coupon">
						<h3>Discount Code</h3>
						<p>Enter your coupon code if you have one</p>
						<form action="#">
							<div class="input-text">
								<input type="text" name="coupon" />
							</div>
							<div class="submit-text">
								<input type="submit" name="submit" value="Apply Coupon">
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-4">
					<div class="estimate-text responsive">
						<div class="subtotal clearfix">
							<p>Phí vận chuyển: <span class="floatright">15.000đ</span></p>
							<p>Tổng tiền thanh toán: <span class="floatright"><?= number_format($tongTienHang + 15000, 0, ',', '.') ?>đ</span></p>
						</div>
						<div class="default-btn text-right">
							<a class="btn-style" href="checkout.html">PROCCED TO CHECKOUT</a>
						</div>
						<p><strong>Checkout with multiples address</strong></p>
					</div>
				</div>
			</div>
<?php
}
?>