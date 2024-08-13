<?php
function getAllBinhluan($current_page) {
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

        $limit = 10;

        $offset = ($current_page - 1) * $limit;

        $sql .= " ORDER BY id DESC LIMIT " . $limit . " offset " . $offset;

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
function updateBinhluanStatus($id, $trangthai) {
    try {
        $sql = "UPDATE binhluan SET trangthai = :trangthai WHERE id = :id";
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':trangthai', $trangthai);
        $stmt->execute();
    } catch (\Exception $e) {
        debug($e);
    }
}
?>
