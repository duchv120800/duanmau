<?php
    function ListTaiKhoan(){
        $view='taikhoan/list';
        $title='Tài Khoản';
        $main_title='Tài khoản';
        $listUsers=getAllTaikhoan();
        require PATH_VIEW_ADMIN."master.php";
    }

    function AddTaiKhoan(){
        $view='taikhoan/add';
        $title='Tài Khoản';
        $main_title='Tài khoản';
        require PATH_VIEW_ADMIN."master.php"; 
    }
?>