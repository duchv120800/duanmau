<?php
function ListSanPham()
{
    $view = 'sanpham/list';
    $title = 'Sản phẩm';
    $main_title = 'Sản phẩm';
    $listSanpham = getAllSanPham();
    require PATH_VIEW_ADMIN . "master.php";
}

function DetailSanPham($id)
{
    $view = 'sanpham/detail';
    $title = 'Xem chi tiết';
    $main_title = 'Sản phẩm';
    $sanpham = getOneSanPham($id);
    if (empty($sanpham)) {
        e404();
    }
    require PATH_VIEW_ADMIN . "master.php";
}

function AddSanPham()
{
    $listDanhmuc = getAll('danhmuc');
    $view = 'sanpham/add';
    $title = 'Thêm mới';
    $main_title = 'Thêm Sản phẩm';
    if (!empty($_POST['themmoi'])) {
        $hinhanh = $_FILES['hinhanh']['name'];

        $target_dir = '../uploads/';
    
        $target_file = $target_dir . basename($_FILES['hinhanh']['name']);
        if (move_uploaded_file($_FILES['hinhanh']['tmp_name'], $target_file)) {
                // echo "Bạn đã upload ảnh thành công";
        } else {
                // echo "Upload ảnh không thành công";
        }
        $data = [
            "ten" => $_POST['ten'],
            "gia" => $_POST['gia'],
            "hinhanh" => $hinhanh,
            "giakhuyenmai" => $_POST['giakhuyenmai'],
            "mota" => $_POST['mota'],
            "luotxem" => $_POST['luotxem'],
            "id_danhmuc" => $_POST['id_danhmuc'],
        ];

        insert('sanpham', $data);
        header('location:' . BASE_URL_ADMIN . '?act=ds_sp');
        exit();
    }
    require PATH_VIEW_ADMIN . "master.php";
}

function UpdateSanPham($id)
{
    $listDanhmuc = getAll('danhmuc');
    $view = 'sanpham/update';
    $title = 'Cập nhật';
    $main_title = 'Cập nhật Sản phẩm';
    $sanpham = getOne('sanpham', $id);
    $old_hinhanh = $sanpham['hinhanh'];
    if (!empty($_POST['update'])) {
        $hinhanh = $_FILES['hinhanh']['name'];

        if($hinhanh==''){
            $hinhanh=$old_hinhanh;
        }

        $target_dir = '../uploads/';
    
        $target_file = $target_dir . basename($_FILES['hinhanh']['name']);
        if (move_uploaded_file($_FILES['hinhanh']['tmp_name'], $target_file)) {
                // echo "Bạn đã upload ảnh thành công";
        } else {
                // echo "Upload ảnh không thành công";
        }
        $data = [
            "ten" => $_POST['ten'],
            "gia" => $_POST['gia'],
            "hinhanh" => $hinhanh,
            "giakhuyenmai" => $_POST['giakhuyenmai'],
            "mota" => $_POST['mota'],
            "luotxem" => $_POST['luotxem'],
            "id_danhmuc" => $_POST['id_danhmuc'],
        ];

        update('sanpham', $id, $data);
        header('location:' . BASE_URL_ADMIN . '?act=ds_sp');
        exit();
    }
    require PATH_VIEW_ADMIN . "master.php";
}

function DeleteSanPham($id)
{
    $sanpham = delete('sanpham', $id);

    $view = 'sanpham/list';
    $title = 'Sản phẩm';
    $main_title = 'Sản phẩm';
    $listSanpham = getAllSanPham();
    require PATH_VIEW_ADMIN . "master.php";
}
