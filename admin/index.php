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
        'dstk'=>ListTaiKhoan(),
        'addtk'=>AddTaiKhoan(),
        // 'dsdm'=>ListDanhMuc(),
        // 'dssp'=>ListSanPham(),
    };
?>