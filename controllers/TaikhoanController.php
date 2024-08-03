<?php
function DirDangNhap()
{
    $view = "taikhoan/dangnhap";
    if (isset($_POST["dangnhap"])) {
        $tendangnhap = $_POST["tendangnhap"];
        $matkhau = $_POST["matkhau"];
        if ($tendangnhap == '') {
            $alert = false;
            $notification = "Tên đăng nhập không được để trống";
        } else if ($matkhau == '') {
            $alert = false;
            $notification = "Mật khẩu không được để trống";
        } else {
            $user = DangNhap($tendangnhap, $matkhau);
            if (!empty($user)) {
                $_SESSION['taikhoan']['tendangnhap'] = $user['tendangnhap'];
                $_SESSION['taikhoan']['vaitro'] = $user['vaitro'];
                $_SESSION['taikhoan']['id_taikhoan'] = $user['id'];
                header('location:' . BASE_URL);
            } else {
                $alert = false;
                $notification = "Tên đăng nhập hoặc mật khẩu không đúng";
            }
        }
    }
    require_once PATH_VIEW . "master.php";
}

function DangKy()
{
    $view = 'taikhoan/dangky';
    $title = 'Đăng ký';
    if (!empty($_POST['dangky'])) {
        $anhdaidien = $_FILES['anhdaidien']['name'];

        $target_dir = '../uploads/';

        $target_file = $target_dir . basename($_FILES['anhdaidien']['name']);
        if (move_uploaded_file($_FILES['anhdaidien']['tmp_name'], $target_file)) {
            // echo "Bạn đã upload ảnh thành công";
        } else {
            // echo "Upload ảnh không thành công";
        }
        $data = [
            "tendangnhap" => $_POST['tendangnhap'],
            "matkhau" => $_POST['matkhau'],
            "email" => $_POST['email'],
            "sodienthoai" => $_POST['sodienthoai'],
            "hoten" => $_POST['hoten'],
            "gioitinh" => $_POST['gioitinh'],
            "diachi" => $_POST['diachi'],
            "anhdaidien" => $anhdaidien,
        ];

        insert('taikhoan', $data);
        header('location:' . BASE_URL . '?act=dangnhap');
        exit();
    }
    require PATH_VIEW . "master.php";
}

function HoSoTaiKhoan($id)
{
    $view = "taikhoan/hoso";
    $user = getOne('taikhoan', $id);
    require_once PATH_VIEW . "master.php";
}

function DirDangXuat()
{
    unset($_SESSION['taikhoan']['tendangnhap']);
    unset($_SESSION['taikhoan']['vaitro']);
    unset($_SESSION['taikhoan']['id_taikhoan']);
    $view = "taikhoan/dangnhap";
    require_once PATH_VIEW . "master.php";
}
