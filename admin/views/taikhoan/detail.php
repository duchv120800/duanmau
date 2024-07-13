<main class="app-main"> <!--begin::App Content Header-->
    <?php require_once PATH_VIEW_ADMIN . 'layout/component/main_top.php'; ?>
    <div class="app-content"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <table class="table">
                <tr>
                    <th>Tên cột</th>
                    <th>Trường dữ liệu</th>
                </tr>
                <?php foreach ($user as $fieldName => $value) : ?>
                    <tr>
                        <td><?= ucfirst($fieldName) ?></td>
                        <td>
                            <?php
                            switch ($fieldName) {
                                case 'matkhau':
                                    echo "*********";
                                    break;

                                case 'vaitro':
                                    echo $value ?
                                        '<span class="badge text-bg-info">Quản trị</span>' :
                                        '<span class="badge text-bg-warning">Khách Hàng</span>';
                                    break;
                                case 'gioitinh':
                                    echo $value ? 'Nam' : 'Nữ';
                                    break;
                                case 'anhdaidien':
                                    echo
                                    "<img src='" . BASE_URL . "uploads/" . $value . "' style='width:100px;height:100px;object-fit:contain;' alt='Ảnh lỗi'/>";
                                    break;
                                case 'gioitinh':
                                    echo $value ? 'Nam' : 'Nữ';
                                    break;
                                default:
                                    echo $value;
                                    break;
                            }
                            ?>
                        </td>
                    </tr>
                <?php endforeach ?>

            </table>
            <a href="<?= BASE_URL_ADMIN . '?act=ds_tk' ?>" class="btn btn-info">Danh sách tài khoản</a>
        </div> <!--end::Container-->
    </div> <!--end::App Content-->
</main> <!--end::App Main--> <!--begin::Footer-->