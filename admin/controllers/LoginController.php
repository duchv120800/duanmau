<?php
function DirLogin()
{
    $view = 'login/login';
    $title = 'login';
    if(!empty($_POST)){
        $data=[
            "tendangnhap" => $_POST['tendangnhap'],
            "matkhau" => $_POST['matkhau'],
        ];
        $user=Login($data);
        
        $_SESSION['tendangnhap']=$user['tendangnhap'];
        $_SESSION['id']=$user['id'];

        header('location:'.BASE_URL_ADMIN);
        exit(); 
    }
    require PATH_VIEW_ADMIN . "master.php";
}

function Logout()
{
    $view = 'login/login';
    $title = 'login';
    unset($_SESSION['tendangnhap']);
    unset($_SESSION['id']);

    require PATH_VIEW_ADMIN . "master.php";
}
