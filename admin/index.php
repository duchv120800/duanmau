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
        // start taikhoan
        'ds_tk'=>ListTaiKhoan(),
        'detail_tk'=>DetailTaikhoan($_GET['id']),
        'add_tk'=>AddTaiKhoan(),
        'update_tk'=>UpdateTaiKhoan($_GET['id']),
        'delete_tk'=>DeleteTaiKhoan($_GET['id']),
        // end tai khoan
        // start danh muc
        'ds_dm'=>ListDanhMuc(),
        'detail_dm'=>DetailDanhMuc($_GET['id']),
        'add_dm'=>AddDanhMuc(),
        'update_dm'=>UpdateDanhMuc($_GET['id']),
        'delete_dm'=>DeleteDanhMuc($_GET['id']),
        // end danh muc
        // 'dsdm'=>ListDanhMuc(),
        // 'dssp'=>ListSanPham(),
    };
?>