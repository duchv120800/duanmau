<?php
function ListSanPham($current_page)
{
    $view = 'sanpham/list';
    $title = 'Sản phẩm';
    $main_title = 'Sản phẩm';
    $current_page;
    $listSanpham = getAllSanPham($current_page);
    require PATH_VIEW_ADMIN . "master.php";
}

function DetailSanPham($id)
{
    $view = 'sanpham/detail';
    $title = 'Xem chi tiết';
    $main_title = 'Sản phẩm';
    $sanpham = getOneSanPham($id);
    $anh_thumnail=getAnhSanPham($id);
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
            "soluong" => $_POST['soluong'],
            "mota" => $_POST['mota'],
            "luotxem" => $_POST['luotxem'],
            "thuonghieu" => $_POST['thuonghieu'],
            "xuatxu" => $_POST['xuatxu'],
            "phongcach" => $_POST['phongcach'],
            "doluuhuong" => $_POST['doluuhuong'],
            "nongdo" => $_POST['nongdo'],
            "sale" => $_POST['sale'],
            "id_danhmuc" => $_POST['id_danhmuc'],
        ];

        insert('sanpham', $data);
        $id_sanpham_moi=$GLOBALS['conn']->LastInsertId();

        $hinhanhs = $_FILES['hinhanhs']['name'];
        if($hinhanhs!=''){
            foreach($hinhanhs as $key => $value){
                if (move_uploaded_file($_FILES['hinhanhs']['tmp_name'][$key], $target_dir.$value)) {
                    $data_album[] = [
                        'id_sanpham' => $id_sanpham_moi,
                        'tenanh' => $value
                    ];
                } else {
                        // echo "Upload ảnh không thành công";
                }
            }
        }

        foreach ($data_album as $data){
            insert('anhsanpham', $data);
        }

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
    $anhsanpham = getAnhSanPham($id);
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
            "soluong" => $_POST['soluong'],
            "mota" => $_POST['mota'],
            "luotxem" => $_POST['luotxem'],
            "thuonghieu" => $_POST['thuonghieu'],
            "xuatxu" => $_POST['xuatxu'],
            "phongcach" => $_POST['phongcach'],
            "doluuhuong" => $_POST['doluuhuong'],
            "nongdo" => $_POST['nongdo'],
            "sale" => $_POST['sale'],
            "id_danhmuc" => $_POST['id_danhmuc'],
        ];

        update('sanpham', $id, $data);

        $hinhanhs = $_FILES['hinhanhs']['name'];
        $data_album=[];
        if(!empty(array_filter($hinhanhs))){
            DeleteAnhSanPham($id);
            foreach($hinhanhs as $key => $value){
                if (move_uploaded_file($_FILES['hinhanhs']['tmp_name'][$key], $target_dir.$value)) {
                    $data_album[] = [
                        'id_sanpham' => $id,
                        'tenanh' => $value
                    ];
                } else {
                        // echo "Upload ảnh không thành công";
                }
            }
        }

        foreach ($data_album as $data){
            insert('anhsanpham', $data);
        }

        header('location:' . BASE_URL_ADMIN . '?act=ds_sp');
        exit();
    }
    require PATH_VIEW_ADMIN . "master.php";
}

function DeleteSanPham($id)
{
    $donhang=getSanPhamLienQuan('chitietdonhang',$id);
    $anhsanpham=getSanPhamLienQuan('anhsanpham',$id);
    if(empty($donhang)&&empty($anhsanpham)){
        delete('sanpham', $id);
        $alert=true;
        $notification='Xóa sản phẩm thành công!';
    }else{
        $alert=false;
        $notification='Sản phẩm liên quan đến đơn hàng hoặc ảnh sản phẩm nên không thể xóa!';
    }

    $view = 'sanpham/list';
    $title = 'Sản phẩm';
    $main_title = 'Sản phẩm';
    $listSanpham = getAllSanPham($current_page=1);
    require PATH_VIEW_ADMIN . "master.php";
}
