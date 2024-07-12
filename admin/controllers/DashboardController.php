<?php
    function DashboardIndex(){
        $qty_taikhoan=quantity('taikhoan');
        $qty_danhmuc=quantity('danhmuc');
        $qty_sanpham=quantity('sanpham');
        $qty_donhang=quantity('donhang');
        $title= 'Trang chủ';
        $main_title= 'Trang chủ';
        $view = 'dashboard';
        require_once PATH_VIEW_ADMIN."master.php";
    }

    