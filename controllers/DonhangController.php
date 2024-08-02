<?php

function ThanhToan()
{
    if (isset($_POST['thanhtoan']) && $_POST['thanhtoan']) {
        $ngaydathang = date('y-m-d H:i:s');
        $hashed_date_time = hash('sha256', $ngaydathang);
        $madonhang = substr(strtoupper($hashed_date_time), 0, 6);
        $diachinhanhang = $_POST['tenduong/sonha'] . ', ' . $_POST['xa/phuong'] . ', ' . $_POST['quan/huyen'] . ', ' . $_POST['tinh/thanhpho'];
        $data = [
            "madonhang" => 'DAH_' . $madonhang,
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

        $id_donhang_moi = $GLOBALS['conn']->LastInsertId();

        if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0) {
            foreach ($_SESSION['giohang'] as $item) {
                $data = [
                    'id_donhang' => $id_donhang_moi,
                    'id_sanpham' => $item['id'],
                    'dongia' => $item['gia'],
                    'soluong' => $item['soluong'],
                    'tongtien' => (int)$item['soluong'] * (int)$item['gia']
                ];
                insert('chitietdonhang', $data);
            }
            unset($_SESSION['giohang']);
        }
        // $donhangs = getDonhangMoi($id_donhang_moi);
        header('location:'.BASE_URL.'?act=donhang&id_ttdh=0');
    }
    require PATH_VIEW . "master.php";
}

function ViewDonHang($id_trangthai_dh){
    $view = 'donhang/listdonhang';
    $donhangs = getDonHang($_SESSION['taikhoan']['id_taikhoan'],$id_trangthai_dh);
    $trangthais= getAll('trangthaidonhang');
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
    $notification='Hủy đơn hàng thành công';
    $donhangs = getOneDonHang($id_dh);

    require_once PATH_VIEW . "master.php";
}