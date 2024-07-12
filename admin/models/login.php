<?php
session_start();
function Login($data)
{
    $tendangnhap=$data['tendangnhap'];
    $matkhau=$data['matkhau'];
    try {
        $sql = "SELECT * FROM taikhoan WHERE tendangnhap=:tendangnhap AND matkhau=:matkhau AND vaitro=1";
        
        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':tendangnhap',$tendangnhap);
        $stmt->bindParam(':matkhau',$matkhau);
        $stmt->execute();

        // $a=$stmt->fetch();
        // debug($a);die();
        return $stmt->fetch();
    } catch (\Exception $e) {
        debug($e);
    }
}