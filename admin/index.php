<?php
    include '../commons/env.php';
    include '../commons/global.php';
    include '../commons/connect.php';
    include '../commons/crud.php';
    //require tất cả file trong controllers và models
    require_file(PATH_CONTROLLER_ADMIN);
    require_file(PATH_MODEL_ADMIN);
   
    $act=$_GET["act"] ?? '/';
    match($act){
        '/'=> DashboardIndex(),
        // start crud taikhoan
        'ds_tk'=>ListTaiKhoan(),
        'detail_tk'=>DetailTaikhoan($_GET['id']),
        'add_tk'=>AddTaiKhoan(),
        'update_tk'=>UpdateTaiKhoan($_GET['id']),
        'delete_tk'=>DeleteTaiKhoan($_GET['id']),
        // end tai khoan
        // start crud danh muc
        'ds_dm'=>ListDanhMuc(),
        'add_dm'=>AddDanhMuc(),
        'update_dm'=>UpdateDanhMuc($_GET['id']),
        'delete_dm'=>DeleteDanhMuc($_GET['id']),
        // end danh muc
        // start crud san pham
        'ds_sp'=>ListSanPham(),
        'detail_sp'=>DetailSanPham($_GET['id']),
        'add_sp'=>AddSanPham(),
        'update_sp'=>UpdateSanPham($_GET['id']),
        'delete_sp'=>DeleteSanPham($_GET['id']),
        // end san pham
    };
?>