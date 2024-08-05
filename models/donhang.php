<?php
function getDonHang($id_taikhoan, $id_trangthai)
{
    try {
        $sql = "SELECT donhang.*, chitietdonhang.soluong, chitietdonhang.tongtien,
                sanpham.ten,sanpham.hinhanh, trangthaidonhang.tentrangthai
            FROM donhang 
            INNER JOIN chitietdonhang
            ON donhang.id = chitietdonhang.id_donhang
            INNER JOIN trangthaidonhang
            ON donhang.id_trangthai = trangthaidonhang.id
            INNER JOIN sanpham
            ON chitietdonhang.id_sanpham = sanpham.id
            WHERE donhang.id_taikhoan=:id_taikhoan
            ";
        if ($id_trangthai > 0) {
            $sql .= "AND donhang.id_trangthai=:id_trangthai";
        }

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':id_taikhoan', $id_taikhoan);
        if($id_trangthai > 0){
            $stmt->bindParam(':id_trangthai', $id_trangthai);
        }

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getOneDonHang($id)
{
    try {
        $sql = "SELECT donhang.*, chitietdonhang.soluong, chitietdonhang.tongtien,
                sanpham.ten,sanpham.hinhanh, trangthaidonhang.tentrangthai, phuongthucthanhtoan.tenphuongthuc
            FROM donhang 
            INNER JOIN chitietdonhang
            ON donhang.id = chitietdonhang.id_donhang
            INNER JOIN trangthaidonhang
            ON donhang.id_trangthai = trangthaidonhang.id
            INNER JOIN sanpham
            ON chitietdonhang.id_sanpham = sanpham.id
            INNER JOIN phuongthucthanhtoan
            ON donhang.id_phuongthucthanhtoan = phuongthucthanhtoan.id
            WHERE donhang.id=:id
            ORDER BY donhang.id DESC
            ";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function huyDonHang($id) {
    try {
        $sql = "UPDATE donhang SET id_trangthai = 7 WHERE id =:id";
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    } catch (\Exception $e) {
        debug($e);
    }
}
