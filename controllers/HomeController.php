<?php
    function HomeIndex(){
        $view='layouts/patials/main';
        $danhmucs=getAllDanhmuc();
        $sanphammoihomes=SanPhamMoiHome();
        $sanphamphobienhomes=SanPhamPhoBienHome();
        require_once PATH_VIEW."master.php";
    }
?>