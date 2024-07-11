<main class="app-main"> <!--begin::App Content Header-->
    <?php require_once PATH_VIEW_ADMIN . 'layout/component/main_top.php'; ?>
    <div class="app-content"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <table class="table">
                <tr>
                    <th>Tên cột</th>
                    <th>Trường dữ liệu</th>
                </tr>
                <?php foreach ($sanpham as $fieldName => $value) : ?>
                    <tr>
                        <td><?= ucfirst($fieldName) ?></td>
                        <td>
                            <?php
                            switch ($fieldName) {
                                case 'matkhau':
                                    echo "*********";
                                    break;

                                case 'hinhanh':
                                    echo '<img src="'.BASE_URL.'uploads/'.$sanpham['hinhanh'].
                                    '" style="width:100px; height:100px objecfit=contain;" alt="Lỗi hiển thị">';
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
            <a href="<?= BASE_URL_ADMIN . '?act=ds_sp' ?>" class="btn btn-info">Danh sách sản phẩm</a>
        </div> <!--end::Container-->
    </div> <!--end::App Content-->
</main> <!--end::App Main--> <!--begin::Footer-->