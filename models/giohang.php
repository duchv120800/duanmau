<?php
// Kiểm tra xem biến session 'giohang' đã được khởi tạo hay chưa
if (!isset($_SESSION['giohang'])) {
	$_SESSION['giohang'] = [];
}
if (!defined('BASE_URL')) {
	define('BASE_URL', 'http://localhost/du_an1/');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$idSanpham = $_POST['id'];
	$tenSanpham = $_POST['ten'];
	$giaSanpham = $_POST['gia'];

	if (!empty($idSanpham) && !empty($tenSanpham) && !empty($giaSanpham)) {
		
		session_start();

		// kiểm tra sp đã có trong giỏ hàng hay chưa
		$index = array_search($idSanpham, array_column($_SESSION['giohang'], 'id'));

		if ($index !== false) {
			$_SESSION['giohang'][$index]['soluong'] += 1;
		} else {
			// Nếu sản phẩm chưa tồn tại thì thêm vào giỏ hàng
			$sanpham = [
				'id' => $idSanpham,
				'ten' => $tenSanpham,
				'gia' => $giaSanpham,
				'soluong' => 1,
			];
			$_SESSION['giohang'][] = $sanpham;
		}
		echo count($_SESSION['giohang']);
	}
}
// else {
// 	echo "Yêu cầu không hợp lệ ";
// };
