<div class="page-banner">
    <img src="<?=BASE_URL.'uploads/banner.jpg'?>" class="banner-child" alt="Page Banner" />
</div>
<!-- page banner area end -->   
<!-- cart page content section start -->
<section class="login-page section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="single-check">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="single-input p-bottom50 clearfix">
                                <div class="col-12">
                                    <div class="check-title">
                                        <h3>Đăng nhập</h3>
                                    </div>
                                </div>
                                <div id="alert" class="alert <?php if ($alert) {echo ' alert-success';} else {echo ' alert-danger';} ?>" <?php if (isset($notification) && ($notification != "")) {echo "";} else {echo "hidden";} ?> style="text-align:center">
                                <?php
                                if (isset($notification) && ($notification != "")) {
                                    echo $notification;
                                ?>
                                    <script>
                                        hidden_notification();
                                    </script>
                                <?php
                                }
                                ?>
                            </div>
                                <div class="col-12">
                                    <label>Tên đăng nhập :</label>
                                    <div class="input-text">
                                        <input type="text" name="tendangnhap" placeholder="Nhập tên đăng nhập" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label>Mật khẩu :</label>
                                    <div class="input-text">
                                        <input type="password" name="matkhau" placeholder="Nhập tên mật khẩu" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="forget">
                                        <a href="#">Quên mật khẩu</a>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="submit-text">
                                        <input type="submit" name="dangnhap" value="Đăng nhập">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="single-input p-bottom50 clearfix">
                    <form action="https://template.hasthemes.com/rideo/rideo/my-account.html">
                        <div class="row">
                            <div class="col-12">
                                <div class="check-title">
                                    <h3>New Customer</h3>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>First Name:</label>
                                <div class="input-text">
                                    <input type="text" name="name" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Last Name:</label>
                                <div class="input-text">
                                    <input type="text" name="name" />
                                </div>
                            </div>
                            <div class="col-12">
                                <label>Address:</label>
                                <div class="input-text">
                                    <input type="text" name="address" />
                                </div>
                            </div>
                            <div class="col-12">
                                <label>City/Town:</label>
                                <div class="input-text">
                                    <input type="text" name="city" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Email:</label>
                                <div class="input-text">
                                    <input type="text" name="email" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Phone:</label>
                                <div class="input-text">
                                    <input type="text" name="phone" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="billing-checkbox">
                                    <input type="checkbox" name="billing-address" value="1" class="checkbox">
                                    <label>Sign up for our newsletter! </label>
                                </div>
                                <div class="submit-text">
                                    <input type="submit" name="submit" value="Register">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- cart page content section end -->