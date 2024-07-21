<?php
function DangNhap($tendangnhap, $matkhau) {
    try {
        $sql = "SELECT * FROM taikhoan WHERE tendangnhap=:tendangnhap AND matkhau=:matkhau AND vaitro=0 LIMIT 1";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':tendangnhap', $tendangnhap);
        $stmt->bindParam(':matkhau', $matkhau);

        $stmt->execute();

        return $stmt->fetch();
    } catch (\Exception $e) {
        debug($e);
    }
}