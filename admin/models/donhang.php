<?php
function getAllDonhang()
{
    try {
        $sql = "SELECT donhang.*, sanpham.ten AS tensanpham, taikhoan.tendangnhap AS tentaikhoan, trangthaidonhang.tentrangthai AS tentrangthai 
            FROM donhang 
            LEFT JOIN sanpham
            ON donhang.id_sanpham = sanpham.id 
            LEFT JOIN taikhoan
            ON donhang.id_taikhoan = taikhoan.id
            LEFT JOIN trangthaidonhang
            ON donhang.id_trangthai = trangthaidonhang.id
            ORDER BY donhang.id DESC
            ";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getOneDonhang($id) {
    try {

        $sql = "SELECT donhang.*, 
               sanpham.ten AS tensanpham, 
               sanpham.hinhanh AS hinhanhsanpham, 
               sanpham.gia AS giasanpham,
               taikhoan.hoten AS hotennguoigui, 
               taikhoan.diachi AS diachinguoigui,
               taikhoan.sodienthoai AS sodienthoainguoigui,
               taikhoan.email AS emailnguoigui,
               trangthaidonhang.tentrangthai AS tentrangthai
        FROM donhang 
        LEFT JOIN sanpham ON donhang.id_sanpham = sanpham.id 
        LEFT JOIN taikhoan ON donhang.id_taikhoan = taikhoan.id AND taikhoan.vaitro = 1
        LEFT JOIN trangthaidonhang ON donhang.id_trangthai = trangthaidonhang.id
        WHERE donhang.id = :id
        ORDER BY donhang.id DESC";

        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch();

    } catch (Exception $e) {
        echo "Lỗi: " . $e->getMessage();
        return null;
    }
}
