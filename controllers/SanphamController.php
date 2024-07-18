<?php
function ChiTietSanPham($idsp)
{
    $view = 'sanpham/detail';
    $sanpham = getOneSanPham($idsp);
    $sanphamlienquans=getSanPhamLienQuan($sanpham['id_danhmuc']);
    $anhmotas= getAnhSanPham($idsp);
    require_once PATH_VIEW . "master.php";
}
