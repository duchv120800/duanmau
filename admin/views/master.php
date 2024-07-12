<?php require_once PATH_VIEW_ADMIN.'layout/header.php';?>
<?php 
    if($view=='login/login'){
        require PATH_VIEW_ADMIN.$view.'.php';
    }else{
?>
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary"> <!--begin::App Wrapper-->
    <div class="app-wrapper"> <!--begin::Header-->
        <nav class="app-header navbar navbar-expand bg-body"> <!--begin::Container-->
        <!-- start top bar -->
        <?php require_once PATH_VIEW_ADMIN.'layout/top_bar.php';?>
        <!-- end top bar -->
        
        </nav> <!--end::Header--> <!--begin::Sidebar-->
        
        <!-- start side bar -->
        <?php require_once PATH_VIEW_ADMIN.'layout/side_bar.php';?>
        <!-- end side bar -->

        <!-- start main content -->
        <?php require_once PATH_VIEW_ADMIN.$view.'.php'?>
        <!-- end main content -->
        
        <!-- start footer -->
        <?php require_once PATH_VIEW_ADMIN.'layout/footer.php';?>
        <!-- end footer -->

</body><!--end::Body-->

</html>
<?php
    }
?>