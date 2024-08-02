<?php
    function HomeIndex(){
        $view='layouts/patials/main';
        $sanphammoihomes=SanPhamMoiHome();
        $sanphamsales = getSanPhamSale();
        $sanphamphobienhomes=SanPhamPhoBienHome();
        require_once PATH_VIEW."master.php";
    }
?>