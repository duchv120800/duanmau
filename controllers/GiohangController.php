<?php
function ViewGioHang()
{
    $view = 'giohang/giohang';

    if (!empty($_SESSION['giohang'])) {
        $giohang = $_SESSION['giohang'];
        $idSanpham = array_column($giohang, 'id');
        $listIdSanpham = implode(',', $idSanpham);
        $listSanphamGiohang=getAllSanphamGiohang($listIdSanpham);
    }

    require_once PATH_VIEW . "master.php";
}
