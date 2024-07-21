<?php
function DangKyDangNhap() {
    $view="taikhoan/dangky_dangnhap";
    if(isset($_POST["dangnhap"])){
        $tendangnhap=$_POST["tendangnhap"];
        $matkhau=$_POST["matkhau"];
        $user=DangNhap($tendangnhap,$matkhau);
        if(!empty($user)){
            $_SESSION['tendangnhap']=$user['tendangnhap'];
            header('location:'.BASE_URL);
        }else{
            $alert=false;
            $notification="Thông tin tài khoản sai";
        }
    }
    require_once PATH_VIEW . "master.php";
}