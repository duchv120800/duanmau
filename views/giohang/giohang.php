<!-- page banner area start -->
<div class="page-banner">
	<img src="<?= BASE_URL ?>client/template/rideo/rideo/img/slider/bg1.jpg" width="1903" height="297" alt="Page Banner" />
</div>

<!-- page banner area end -->
<!-- cart page content section start -->
<?php
if (empty($listSanphamGiohang)) {
	echo "<h2 style='margin:100px; text-align:center; color:#ff6600;'>Chưa có sản phẩm nào trong giỏ hàng!</h2>";
} else {
?>
	<section class="cart-page section-padding">
		<div id="cartOrder" class="container">
			<div id="alert" class="alert alert-<?= $alert ? ' success' : ' danger'; ?>" <?= isset($notification) && $notification !== "" ? "" : "hidden"; ?>>
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
													<input type="number" value="<?= $soluong ?>" id="soluong_<?= $sanpham['id'] ?>" oninput="capNhatSoLuong(<?= $sanpham['id'] ?>, <?= $key ?>)" class="plus-minus-box" style="border:1px solid #ddd">
												</div>
											</form>
										</td>
										<td><?= number_format((int)$sanpham['giakhuyenmai'] * (int)$soluong, 0, ',', '.') ?>đ</td>
										<td><i onclick="xoaSanphamGiohang(<?= $sanpham['id'] ?>)" class="fa fa-trash" title="Xóa sản phẩm"></i></td>
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
										<input type="text" name="tennguoinhan" required />
									</div>
									<label>Số điện thoại người nhận<span style="color:red;">*</span></label>
									<div class="input-text">
										<input type="number" name="sodienthoainguoinhan" required />
									</div>
									<label>Email người nhận<span style="color:red;">*</span></label>
									<div class="input-text">
										<input type="email" name="emailnguoinhan" required />
									</div>
									<label>Ghi chú</label>
									<div>
										<textarea class="ghichu_dathang" name="ghichu" placeholder="Nhập ghi chú hoặc lưu ý cho người bán" rows="3"></textarea>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-4">
							<div class="estimate-text">
								<label>Tỉnh/Thành phố<span style="color:red;">*</span></label>
								<div class="input-text">
									<input type="text" name="tinh/thanhpho" required />
								</div>
								<label>Quận/Huyện<span style="color:red;">*</span></label>
								<div class="input-text">
									<input type="text" name="quan/huyen" required />
								</div>
								<label>Xã/Phường<span style="color:red;">*</span></label>
								<div class="input-text">
									<input type="text" name="xa/phuong" required />
								</div>
								<label>Tên đường/Số nhà<span style="color:red;">*</span></label>
								<div class="input-text">
									<input type="text" name="tenduong/sonha" required />
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<p>Tóm tắt đơn hàng :</p>
							<div class="estimate-text responsive">
								<div class="subtotal clearfix">
									<p>Phí vận chuyển: <span class="floatright">15.000đ</span></p>
									<p>Mã giảm giá:
										<span class="floatright">
											<select name="voucher" id="voucher" onchange="getVoucher()">
												<option value="0">Chọn voucher</option>
												<option value="100">Miễn phí vận chuyển</option>
												<option value="50">Giảm 50% phí vận chuyển</option>
											</select>
										</span>
									</p>
									<p>Tổng tiền thanh toán: <span class="floatright" id="tongTienThanhToan"><?= number_format($tongTienThanhToan = $tongTienHang + 15000, 0, ',', '.') ?>đ</span></p>
									<input type="hidden" name="tongtien" value="<?= $tongTienThanhToan = $tongTienHang + 15000 ?>">
									<label class="mt-20" for="">Chọn phương thức thanh toán</label>
									<select name="id_phuongthucthanhtoan" id="">
										<?php foreach ($phuongthucthanhtoans as $phuongthucthanhtoan) : ?>
											<option value="<?= $phuongthucthanhtoan['id'] ?>"><?= $phuongthucthanhtoan['tenphuongthuc'] ?></option>
										<?php endforeach; ?>
									</select>
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

	function formatNumberToVND(number) {
		return number.toLocaleString('vi-VN', {
			style: 'currency',
			currency: 'VND'
		});
	}

	function getVoucher() {
		let voucher = document.getElementById("voucher").value;
		let tongTienThanhToan = document.getElementById("tongTienThanhToan");
		tongTienThanhToan.innerHTML = formatNumberToVND(<?= (int)$tongTienHang ?> + (15000 - 15000 * voucher / 100));
	}
</script>