<?php
function getAllDonhang()
{
    try {
        $sql = "
            WITH CTE AS (
                SELECT donhang.*, 
                    sanpham.ten AS tensanpham, 
                    taikhoan.tendangnhap AS tentaikhoan, 
                    trangthaidonhang.tentrangthai AS tentrangthai, 
                    phuongthucthanhtoan.tenphuongthuc,
                    ROW_NUMBER() OVER (PARTITION BY donhang.madonhang ORDER BY donhang.id DESC) AS row_num
                FROM donhang 
                INNER JOIN chitietdonhang
                ON chitietdonhang.id_donhang = donhang.id
                INNER JOIN sanpham
                ON chitietdonhang.id_sanpham = sanpham.id 
                LEFT JOIN taikhoan
                ON donhang.id_taikhoan = taikhoan.id
                LEFT JOIN trangthaidonhang
                ON donhang.id_trangthai = trangthaidonhang.id
                LEFT JOIN phuongthucthanhtoan
                ON donhang.id_phuongthucthanhtoan = phuongthucthanhtoan.id
            )
            SELECT *
            FROM CTE
            WHERE row_num = 1
            ORDER BY id DESC;
            ";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getOneDonhang($id)
{
    try {

        $sql = "SELECT donhang.*, 
               sanpham.ten AS tensanpham, 
               sanpham.hinhanh AS hinhanhsanpham, 
               sanpham.gia AS giasanpham,
               taikhoan.hoten AS hotennguoidat, 
               taikhoan.diachi AS diachinguoidat,
               taikhoan.sodienthoai AS sodienthoainguoidat,
               taikhoan.email AS emailnguoidat,
               trangthaidonhang.tentrangthai AS tentrangthai,
                phuongthucthanhtoan.tenphuongthuc
        FROM donhang 
        INNER JOIN chitietdonhang ON chitietdonhang.id_donhang = donhang.id
        INNER JOIN sanpham ON chitietdonhang.id_sanpham = sanpham.id 
        LEFT JOIN taikhoan ON donhang.id_taikhoan = taikhoan.id AND taikhoan.vaitro = 0
        LEFT JOIN trangthaidonhang ON donhang.id_trangthai = trangthaidonhang.id
        LEFT JOIN phuongthucthanhtoan
        ON donhang.id_phuongthucthanhtoan = phuongthucthanhtoan.id
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

function getSanPhamDonHang($id_donhang)
{
    try {

        $sql = "SELECT chitietdonhang.*, 
                sanpham.ten AS tensanpham,
                sanpham.hinhanh AS anhsanpham
                FROM chitietdonhang 
                JOIN sanpham ON chitietdonhang.id_sanpham = sanpham.id 
                WHERE chitietdonhang.id_donhang = :id_donhang";

        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':id_donhang', $id_donhang);
        $stmt->execute();

        return $stmt->fetchAll();
    } catch (Exception $e) {
        echo "Lỗi: " . $e->getMessage();
        return null;
    }
}
