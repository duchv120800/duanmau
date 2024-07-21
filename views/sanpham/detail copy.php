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
                    <!-- <div class="thumb-slider slider-nav">
                        <?php foreach ($anhmotas as $anhmota) : ?>
                            <div>
                                <img src="<?= BASE_URL ?>uploads/<?= $anhmota['tenanh'] ?>" width="117" height="123" alt="" />
                            </div>
                        <?php endforeach; ?>
                    </div> -->
                    <!-- Single-pro-slider Small-photo end -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="right">
                    <div class="singl-pro-title">
                        <h3><?= $sanpham['ten'] ?></h3>
                        <h3><em><span style="text-decoration-line: line-through; color:red"><?= number_format($sanpham['gia'], 0, ',', '.') ?>đ</span>
                                <?= number_format($sanpham['gia'], 0, ',', '.') ?>đ</em></h1>
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
                                        <a href="cart.html"><i class="fa fa-shopping-cart"></i> add to cart</a>
                                    </li>
                                    <li>
                                        <a href="cart.html"><i class="fa fa-heart-o"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-compress"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-share-alt"></i></a>
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
                            <li>
                                <a data-bs-toggle="tab" href="#tags">TAGS</a>
                            </li>
                            <li>
                                <a data-bs-toggle="tab" href="#size">SIZE GUIDE</a>
                            </li>
                            <li>
                                <a data-bs-toggle="tab" href="#custom">CUSTOM TAB</a>
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
                                <h4>leave your review</h4>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-text">
                                                <input type="text" name="name" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-text">
                                                <input type="text" name="email" placeholder="Email" required="">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="input-text">
                                                <textarea name="comment" id="comment" placeholder="Comment" rows="4"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="submit-text">
                                                <input type="submit" name="submit" value="submit comments">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tags">
                            <div class="tag-btn clearfix">
                                <a href="#">Bike</a>
                                <a href="#">Wheel</a>
                                <a href="#">Aparel</a>
                                <a href="#">GPS</a>
                                <a href="#">Track</a>
                                <a href="#">Accessories</a>
                                <a href="#">Men</a>
                                <a href="#">Women</a>
                                <a href="#">Power</a>
                            </div>
                        </div>
                        <div class="tab-pane fade in" id="size">
                            <div class="size-btn clearfix">
                                <a href="#">X</a>
                                <a href="#">m</a>
                                <a href="#">l</a>
                                <a href="#">Xm</a>
                                <a href="#">xxl</a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="custom">
                            <div class="des-text">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero.</p><br />
                                <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
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
                                        <p><span><?= number_format($sanpham['gia'], 0, ',', '.') ?>đ</span> <del><?= number_format($sanpham['giakhuyenmai'], 0, ',', '.') ?>đ</del></p>
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