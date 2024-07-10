<?php
    include '../commons/env.php';
    include '../commons/global.php';
    include '../commons/connect.php';
    //require tất cả file trong controllers và models
    require_file(PATH_CONTROLLER_ADMIN);
    require_file(PATH_MODEL_ADMIN);

    $act=$_GET["act"] ?? '/';
    include "./header.php";
    match($act){
        '/'=> DashboardIndex(),
        'dstk'=>ListTaiKhoan(),
    };
    include "./footer.php";
?>