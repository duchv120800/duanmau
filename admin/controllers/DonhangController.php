<?php
    function ListDonhang(){
        $view='donhang/list';
        $title='Đơn hàng';
        $main_title='Đơn hàng';
        $listDonhang=getAllDonhang();
        require PATH_VIEW_ADMIN."master.php";
    }

    function DetailDonhang($id){
        $view='donhang/detail';
        $title='Xem chi tiết';
        $main_title='Đơn hàng';
        $donhang=getOneDonhang($id);
        if(empty($donhang)){
            e404();
        }
        require PATH_VIEW_ADMIN."master.php"; 
    }

    function AddDonhang(){
        $view='donhang/add';
        $title='Thêm mới';
        $main_title='Thêm Đơn hàng';
        $listSanpham=getAll('sanpham');
        $listTaikhoan=getAll('taikhoan');
        $listTrangthai=getAll('trangthaidonhang');
        if(!empty($_POST['themmoi'])){
            $data=[
                'madonhang' => $_POST['madonhang'],
                'diachinhanhang' => $_POST['diachinhanhang'],
                'tennguoinhan' => $_POST['tennguoinhan'],
                'sodienthoainguoinhan' => $_POST['sodienthoainguoinhan'],
                'emailnguoinhan' => $_POST['emailnguoinhan'],
                'ngaydathang' => $_POST['ngaydathang'],
                'ghichu' => $_POST['ghichu'],
                'tongtien' => $_POST['tongtien'],
                'id_taikhoan' => $_POST['id_taikhoan'],
                'id_sanpham' => $_POST['id_sanpham'],
                'id_trangthai' => $_POST['id_trangthai'],
            ];
            
            insert('donhang',$data); 
            header('location:'.BASE_URL_ADMIN.'?act=ds_dh');
            exit(); 
        }
        require PATH_VIEW_ADMIN."master.php"; 
    }

    function UpdateDonhang($id){
        $view='donhang/update';
        $title='Cập nhật';
        $main_title='Cập nhật Đơn hang';
        $listSanpham=getAll('sanpham');
        $listTaikhoan=getAll('taikhoan');
        $listTrangthai=getAll('trangthaidonhang');
        $donhang=getOne('donhang',$id);
        if(!empty($_POST['update'])){
            $data=[
                'madonhang' => $_POST['madonhang'],
                'diachinhanhang' => $_POST['diachinhanhang'],
                'tennguoinhan' => $_POST['tennguoinhan'],
                'sodienthoainguoinhan' => $_POST['sodienthoainguoinhan'],
                'emailnguoinhan' => $_POST['emailnguoinhan'],
                'ngaydathang' => $_POST['ngaydathang'],
                'ghichu' => $_POST['ghichu'],
                'tongtien' => $_POST['tongtien'],
                'id_taikhoan' => $_POST['id_taikhoan'],
                'id_sanpham' => $_POST['id_sanpham'],
                'id_trangthai' => $_POST['id_trangthai'],
            
            ];
            
            update('donhang',$id,$data); 
            header('location:'.BASE_URL_ADMIN.'?act=ds_dh');
            exit(); 
        }
        require PATH_VIEW_ADMIN."master.php"; 
    }

    function DeleteDonhang($id){
        $sanpham=delete('donhang', $id);
        $alert=true;
        $notification='Xóa đơn hàng thành công!';
        
        $view='donhang/list';
        $title='Đơn hàng';
        $main_title='Đơn hàng';
        $listDonhang=getAllDonhang();
        require PATH_VIEW_ADMIN."master.php"; 
    }
?>