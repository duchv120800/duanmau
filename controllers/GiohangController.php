<?php
function ViewGioHang()
{
    $view = 'giohang/giohang';
    // $sanpham = getOneSanPham($idsp);
    // $binhluans = getAllBinhLuan($idsp);
    $danhmucs=getAllDanhmuc();
    // $sanphamlienquans=getSanPhamLienQuan($sanpham['id_danhmuc']);
    // $anhmotas= getAnhSanPham($idsp);
    require_once PATH_VIEW . "master.php";
}