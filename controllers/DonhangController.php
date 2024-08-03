<?php

function ViewDonHang($id_trangthai_dh)
{
    $view = 'donhang/listdonhang';
    $donhangs = getDonHang($_SESSION['taikhoan']['id_taikhoan'], $id_trangthai_dh);
    $trangthais = getAll('trangthaidonhang');
    require_once PATH_VIEW . "master.php";
}

function ChiTietDonHang($id_dh)
{
    $view = 'donhang/detail';
    $donhangs = getOneDonHang($id_dh);

    require_once PATH_VIEW . "master.php";
}

function DirHuyDonHang($id_dh)
{
    $view = 'donhang/detail';
    huyDonHang($id_dh);
    $notification = 'Hủy đơn hàng thành công';
    $donhangs = getOneDonHang($id_dh);

    require_once PATH_VIEW . "master.php";
}
