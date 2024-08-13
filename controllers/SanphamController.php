<?php
function ChiTietSanPham($idsp)
{
    $view = 'sanpham/detail';
    if (!empty($_POST['binhluan'])) {

        $data = [
            "noidung" => $_POST['noidung'],
            "ngaybinhluan" => date('Y-m-d'),
            "trangthai" => 1,
            "id_taikhoan" => $_SESSION['taikhoan']['id_taikhoan'],
            "id_sanpham" => $idsp,
        ];

        insert('binhluan', $data);
    }
    $sanpham = getOneSanPham($idsp);
    $binhluans = getAllBinhLuan($idsp);
    $sanphamlienquans = getSanPhamLienQuan($sanpham['id_danhmuc']);
    $anhmotas = getAnhSanPham($idsp);

    require_once PATH_VIEW . "master.php";
}

function ListSanPham($id_danhmuc, $sale, $current_page)
{
    $view = 'sanpham/list';
    $listsanphams = getAllSanphamClient($id_danhmuc, $sale, $current_page);
    $tendanhmuc = getTenDanhmuc($id_danhmuc);
    require_once PATH_VIEW . "master.php";
}
