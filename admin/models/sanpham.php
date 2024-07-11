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
