<header>
    <div id="sticky-menu" class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12 header-bottom-bg">
                    <div class="floatleft">
                        <a href="<?= BASE_URL ?>">
                            <img src="<?= BASE_URL ?>uploads/logo.png" width="100" height="55" alt="DAH" />
                        </a>
                    </div>
                    <div class="mainmenu text-center floatleft">
                        <nav>
                            <ul>
                                <li>
                                    <a href="<?= BASE_URL ?>">Trang chủ</a>
                                </li>
                                <li>
                                    <a href="">Danh mục</a>
                                    <ul>
                                        <?php foreach ($danhmucs as $danhmuc) : ?>
                                            <li>
                                                <a href="<?= BASE_URL ?>?act=sanpham&id_danhmuc=<?= $danhmuc['id'] ?>"><i class="fa fa-arrow-circle-o-up"></i> <?= $danhmuc['ten'] ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                                </li>
                                <li><a href="<?= BASE_URL ?>?act=sanpham&id_danhmuc=0">Sản phẩm</a></li>
                                <li><a href="blog-1.html">Giới thiệu</a></li>
                                <li>
                                    <a href="contact.html">Liên hệ</a>
                                </li>
                                <li><a href="">Tài khoản</a>
                                    <ul>
                                        <?php if (isset($_SESSION['taikhoan']['tendangnhap'])) { ?>
                                            <li>
                                                <a href="<?= BASE_URL ?>?act=hoso&id=<?= $_SESSION['taikhoan']['id_taikhoan'] ?>">Hồ sơ</a>
                                                <a href="<?= BASE_URL ?>?act=dangxuat">Đăng xuất</a>
                                            </li>
                                        <?php } else { ?>
                                            <li>
                                                <a href="<?= BASE_URL ?>?act=dangnhap">Đăng nhập</a>
                                            </li>
                                        <?php } ?>
                                        <li>
                                            <a href="<?= BASE_URL ?>?act=dangky">Đăng ký</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- mobile menu start -->
                    <div class="mobile-menu-area">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li>
                                        <a href="index.html">Trang chủ</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">products</a>
                                        <ul>
                                            <li>
                                                <h5>men’s bikes</h5>
                                                <ul>
                                                    <li>
                                                        <a href="#">T Mounten bike</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">M Mounten bike</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h5>Accessories</h5>
                                                <ul>
                                                    <li>
                                                        <a href="#">Giro Cipher Helmet</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Mountain Helmet</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h5>women’s bikes</h5>
                                                <ul>
                                                    <li>
                                                        <a href="#">Mount POW bike</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Mount POW bike</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">about</a></li>
                                    <li><a href="blog-1.html">blog</a>
                                        <ul>
                                            <li>
                                                <a href="blog-1.html">Blog Style One</a>
                                            </li>
                                            <li>
                                                <a href="blog-2.html">Blog Style Two</a>
                                            </li>
                                            <li>
                                                <a href="single-blog.html">Single Blog</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pages</a>
                                        <ul>
                                            <li>
                                                <a href="login.html">Login</a>
                                            </li>
                                            <li>
                                                <a href="my-account.html">My account</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact.html">contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- mobile menu end -->
                    <div class="cart-menu-area floatright">
                        <ul>
                            <li><a href="<?= BASE_URL ?>?act=giohang"><i class="pe-7s-shopbag"></i> <span style="color:red;" id="tongSanpham"><?= !empty($_SESSION['giohang']) ? count($_SESSION['giohang']) : 0 ?></span></a>
                                <!-- <ul class="cart-menu">
                                    <li>
                                        <a href=""><img src="<?= BASE_URL ?>client/template/rideo/rideo/img/cart/1.png" width="85" height="81" alt="" /></a>
                                        <div class="cart-menu-title">
                                            <a href="cart.html">
                                                <h5>Mount POW C058 FG </h5>
                                            </a>
                                            <span>1 x $2500</span>
                                        </div>
                                        <span class="cancel-item"><i class="fa fa-close"></i></span>
                                    </li>
                                    <li>
                                        <a href="cart.html"><img src="<?= BASE_URL ?>client/template/rideo/rideo/img/cart/1.png" width="85" height="81" alt="" /></a>
                                        <div class="cart-menu-title">
                                            <a href="cart.html">
                                                <h5>Mount POW C058 FG </h5>
                                            </a>
                                            <span>1 x $2500</span>
                                        </div>
                                        <span class="cancel-item"><i class="fa fa-close"></i></span>
                                    </li>
                                    <li class="cart-menu-btn">
                                        <a href="<?= BASE_URL ?>?act=giohang">Tới giỏ hàng</a>
                                        <a href="checkout.html">Thanh toán</a>
                                    </li>
                                </ul> -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>