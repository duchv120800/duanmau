<?php
function SanPhamMoiHome() {
    try {
        $sql = "SELECT * FROM sanpham ORDER BY sanpham.id DESC LIMIT 4";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function SanPhamPhoBienHome()
{
    try {
        $sql = "SELECT * FROM sanpham ORDER BY sanpham.luotxem DESC LIMIT 6";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getOneSanPham($id) {
    try {
        $sql = "SELECT sanpham.*, danhmuc.ten AS ten_danhmuc 
            FROM sanpham 
            INNER JOIN danhmuc
            ON sanpham.id_danhmuc = danhmuc.id
            WHERE sanpham.id=:id
            ";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();

        return $stmt->fetch();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getAnhSanPham($id_sanpham)
{
    try {
        $sql = "SELECT tenanh FROM anhsanpham WHERE id_sanpham= $id_sanpham";
        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getSanPhamLienQuan($id_danhmuc)
{
    try {
        $sql = "SELECT * FROM sanpham WHERE id_danhmuc = :id_danhmuc";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':id_danhmuc', $id_danhmuc);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getSanPhamSale()
{
    try {
        $sql = "SELECT * FROM sanpham WHERE sale > 0 ORDER BY sanpham.sale DESC";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getAllBinhLuan($id_sanpham) {
    try {
        $sql = "SELECT binhluan.*, taikhoan.tendangnhap AS tentaikhoan 
            FROM binhluan 
            INNER JOIN taikhoan
            ON binhluan.id_taikhoan = taikhoan.id
            WHERE binhluan.id_sanpham=:id_sanpham
            AND binhluan.trangthai=1
            ";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':id_sanpham', $id_sanpham);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}