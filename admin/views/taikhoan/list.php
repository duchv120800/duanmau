<?php
            include "./main_top.php";
            include "./aside.php";
       ?>
        <main class="app-main"> <!--begin::App Content Header-->
            <div class="app-content-header"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col">
                                            <span class="card-title">Danh sách tài khoản</span>
                                            <a href="<?= BASE_URL_ADMIN.'?act=addtk'?>" class="btn btn-success">Thêm mới</a>
                                        </div>
                                    </div>
                                </div> <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">Stt</th>
                                                <th>Tên</th>
                                                <th>Email</th>
                                                <th>Số điện thoại</th>
                                                <th>Giới tính</th>
                                                <th>Địa chỉ</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $stt=0; foreach ($listUsers as $user):  $stt++;?>
                                            <tr class="align-middle">
                                                <td><?=$stt ?></td>
                                                <td><?=$user['tendangnhap']?></td>
                                                <td><?=$user['email'] ?></td>
                                                <td><?=$user['sodienthoai'] ?></td>
                                                <td><?php if($user['gioitinh']==1){ echo 'Nam';}else echo 'Nữ'; ?></td>
                                                <td><?=$user['diachi'] ?></td>
                                                <td>
                                                    <a href="" class="badge text-bg-success">Chi tiết</a>
                                                    <a href="" class="badge text-bg-primary">Sửa</a>
                                                    <a href="" class="badge text-bg-danger">Xóa</a>
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
        