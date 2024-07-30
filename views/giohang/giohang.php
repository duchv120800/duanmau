<!-- page banner area start -->
<div class="page-banner">
	<img src="<?= BASE_URL ?>client/template/rideo/rideo/img/slider/bg1.jpg" width="1903" height="297" alt="Page Banner" />
</div>

<!-- page banner area end -->
<!-- cart page content section start -->
<?php
if (empty($listSanphamGiohang)) {
	echo "<h2 style='margin:20px; text-align:center;'>Chưa có sản phẩm nào trong giỏ hàng</h2>";
} else {
?>
	<section class="cart-page section-padding">
		<div id="cartOrder" class="container">
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
										<td><i onclick="xoaSanphamGiohang(<?= $sanpham['id'] ?>)" class="fa fa-trash" title="Remove this product"></i></td>
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
				<h3>Địa chỉ giao hàng</h3>
				<div class="col-md-4">
					<div class="estimate-text">
						<form action="#">
							<div class="single-select">
								<label>Quốc gia *</label>
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
								<label>Tỉnh/Thành Phố *</label>
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
								<label>Huyện *</label>
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
					<div class="estimate-text">
						<!-- <form action="#"> -->
							<div class="single-select">
							<label>Số nhà *</label>
								<div class="input-text">
									<input type="text" name="zip" />
								</div>
							</div>
							<div class="single-select">
							<label>Số nhà *</label>
								<div class="input-text">
									<input type="text" name="zip" />
								</div>
							</div>
							<div class="single-select">
								<label>Số nhà *</label>
								<div class="input-text">
									<input type="text" name="zip" />
								</div>
								<div class="submit-text quotes">
									<input type="submit" name="submit" value="Get A Quote">
								</div>
							</div>
						<!-- </form> -->
					</div>
				</div>
				<div class="col-md-4">
					<div class="estimate-text responsive">
						<div class="subtotal clearfix">
							<p>Phí vận chuyển: <span class="floatright">15.000đ</span></p>
							<p>Tổng tiền thanh toán: <span class="floatright"><?= number_format($tongTienHang + 15000, 0, ',', '.') ?>đ</span></p>
						</div>
						<div class="default-btn text-right">
							<a class="btn-style" href="checkout.html">TIẾN HÀNG THANH TOÁN</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- cart page content section end -->
<?php
}
?>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script>
	function capNhatSoLuong(id, index) {
		// Lay gia tri input #soluong
		let soluong = $('#soluong_' + id).val();
		if (soluong <= 0) {
			soluong = 1;
		}

		// Gui yeu cau cap nhat so luong
		$.ajax({
			type: 'POST',
			url: '<?= BASE_URL ?>views/giohang/capnhatsoluong.php',
			data: {
				id: id,
				soluong: soluong
			},
			success: function(response) {
				$.post('<?= BASE_URL ?>views/giohang/tableCartOrder.php', function(data) {
					$("#cartOrder").html(data);
				});
			},
			error: function(error) {
				console.log(error);
			}
		});
	}

	function xoaSanphamGiohang(idSanpham) {
		if (confirm('Bạn có chắc chắn xóa sản phẩm khỏi giỏ hàng?')) {
			$.ajax({
				type: 'POST',
				url: '<?= BASE_URL ?>views/giohang/xoaSanphamGiohang.php',
				data: {
					id: idSanpham
				},
				success: function(response) {
					$.post('<?= BASE_URL ?>views/giohang/tableCartOrder.php', function(data) {
						$("#cartOrder").html(data);
					});
				},
				error: function(error) {
					console.log(error);
				}
			});
		}
	}
</script>