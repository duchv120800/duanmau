<main class="app-main"> <!--begin::App Content Header-->
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="row">
                                <h3 class="col">
                                    Danh sách đơn hàng
                                    <a href="<?= BASE_URL_ADMIN . '?act=add_dh' ?>" class="btn btn-success">Thêm mới</a>
                                </h3>
                            </div>
                        </div> <!-- /.card-header -->
                        <div class="card-body">
                        <div id="alert" class="alert <?php if($alert){echo ' alert-success';}else{echo ' alert-danger';}?>" <?php if(isset($notification) && ($notification != "")){echo "";}else{echo "hidden";}?> style="text-align:center">
                            <?php 
                                if(isset($notification) && ($notification != "")) {
                                    echo $notification;
                            ?>
                            <script>hidden_notification();</script>
                            <?php
                                }
                            ?>
                        </div>
                            <table class="table table-bordered" style="text-align:center">
                                <thead>
                                    <tr class="table-primary">
                                        <th style="width: 10px">Stt</th>
                                        <th>Mã đơn hàng</th>
                                        <th>Tên người đặt</th>
                                        <th>Tên người nhận</th>
                                        <th>Số điện thoại nhận hàng</th>
                                        <th>Tổng tiền</th>
                                        <th>Trạng thái</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $stt = 0;
                                    foreach ($listDonhang as $donhang) :  $stt++; ?>
                                        <tr class="align-middle" style="text-align:center">
                                            <td><?= $stt ?></td>
                                            <td><?= $donhang['madonhang'] ?></td>
                                            <td><?= $donhang['tentaikhoan'] ?></td>
                                            <td><?= $donhang['tennguoinhan'] ?></td>
                                            <td><?= $donhang['sodienthoainguoinhan'] ?></td>
                                            <td><?= number_format($donhang['tongtien'], 0, ',', '.')?>đ</td>
                                            <td><?= $donhang['tentrangthai'] ?></td>

                                            <td>
                                                <a href="<?= BASE_URL_ADMIN . '?act=detail_dh&id=' . $donhang['id'] ?>" class="btn text-bg-success"><i class="fas fa-solid fa-eye"></i></a>
                                                <a href="<?= BASE_URL_ADMIN . '?act=update_dh&id=' . $donhang['id'] ?>" class="btn text-bg-primary"><i class="fa fa-pen"></i></a>
                                                <a href="<?= BASE_URL_ADMIN . '?act=delete_dh&id=' . $donhang['id'] ?>" class="btn text-bg-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div> <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-end">
                                <li class="page-item"> <a class="page-link" href="#">&laquo;</a> </li>
                                <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                                <li class="page-item"> <a class="page-link" href="#">2</a> </li>
                                <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                                <li class="page-item"> <a class="page-link" href="#">&raquo;</a> </li>
                            </ul>
                        </div>
                    </div> <!-- /.card -->
                </div> <!--end::Row-->
            </div> <!--end::Container-->
        </div> <!--end::App Content Header--> <!--begin::App Content-->

</main> <!--end::App Main--> <!--begin::Footer-->