<?php
function ListDonhang($current_page)
{
    $view = 'donhang/list';
    $title = 'Đơn hàng';
    $main_title = 'Đơn hàng';
    $listDonhang = getAllDonhang($current_page);
    require PATH_VIEW_ADMIN . "master.php";
}

function DetailDonhang($id)
{
    $view = 'donhang/detail';
    $title = 'Xem chi tiết';
    $main_title = 'Đơn hàng';
    $donhang = getOneDonhang($id);
    $sanphamdonhangs = getSanPhamDonHang($id);

    if (empty($donhang)) {
        e404();
    }
    require PATH_VIEW_ADMIN . "master.php";
}

function AddDonhang()
{
    $view = 'donhang/add';
    $title = 'Thêm mới';
    $main_title = 'Thêm Đơn hàng';
    $listSanpham = getAll('sanpham');
    $listTaikhoan = getAll('taikhoan');
    $listTrangthai = getAll('trangthaidonhang');

    $date_time = date('Y-m-d H:i:s');
    $hashed_date_time = hash('sha256', $date_time);
    $madonhang = substr(strtoupper($hashed_date_time),0,6);
    if (!empty($_POST['themmoi'])) { 
        $data = [
            'madonhang' => $madonhang,
            'diachinhanhang' => $_POST['diachinhanhang'],
            'tennguoinhan' => $_POST['tennguoinhan'],
            'sodienthoainguoinhan' => $_POST['sodienthoainguoinhan'],
            'emailnguoinhan' => $_POST['emailnguoinhan'],
            'ngaydathang' => $_POST['ngaydathang'],
            'ghichu' => $_POST['ghichu'],
            'tongtien' => $_POST['tongtien'],
            'id_taikhoan' => $_POST['id_taikhoan'],
            'id_sanpham[]' => $_POST['id_sanpham'],
            'id_trangthai' => $_POST['id_trangthai'],
        ];
        insert('donhang', $data);
        header('location:' . BASE_URL_ADMIN . '?act=ds_dh');
        exit();
    }
    require PATH_VIEW_ADMIN . "master.php";
}

function UpdateDonhang($id)
{
    $view = 'donhang/update';
    $title = 'Cập nhật';
    $main_title = 'Cập nhật Đơn hang';
    // $listSanpham = getAll('sanpham');
    // $listTaikhoan = getAll('taikhoan');
    $listTrangthai = getAll('trangthaidonhang');
    $donhang = getOne('donhang', $id);
    if (!empty($_POST['update'])) {
        $data = [
            'tennguoinhan' => $_POST['tennguoinhan'],
            'diachinhanhang' => $_POST['diachinhanhang'],
            'sodienthoainguoinhan' => $_POST['sodienthoainguoinhan'],
            'emailnguoinhan' => $_POST['emailnguoinhan'],
            'ghichu' => $_POST['ghichu'],
            'id_trangthai' => $_POST['id_trangthai'],
        ];
        update('donhang', $id, $data);
        header('location:' . BASE_URL_ADMIN . '?act=ds_dh');
        exit();
    }
    require PATH_VIEW_ADMIN . "master.php";
}

function DeleteDonhang($id)
{
    $donhang=getOneDonhang($id);
    if($donhang['id_trangthai'] == 7){
        deleteDonhangDetail($id);
        $deleteDonhang = delete('donhang', $id);
        if($deleteDonhang!==false){
            $alert = true;
            $notification = 'Xóa đơn hàng thành công!';
        }
    }else{
        $alert = false;
        $notification = 'Đơn hàng chưa hoàn thành nên không thể xóa!';
    }

    $view = 'donhang/list';
    $title = 'Đơn hàng';
    $main_title = 'Đơn hàng';
    $listDonhang = getAllDonhang($current_page=1);
    require PATH_VIEW_ADMIN . "master.php";
}

function deleteDonhangDetail($id_donhang){
    try {

     $sql="DELETE FROM chitietdonhang WHERE id_donhang =:id_donhang";

     $stmt = $GLOBALS['conn']->prepare($sql);
     
     $stmt->bindParam(':id_donhang',$id_donhang);

     $stmt->execute();
    } catch (\Exception $e) {
         debug($e);
    }
 }
