<?php
    include './commons/env.php';
    include './commons/global.php';
    include './commons/connect.php';
    //require tất cả file trong controllers và models
    require_file(PATH_CONTROLLER);
    require_file(PATH_MODEL);

    $act=$_GET["act"] ?? '/';

    match($act){
        '/'=> HomeIndex()
    };
?>