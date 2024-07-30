<!-- page banner area start -->
<div class="page-banner">
    <img src="<?= BASE_URL ?>client/template/rideo/rideo/img/slider/bg1.jpg" width="1903" height="297" alt="Page Banner" />
</div>
<!-- page banner area end -->
<!-- product details area start -->
<section class="product-details section-padding-top">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div class="left">
                    <!-- Single-pro-slider Big-photo start -->
                    <div class="large-slider zoom-gallery">
                        <?php foreach ($anhmotas as $anhmota) : ?>
                            <div>
                                <img src="<?= BASE_URL ?>uploads/<?= $anhmota['tenanh'] ?>" width="555" height="587" alt="" />
                                <a href="<?= BASE_URL ?>uploads/<?= $anhmota['tenanh'] ?>" title="Product Title"><img src="<?= BASE_URL ?>uploads/<?= $anhmota['tenanh'] ?>" width="21" height="22" alt="" /></a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- Single-pro-slider Big-photo end -->

                    <!-- Single-pro-slider Small-photo start -->
                    <div class="thumb-slider slider-nav">
                        <?php foreach ($anhmotas as $anhmota) : ?>
                            <div>
                                <img src="<?= BASE_URL ?>uploads/<?= $anhmota['tenanh'] ?>" width="117" height="123" alt="" />
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- Single-pro-slider Small-photo end -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="right">
                    <div class="singl-pro-title">
                        <h3><?= $sanpham['ten'] ?></h3>
                        <h3><em><del><?= number_format($sanpham['gia'], 0, ',', '.') ?>đ</del>
                                <span style="color: #ff6600"><?= number_format($sanpham['giakhuyenmai'], 0, ',', '.') ?>đ</em></span></h1>
                            <p><?= substr($sanpham['mota'], 0, 300) ?>...</p>
                            <!-- <hr /> -->
                            <!-- <div class="color-brand clearfix">
									<div class="s-select">
										<div class="custom-select">
											<select class="form-control">
												<option>Color</option>
												<option>Red </option>
												<option>Green </option>
												<option>Blue</option>
											</select>
										</div>
									</div>
									<div class="s-select s-plus-minus">
										<form action="#">
											<div class="plus-minus">
												<a class="dec qtybutton">-</a>
												<input type="text" value="02" name="qtybutton" class="plus-minus-box">
												<a class="inc qtybutton">+</a>
											</div>
										</form>
									</div>
								</div> -->
                            <div class="actions-btn">

                                <ul class="clearfix text-center">
                                    <li>
                                        <button class="addToCard" data-id="<?= $sanpham['id'] ?>" onclick="Test()">
                                            <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <hr />
                            <div class="specific-pro">
                                <ul>
                                    <li class="specific-pro-title">
                                        Thông số sản phẩm
                                    </li>
                                    <li>
                                        <span>Danh mục</span>
                                        <p><?= $sanpham['ten_danhmuc'] ?></p>
                                    </li>
                                    <li>
                                        <span>Thương hiệu</span>
                                        <p><?= $sanpham['thuonghieu'] ?></p>
                                    </li>
                                    <li>
                                        <span>Xuất xứ</span>
                                        <p><?= $sanpham['xuatxu'] ?></p>
                                    </li>
                                    <li>
                                        <span>Nồng độ</span>
                                        <p><?= $sanpham['nongdo'] ?></p>
                                    </li>
                                    <li>
                                        <span>Độ lưu hương</span>
                                        <p><?= $sanpham['doluuhuong'] ?></p>
                                    </li>
                                    <li>
                                        <span>Phong cách</span>
                                        <p><?= $sanpham['phongcach'] ?></p>
                                    </li>
                                    <li>
                                        <span>Số lượng</span>
                                        <p style="<?= $sanpham['soluong'] == 0 ? 'color:red' : '' ?>"><?= $sanpham['soluong'] == 0 ? 'Hết hàng' : $sanpham['soluong'] ?></p>
                                    </li>
                                </ul>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="pro-des-tab">
                    <div class="tab-menu">
                        <ul class="nav">
                            <li>
                                <a class="active" data-bs-toggle="tab" href="#des">Mô tả sản phẩm</a>
                            </li>
                            <li>
                                <a data-bs-toggle="tab" href="#reviews">Bình luận</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content margin50">
                        <div class="tab-pane fade show active" id="des">
                            <div class="des-text">
                                <p><?= $sanpham['mota'] ?></p><br />
                            </div>
                        </div>
                        <div class="tab-pane fade single-blog-page" id="reviews">
                            <div class="leave-comment">
                                <?php foreach ($binhluans as $binhluan):?>
                                    <div>
                                    <h5 style="display: inline-block;"><?=$binhluan['tentaikhoan']?> </h5>
                                    <p style="display: inline-block;"> <?=$binhluan['ngaybinhluan']?></p>
                                    </div>
                                <p><?=$binhluan['noidung']?></p>
                                <hr>
                                <?php endforeach;?>
                                <?php
                                if(isset($_SESSION['taikhoan']['tendangnhap'])){
                                ?>
                                <form action="?act=sp_detail&id_sp=<?= $sanpham['id'] ?>" method="POST">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="input-text">
                                                <textarea name="noidung" id="comment" placeholder="Nhập nội dung bình luận" rows="4"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="submit-text">
                                                <input type="submit" name="binhluan" value="Bình luận">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <?php
                                }else{
                                    echo "<div style='color:#ff6600'>Bạn cần đang nhập để bình luận!</div>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product details area end -->
<!-- related product section start -->
<section class="related-area riding-one">
    <div class="container">
        <div class="related-title">
            <h5>Sản phẩm liên quan</h5>
        </div>
        <div class="row text-center my-5">
            <div class="col-12">
                <div class="related-slider single-products">
                    <?php foreach ($sanphamlienquans as $sanphamlienquan) : ?>
                        <div class="product-item-wrap">
                            <div class="product-item">
                                <div class="pro-img">
                                    <a href="<?= BASE_URL ?>?act=sp_detail&id_sp=<?= $sanphamlienquan['id'] ?>"><img src="<?= BASE_URL ?>uploads/<?= $sanphamlienquan['hinhanh'] ?>" width="263" height="299" alt="Product" /></a>
                                    <div class="tag-n-s">
                                        <span>Sale</span>
                                    </div>
                                </div>
                                <div class="riding-title clearfix">
                                    <div class="product-title text-start floatleft">
                                        <a href="<?= BASE_URL ?>?act=sp_detail&id_sp=<?= $sanphamlienquan['id'] ?>">
                                            <h3 class="title"><?= $sanphamlienquan['ten'] ?></h3>
                                        </a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star gray-star"></i>
                                        </div>
                                        <p><del><?= number_format($sanphamlienquan['gia'], 0, ',', '.') ?>đ</del> <span style="color:#ff6600; font-size:large"><?= number_format($sanphamlienquan['giakhuyenmai'], 0, ',', '.') ?>đ</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- related product section end -->