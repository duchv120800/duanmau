<?php
// session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$idSanpham = $_POST['id'];
	$tenSanpham = $_POST['ten'];
	$giaSanpham = $_POST['gia'];

	// kiểm tra sp đã có trong giỏ hàng hay chưa
	$_SESSION['giohang'] = [];
	$index = array_search($idSanpham, array_column($_SESSION['giohang'], 'id'));

	if ($index !== false) {
		$_SESSION['giohang'][$index]['quantity'] += 1;
	} else {
		// Nếu sản phẩm chưa tồn tại thì thêm vào giỏ hàng
		$sanpham = [
			'idSanpham' => $idSanpham,
			'tenSanpham' => $tenSanpham,
			'giaSanpham' => $giaSanpham,
			'quantity' => 1
		];
		$_SESSION['giohang'][] = $sanpham;
	}
} else {
	echo "<h1>yêu cầu không hợp lệ</h1>";
};
?>