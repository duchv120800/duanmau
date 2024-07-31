<?php
function getAllBinhluan() {
    try {
        // Câu truy vấn SQL để lấy dữ liệu từ ba bảng
        $sql = "
            SELECT
                b.id,
                t.Hoten AS ten_taikhoan,
                t.tendangnhap,
                s.ten AS ten_sanpham,
                b.noidung,
                b.ngaybinhluan,
                b.trangthai
            FROM
                binhluan b
            JOIN
                taikhoan t ON b.id_taikhoan = t.id
            JOIN
                sanpham s ON b.id_sanpham = s.id
        ";

        // Chuẩn bị và thực thi câu truy vấn
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->execute();

        // Trả về tất cả các kết quả dưới dạng mảng kết hợp
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (\Exception $e) {
        // Xử lý lỗi
        debug($e);
    }
}
function getBinhluanById($id) {
    try {
        $sql = "SELECT * FROM binhluan WHERE id = :id";
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (\Exception $e) {
        debug($e);
    }
}
function updateBinhluanStatus($id, $status) {
    try {
        $sql = "UPDATE binhluan SET trangthai = :status WHERE id = :id";
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':status', $status, PDO::PARAM_INT);
        $stmt->execute();
    } catch (\Exception $e) {
        debug($e);
    }
}
?>
