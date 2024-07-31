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
                                    Danh sách Bình luận
                                </h3>
                            </div>
                        </div> <!-- /.card-header -->
                        <div class="card-body">
                        <table class="table table-bordered" style="text-align:center">
                            <thead>
                                <tr class="table-primary">
                                    <th style="width: 10px">Stt</th>
                                    <th>Tên Người dùng</th>
                                    <th>Tên Đăng nhập</th>
                                    <th>Tên Sản Phẩm</th>
                                    <th>Ngày bình luận</th>
                                    <th>Nội dung bình luận</th>
                                    <th>Trạng thái</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $stt = 0; ?>
                                <?php foreach ($listBinhluan as $binhluan) : $stt++; ?>
                                    <tr class="align-middle">
                                        <td><?= htmlspecialchars($stt) ?></td>
                                        <td><?= htmlspecialchars($binhluan['ten_taikhoan']) ?></td>
                                        <td><?= htmlspecialchars($binhluan['tendangnhap']) ?></td>
                                        <td><?= htmlspecialchars($binhluan['ten_sanpham']) ?></td>
                                        <td><?= htmlspecialchars($binhluan['ngaybinhluan']) ?></td>
                                        <td><?= htmlspecialchars($binhluan['noidung']) ?></td>
                                        <td>
                                            <!-- Hiển thị trạng thái -->
                                            <?= $binhluan['trangthai'] == 1 ? 
                                                '<span class="badge text-bg-info">Hiện</span>' :
                                                '<span class="badge text-bg-warning">Ẩn</span>' ?>
                                        </td>
                                        <td>
                                        <a href="<?= BASE_URL_ADMIN . '?act=update_bl&id=' . $binhluan['id'] ?>" class="btn text-bg-primary">
                                            <i class="fa fa-pen"></i>
                                        </a>
                                        <!-- Xóa bình luận -->
                                        <a href="<?= BASE_URL_ADMIN . '?act=delete_bl&id=' . $binhluan['id'] ?>" class="btn text-bg-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa bình luận này?');">
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