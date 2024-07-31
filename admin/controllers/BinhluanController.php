<?php
function ListBinhluan() {
    $view = 'binhluan/list';
    $title = 'Bình luận';
    $main_title = 'Danh sách bình luận';

    $listBinhluan = getAllBinhluan();

    require PATH_VIEW_ADMIN . "master.php";
}

function UpdateBinhluan() {
    $id = $_GET['id'] ?? 0;
    $binhluan = getBinhluanById($id);

    if (!$binhluan) {
        die('Bình luận không tồn tại.');
    }

    $view = 'binhluan/update';
    $title = 'Chỉnh sửa Bình luận';
    $main_title = 'Chỉnh sửa Bình luận';

    require PATH_VIEW_ADMIN . "master.php";
}

function SaveEditBinhluan() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = intval($_POST['id']);
        $status = intval($_POST['trangthai']);

        updateBinhluanStatus($id, $status);

        header('Location: ' . BASE_URL_ADMIN . '?act=ds_bl');
        exit();
    }
}

function DeleteBinhluan() {
    $id = $_GET['id'] ?? 0;

    if ($id) {
        try {
            $sql = "DELETE FROM binhluan WHERE id = :id";
            $stmt = $GLOBALS['conn']->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }

    header('Location: ' . BASE_URL_ADMIN . '?act=ds_bl');
    exit();
}

?>
