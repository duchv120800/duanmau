<header>
    <!-- <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="left floatleft">
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i>
                                +11 (019) 25184203
                            </li>
                            <li>
                                <i class="fa fa-envelope-o"></i>
                                raid@mail.com
                            </li>
                        </ul>
                    </div>
                    <div class="right floatright">
                        <ul>
                            <li>
                                <form action="#">
                                    <button type="submit" aria-label="Right Align">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    <input type="search" placeholder="Search" />
                                </form>
                            </li>
                            <li>
                                <i class="fa fa-user"></i>
                                <a href="<?= BASE_URL ?>?act=taikhoan">Tài khoản</a>
                                <!-- <ul>
                                    <li>Đăng nhập</li>
                                    <li>Đăng ký</li>
                                </ul> -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <!-- </div> --> 
    <div id="sticky-menu" class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12 header-bottom-bg">
                    <div class="logo floatleft">
                        <a href="<?= BASE_URL ?>">
                            <img src="<?= BASE_URL ?>client/template/rideo/rideo/img/logo.png" width="139" height="60" alt="Rideo" />
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
                                                <a href="#"><i class="fa fa-arrow-circle-o-up"></i> <?= $danhmuc['ten'] ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                                </li>
                                <li><a href="#">Sản phẩm</a></li>
                                <li><a href="blog-1.html">Giới thiệu</a></li>
                                <li>
                                    <a href="contact.html">Liên hệ</a>
                                </li>
                                <li><a href="">Tài khoản</a>
                                    <ul>
                                        <?php if (isset($_SESSION['tendangnhap'])) { ?>
                                            <li>
                                                <a href="<?= BASE_URL ?>?act=hoso&id=<?=$_SESSION['id']?>">Hồ sơ</a>
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
                            <li><a href="#"><i class="pe-7s-shopbag"></i> <span>2</span></a>
                                <ul class="cart-menu">
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
                                        <a href="<?= BASE_URL ?>?act=giohang">view cart</a>
                                        <a href="checkout.html">checkout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>