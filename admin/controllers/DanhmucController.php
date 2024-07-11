<?php
    function ListDanhmuc(){
        $view='danhmuc/list';
        $title='Danh mục';
        $main_title='Danh mục';
        $listDanhmuc=getAllDanhmuc();
        require PATH_VIEW_ADMIN."master.php";
    }

    function AddDanhmuc(){
        $view='danhmuc/add';
        $title='Thêm mới';
        $main_title='Thêm Danh mục';
        if(!empty($_POST['themmoi'])){
            $data=[
                "ten" => $_POST['ten']
            ];
            
            insert('danhmuc',$data); 
            header('location:'.BASE_URL_ADMIN.'?act=ds_dm');
            exit(); 
        }
        require PATH_VIEW_ADMIN."master.php"; 
    }

    function UpdateDanhmuc($id){
        $view='danhmuc/update';
        $title='Cập nhật';
        $main_title='Cập nhật Danh mục';
        $danhmuc=getOne('danhmuc',$id);
        if(!empty($_POST['update'])){
            $data=[
                "ten" => $_POST['ten']
            ];
            
            update('danhmuc',$id,$data); 
            header('location:'.BASE_URL_ADMIN.'?act=ds_dm');
            exit(); 
        }
        require PATH_VIEW_ADMIN."master.php"; 
    }

    function DeleteDanhmuc($id){
        $danhmuc=delete('danhmuc', $id);
        
        $view='danhmuc/list';
        $title='Danh mục';
        $main_title='Danh mục';
        $listDanhmuc=getAllDanhmuc();
        require PATH_VIEW_ADMIN."master.php"; 
    }
?>