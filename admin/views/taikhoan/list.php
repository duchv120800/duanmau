<main class="app-main"> <!--begin::App Content Header-->
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
        <div id="alert" class="alert <?php if($alert){echo ' alert-success';}else{echo ' alert-danger';}?>" <?php if(isset($notification) && ($notification != "")){echo "";}else{echo "hidden";}?>>
            <?php 
                if(isset($notification) && ($notification != "")) {
                    echo $notification;
            ?>
            <script>hidden_notification();</script>
            <?php
                }
            ?>
        </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="row">
                                <h3 class="col">
                                    Danh sách tài khoản
                                    <a href="<?= BASE_URL_ADMIN . '?act=add_tk' ?>" class="btn btn-success">Thêm mới</a>
                                </h3>
                            </div>
                        </div> <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered" style="text-align:center">
                                <thead>
                                    <tr class="table-primary">
                                        <th style="width: 10px">Stt</th>
                                        <th>Tên</th>
                                        <th>Email</th>
                                        <th>Số điện thoại</th>
                                        <th>Địa chỉ</th>
                                        <th>Vai trò</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $stt = 0;
                                    foreach ($listUsers as $user) :  $stt++; ?>
                                        <tr class="align-middle">
                                            <td><?= $stt ?></td>
                                            <td><?= $user['tendangnhap'] ?></td>
                                            <td><?= $user['email'] ?></td>
                                            <td><?= $user['sodienthoai'] ?></td>
                                            <td><?= $user['diachi'] ?></td>
                                            <td>
                                                <?= $user['vaitro'] ? '<span class="badge text-bg-info">Quản trị</span>'
                                                    : '<span class="badge text-bg-warning">Khách Hàng</span>' ?>
                                            </td>
                                            <td>
                                                <a href="<?= BASE_URL_ADMIN . '?act=detail_tk&id=' . $user['id'] ?>" class="btn text-bg-success"><i class="fas fa-solid fa-eye"></i></a>
                                                <a href="<?= BASE_URL_ADMIN . '?act=update_tk&id=' . $user['id'] ?>" class="btn text-bg-primary"><i class="fa fa-pen"></i></a>
                                                <a href="<?= BASE_URL_ADMIN . '?act=delete_tk&id=' . $user['id'] ?>" class="btn text-bg-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div> <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 justify-content-center">
                                <li class="page-item"> <a class="page-link" href="<?= BASE_URL_ADMIN ?>?act=ds_tk&page=<?= (int)$current_page - 1 ?>">&laquo;</a> </li>
                                <li class="page-item"> <a class="page-link <?= $current_page == 1 ? 'active' : '' ?>" href="<?= BASE_URL_ADMIN . '?act=ds_tk&page=1' ?>">1</a> </li>
                                <li class="page-item"> <a class="page-link <?= $current_page == 2 ? 'active' : '' ?>" href="<?= BASE_URL_ADMIN . '?act=ds_tk&page=2' ?>">2</a> </li>
                                <li class="page-item"> <a class="page-link <?= $current_page == 3 ? 'active' : '' ?>" href="<?= BASE_URL_ADMIN . '?act=ds_tk&page=3' ?>">3</a> </li>
                                <li class="page-item"> <a class="page-link" href="<?= BASE_URL_ADMIN ?>?act=ds_tk&page=<?= (int)$current_page + 1 ?>">&raquo;</a> </li>
                            </ul>
                        </div>
                    </div> <!-- /.card -->
                </div> <!--end::Row-->
            </div> <!--end::Container-->
        </div> <!--end::App Content Header--> <!--begin::App Content-->

</main> <!--end::App Main--> <!--begin::Footer-->