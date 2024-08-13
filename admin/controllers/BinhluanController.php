<?php
function ListBinhluan($current_page) {
    $view = 'binhluan/list';
    $title = 'Bình luận';
    $main_title = 'Danh sách bình luận';
    $listBinhluan = getAllBinhluan($current_page);

    require PATH_VIEW_ADMIN . "master.php";
}

function UpdateBinhluan($id) {
    $binhluan = getBinhluanById($id);
    
    $view = 'binhluan/update';
    $title = 'Chỉnh sửa Bình luận';
    $main_title = 'Chỉnh sửa Bình luận';
    if(isset($_POST['updateBL'])){
        $trangthai=$_POST['trangthai'];
        updateBinhluanStatus($id, $trangthai);
        header('Location: ' . BASE_URL_ADMIN . '?act=ds_bl');
        exit();
    }
    require PATH_VIEW_ADMIN . "master.php";
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
