<?php
function getAllSanPham()
{
    try {
        $sql = "SELECT * FROM sanpham 
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
