<?php
function getAllSanPham()
{
    try {
        $sql = "SELECT sanpham.*, danhmuc.ten AS ten_danhmuc 
            FROM sanpham 
            LEFT JOIN danhmuc
            ON sanpham.id_danhmuc = danhmuc.id 
            ORDER BY sanpham.id DESC
            ";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getOneSanPham($id)
{
    try {
        $sql = "SELECT sanpham.*, danhmuc.ten AS ten_danhmuc 
            FROM sanpham 
            INNER JOIN danhmuc
            ON sanpham.id_danhmuc = danhmuc.id
            WHERE sanpham.id=$id
            ORDER BY sanpham.id DESC
            ";
        $stmt = $GLOBALS['conn']->prepare($sql);

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

function getSanPhamLienQuan($tableName, $id_sanpham)
{
    try {
        $sql = "SELECT * FROM $tableName WHERE id_sanpham = :id_sanpham limit 1";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':id_sanpham', $id_sanpham);

        $stmt->execute();

        return $stmt->fetch();
    } catch (\Exception $e) {
        debug($e);
    }
}

function DeleteAnhSanPham($id_sanpham)
{
    try {
        $sql = "DELETE FROM anhsanpham WHERE anhsanpham.id_sanpham= $id_sanpham";
        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();
    } catch (\Exception $e) {
        debug($e);
    }
}
