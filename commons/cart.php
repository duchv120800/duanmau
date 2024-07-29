<?php
function getAllSanphamGiohang($listIdSanpham){
	try {
        $sql = "SELECT * FROM sanpham WHERE sanpham.id IN (".$listIdSanpham.")";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}
?>