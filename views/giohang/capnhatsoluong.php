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
   
    $idSanpham = $_POST['id'];
    $soluongMoi = $_POST['soluong'];

    if (!empty($_SESSION['giohang'])) {
        // kiểm tra sp đã có trong giỏ hàng hay chưa
        $index = array_search($idSanpham, array_column($_SESSION['giohang'], 'id'));

        if ($index !== false) {
            $_SESSION['giohang'][$index]['soluong'] = $soluongMoi;
        } else {
            echo "Sản phẩm không tồn tại trong giỏ hàng";
        }
    }

} else {
    echo "Yêu cầu không hợp lệ ";
};
