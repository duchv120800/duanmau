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
        $donhang=getOne('Donhang', $id);
        if(empty($donhang)){
            e404();
        }
        require PATH_VIEW_ADMIN."master.php"; 
    }

    function AddDonhang(){
        $view='donhang/add';
        $title='Thêm mới';
        $main_title='Thêm Đơn hàng';
        if(!empty($_POST['themmoi'])){
            $data=[
                "madonhang" => $_POST['madonhang'],
                "tennguoidat" => $_POST['tennguoidat'],
                "sdt" => $_POST['sdt'],
                "gia" => $_POST['gia'],
                "trangthai" => $_POST['trangthai'],
            
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
        $sanpham=getOne('donhang',$id);
        if(!empty($_POST['update'])){
            $data=[
                "madonhang" => $_POST['madonhang'],
                "tennguoidat" => $_POST['tennguoidat'],
                "sdt" => $_POST['sdt'],
                "gia" => $_POST['gia'],
                "trangthai" => $_POST['trangthai'],
                
            ];
            
            update('donhang',$id,$data); 
            header('location:'.BASE_URL_ADMIN.'?act=ds_dh');
            exit(); 
        }
        require PATH_VIEW_ADMIN."master.php"; 
    }

    function DeleteDonhang($id){
        $sanpham=delete('donhang', $id);
        
        $view='donhang/list';
        $title='Đơn hàng';
        $main_title='Đơn hàng';
        $listDonhang=getAllDonhang();
        require PATH_VIEW_ADMIN."master.php"; 
    }
?>