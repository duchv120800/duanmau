<?php
    function getAllTaikhoan(){
        $sql="SELECT * FROM taikhoan";
        $listUsers=pdo_query($sql);
        return $listUsers;
    }
?>