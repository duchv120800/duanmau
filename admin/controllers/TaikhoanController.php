<?php
    function ListTaiKhoan(){
        $listUsers=getAllTaikhoan();
        require PATH_VIEW_ADMIN."taikhoan/list.php";
    }

    function AddTaiKhoan(){
        require PATH_VIEW_ADMIN."taikhoan/add.php"; 
    }
?>