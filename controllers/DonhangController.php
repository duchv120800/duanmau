<?php
function ThanhToan()
{
    if (isset($_POST['thanhtoan']) && $_POST['thanhtoan']) {
        $ngaydathang = date('y-m-d');
        $hashed_date_time = hash('sha256', $ngaydathang);
        $madonhang = substr(strtoupper($hashed_date_time), 0, 6);
        $diachinhanhang = $_POST['tenduong/sonha'] . ', ' . $_POST['xa/phuong'] . ', ' . $_POST['quan/huyen'] . ', ' . $_POST['tinh/thanhpho'];
        $data = [
            "madonhang" => 'DAH_'.$madonhang,
            "tennguoinhan" => $_POST['tennguoinhan'],
            "diachinhanhang" => $diachinhanhang,
            "sodienthoainguoinhan" => $_POST['sodienthoainguoinhan'],
            "emailnguoinhan" => $_POST['emailnguoinhan'],
            "ngaydathang" => $ngaydathang,
            "ghichu" => $_POST['ghichu'],
            "tongtien" => $_POST['tongtien'],
            "id_taikhoan" => $_SESSION['taikhoan']['id_taikhoan'],
            "id_trangthai" => 1,
        ];

        insert('donhang', $data);
        unset($_SESSION['giohang']);
        $id_donhang_moi = $GLOBALS['conn']->LastInsertId();
        header('location:' . BASE_URL . '?act=giohang');
        exit();
    }
    require PATH_VIEW . "master.php";
}
