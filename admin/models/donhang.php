<?php
function getAllDonhang()
{
    try {
        $sql = "SELECT * FROM donhang 
            LEFT JOIN phuongthucthanhtoan
            ON donhang.id_thanhtoan = phuongthucthanhtoan.id 
            ORDER BY donhang.id DESC
            ";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}
