<?php
function ListTaiKhoan()
{
    $view = 'taikhoan/list';
    $title = 'Tài Khoản';
    $main_title = 'Tài khoản';
    $listUsers = getAllTaikhoan();
    require PATH_VIEW_ADMIN . "master.php";
}

function DetailTaikhoan($id)
{
    $view = 'taikhoan/detail';
    $title = 'Xem chi tiết';
    $main_title = 'Tài khoản';
    $user = getOne('taikhoan', $id);
    if (empty($user)) {
        e404();
    }
    require PATH_VIEW_ADMIN . "master.php";
}

function AddTaiKhoan()
{
    $view = 'taikhoan/add';
    $title = 'Thêm mới';
    $main_title = 'Thêm tài khoản';
    if (!empty($_POST['themmoi'])) {
        $data = [
            "tendangnhap" => $_POST['tendangnhap'],
            "matkhau" => $_POST['matkhau'],
            "email" => $_POST['email'],
            "sodienthoai" => $_POST['sodienthoai'],
            "hoten" => $_POST['hoten'],
            "diachi" => $_POST['diachi'],
            "gioitinh" => $_POST['gioitinh'],
        ];

        insert('taikhoan', $data);
        header('location:' . BASE_URL_ADMIN . '?act=ds_tk');
        exit();
    }
    require PATH_VIEW_ADMIN . "master.php";
}

function UpdateTaiKhoan($id)
{
    $view = 'taikhoan/update';
    $title = 'Cập nhật';
    $main_title = 'Cập nhật tài khoản';
    $user = getOne('taikhoan', $id);
    if (!empty($_POST['update'])) {
        $data = [
            "tendangnhap" => $_POST['tendangnhap'],
            "matkhau" => $_POST['matkhau'],
            "email" => $_POST['email'],
            "sodienthoai" => $_POST['sodienthoai'],
            "hoten" => $_POST['hoten'],
            "diachi" => $_POST['diachi'],
            "gioitinh" => $_POST['gioitinh'],
        ];

        update('taikhoan', $id, $data);
        header('location:' . BASE_URL_ADMIN . '?act=ds_tk');
        exit();
    }
    require PATH_VIEW_ADMIN . "master.php";
}

function DeleteTaikhoan($id)
{
    $user = delete('taikhoan', $id);

    $view = 'taikhoan/list';
    $title = 'Tài Khoản';
    $main_title = 'Tài khoản';
    $listUsers = getAllTaikhoan();
    require PATH_VIEW_ADMIN . "master.php";
}
