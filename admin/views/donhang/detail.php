<main class="app-main"> <!--begin::App Content Header-->
    <?php require_once PATH_VIEW_ADMIN . 'layout/component/main_top.php'; ?>
    <div class="app-content"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <table class="table">
                <tr>
                    <th>Tên cột</th>
                    <th>Trường dữ liệu</th>
                </tr>
                <?php foreach ($donhang[0] as $fieldName => $value) : ?>
                    
                    <tr>
                        <td><?= ucfirst($fieldName) ?></td>
                        <td>
                            <?php
                            echo $value;
                            ?>
                        </td>
                    </tr>
                <?php endforeach ?>

            </table>
            <a href="<?= BASE_URL_ADMIN . '?act=ds_dh' ?>" class="btn btn-info">Danh sách đơn hàng</a>
        </div> <!--end::Container-->
    </div> <!--end::App Content-->
</main> <!--end::App Main--> <!--begin::Footer-->