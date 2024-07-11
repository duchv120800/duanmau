<?php
    function ListSanPham(){
        $view='sanpham/list';
        $title='Sản phẩm';
        $main_title='Sản phẩm';
        $listSanpham=getAllSanPham();
        require PATH_VIEW_ADMIN."master.php";
    }

    function DetailSanPham($id){
        $view='sanpham/detail';
        $title='Xem chi tiết';
        $main_title='Sản phẩm';
        $sanpham=getOne('sanpham', $id);
        if(empty($sanpham)){
            e404();
        }
        require PATH_VIEW_ADMIN."master.php"; 
    }

    function AddSanPham(){
        $view='sanpham/add';
        $title='Thêm mới';
        $main_title='Thêm Sản phẩm';
        if(!empty($_POST['themmoi'])){
            $data=[
                "tendangnhap" => $_POST['tendangnhap'],
                "matkhau" => $_POST['matkhau'],
                "email" => $_POST['email'],
                "sodienthoai" => $_POST['sodienthoai'],
                "hoten" => $_POST['hoten'],
                "diachi" => $_POST['diachi'],
                "gioitinh" => $_POST['gioitinh'],
            ];
            
            insert('sanpham',$data); 
            header('location:'.BASE_URL_ADMIN.'?act=ds_tk');
            exit(); 
        }
        require PATH_VIEW_ADMIN."master.php"; 
    }

    function UpdateSanPham($id){
        $view='sanpham/update';
        $title='Cập nhật';
        $main_title='Cập nhật Sản phẩm';
        $sanpham=getOne('sanpham',$id);
        if(!empty($_POST['update'])){
            $data=[
                "tendangnhap" => $_POST['tendangnhap'],
                "matkhau" => $_POST['matkhau'],
                "email" => $_POST['email'],
                "sodienthoai" => $_POST['sodienthoai'],
                "hoten" => $_POST['hoten'],
                "diachi" => $_POST['diachi'],
                "gioitinh" => $_POST['gioitinh'],
            ];
            
            update('sanpham',$id,$data); 
            header('location:'.BASE_URL_ADMIN.'?act=ds_tk');
            exit(); 
        }
        require PATH_VIEW_ADMIN."master.php"; 
    }

    function DeleteSanPham($id){
        $sanpham=delete('sanpham', $id);
        
        $view='sanpham/list';
        $title='Sản phẩm';
        $main_title='Sản phẩm';
        $listSanpham=getAllSanPham();
        require PATH_VIEW_ADMIN."master.php"; 
    }
?>