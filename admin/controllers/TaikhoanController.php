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
    $anhdaidiencu=$user['anhdaidien'];
    if (!empty($_POST['update'])) {
        $anhdaidien = $_FILES['anhdaidien']['name'];
        if($anhdaidien==''){
            $anhdaidien=$anhdaidiencu;
        }
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

        update('taikhoan', $id, $data);
        header('location:' . BASE_URL_ADMIN . '?act=ds_tk');
        $GLOBALS['notification']='ok';
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
    $notification='Xóa thành công';
    $alert=true;
    require PATH_VIEW_ADMIN . "master.php";
}
