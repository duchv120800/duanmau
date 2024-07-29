<?php
session_start();
include './commons/env.php';
include './commons/global.php';
include './commons/connect.php';
include './commons/crud.php';
include './commons/count.php';
include './commons/cart.php';
include './commons/hidden_notification.php';
//require tất cả file trong controllers và models
require_file(PATH_CONTROLLER);
require_file(PATH_MODEL);

$act=$_GET["act"]?? "/";
if(isset($_GET['id_danhmuc']) && ($_GET['id_danhmuc']>0)){
    $id_danhmuc=(int)$_GET['id_danhmuc'];
}else{
    $id_danhmuc=0;
}

match ($act) {
    '/' => HomeIndex(),
    'sanpham' => ListSanPham($id_danhmuc),
    'sp_detail'=> ChiTietSanPham($_GET['id_sp']),
    'dangnhap' => DirDangNhap(),
    'dangxuat' => DirDangXuat(),
    'dangky' => DangKy(),
    'hoso' => HoSoTaiKhoan($_GET['id']),
    'giohang' => ViewGioHang(),
};
