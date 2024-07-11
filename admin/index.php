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
        'ds_tk'=>ListTaiKhoan(),
        'detail_tk'=>DetailTaikhoan($_GET['id']),
        'add_tk'=>AddTaiKhoan(),
        'update_tk'=>UpdateTaiKhoan($_GET['id']),
        'delete_tk'=>DeleteTaiKhoan($_GET['id']),
        // 'dsdm'=>ListDanhMuc(),
        // 'dssp'=>ListSanPham(),
    };
?>