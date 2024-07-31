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
                            <h3 class="card-title">Chỉnh sửa bình luận</h3>
                        </div> <!-- /.card-header -->
                        <div class="card-body">
                            <form method="POST" action="<?= BASE_URL_ADMIN . '?act=save_edit' ?>">
                                <input type="hidden" name="id" value="<?= $binhluan['id'] ?>">
                                <div class="mb-3">
                                    <label for="trangthai" class="form-label">Trạng thái</label>
                                    <select name="trangthai" id="trangthai" class="form-select">
                                        <option value="1" <?= $binhluan['trangthai'] == 1 ? 'selected' : '' ?>>Hiện</option>
                                        <option value="0" <?= $binhluan['trangthai'] == 0 ? 'selected' : '' ?>>Ẩn</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Lưu</button>
                                <a href="<?= BASE_URL_ADMIN . '?act=ds_bl' ?>" class="btn btn-secondary">Quay lại</a>
                            </form>
                        </div> <!-- /.card-body -->
                    </div> <!-- /.card -->
                </div> <!--end::Row-->
            </div> <!--end::Container-->
        </div> <!--end::App Content Header--> <!--begin::App Content-->

</main> <!--end::App Main--> <!--begin::Footer-->
