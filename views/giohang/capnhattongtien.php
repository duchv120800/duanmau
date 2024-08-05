<?php
session_start();
// Kiểm tra xem biến session 'giohang' đã được khởi tạo hay chưa
// if (!isset($_SESSION['giohang'])) {
//     $_SESSION['giohang'] = [];
// }
if (!defined('BASE_URL')) {
    define('BASE_URL', 'http://localhost/du_an1/');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $voucher = $_POST['voucher'];
    $tongTienHang = $_POST['tongTienHang'];

    if ($voucher!=0) {
        $tongTienThanhToan=0;
    }

} else {
    echo "Yêu cầu không hợp lệ ";
};
