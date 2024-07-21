<?php
session_start();
include './commons/env.php';
include './commons/global.php';
include './commons/connect.php';
include './commons/crud.php';
include './commons/count.php';
include './commons/hidden_notification.php';
//require tất cả file trong controllers và models
require_file(PATH_CONTROLLER);
require_file(PATH_MODEL);

$act=$_GET["act"]?? "/";

match ($act) {
    '/' => HomeIndex(),
    'sp_detail'=> ChiTietSanPham($_GET['id_sp']),
    'taikhoan' => DangKyDangNhap(),
};
