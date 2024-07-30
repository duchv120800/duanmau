<?php
function ChiTietSanPham($idsp)
{
    $view = 'sanpham/detail';
    $sanpham = getOneSanPham($idsp);
    $binhluans = getAllBinhLuan($idsp);
    $danhmucs=getAllDanhmuc();
    $sanphamlienquans=getSanPhamLienQuan($sanpham['id_danhmuc']);
    $anhmotas= getAnhSanPham($idsp);
    if (!empty($_POST['binhluan'])) {
        
        $data = [
            "noidung" => $_POST['noidung'],
            "ngaybinhluan" => date('Y-m-d'),
            "trangthai" => 1,
            "id_taikhoan" => $_SESSION['id'],
            "id_sanpham" => $idsp,
        ];
        
        insert('binhluan', $data);
        exit();
    }
    require_once PATH_VIEW . "master.php";
}

function ListSanPham($id_danhmuc)
{
    $view = 'sanpham/list';
    $danhmucs=getAllDanhmuc();
    $listsanphams= getAllSanPham($id_danhmuc);
    require_once PATH_VIEW . "master.php";
}
