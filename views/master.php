<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from template.hasthemes.com/rideo/rideo/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jun 2024 08:22:48 GMT -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Nước hoa DAH</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="<?=BASE_URL?>uploads/logo.png">
	<link rel="apple-touch-icon" href="apple-touch-icon.html">
	<!-- Place favicon.ico in the root directory -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css" integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;1,400;1,500&amp;family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">
	<!-- all css here -->
	<!-- style css -->
	<link rel="stylesheet" href="<?= BASE_URL ?>client/template/rideo/rideo/style.css">
	<style>
		.slick-slide {
			height: auto !important;
		}

		.pro-img::after {
			width: auto !important;
		}

		.banner-child {
			width: 100%;
			height: 297px !important;
			object-fit: cover;
		}

		.mt-20 {
			margin-top: 20px !important;
		}

		.mb-20 {
			margin-bottom: 20px !important;
		}

		.img-circle {
			border-radius: 50%;
		}

		.img-fluid {
			width: 100%;
			height: auto;
		}

		.product-item:hover {
			/* border: 2px solid #ff6600 !important; */
			transform: scale(1.03);
			transition-duration: 0.5s;
			height: auto;
		}

		.addToCard {
			border: 2px solid #ff6600;
			border-radius: 3px;
			color: white;
			background-color: #ff6600;
			padding: 5px;
			font-weight: bold;
			text-transform: uppercase;
		}

		.spacing-table {
			border-collapse: collapse !important;
		}

		.ten_trang_thai_dh {
			color: black;
			border-left: 1px solid #8d7b7b;
			padding: 0 10px;
		}

		.active_tt {
			color: #ff6600;
			text-decoration: underline;
		}

		.btn_donhang {
			font-weight: 500;
		}
		.ghichu_dathang{
			width: 100% !important;
			border-color: #e6e8e9;
		}
		.input-text>input{
			color: black !important;
		}
		.items-dsc p {
			line-height: 150px !important;
		}

		.input-soluong{
			border: 2px solid #ddd;
			width: 40px;
			border-radius: 4px;
			font-size: large;
			font-weight: 400;
			margin-right: 20px;
		}
	</style>
</head>

<body>
	<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

	<!-- header section start -->
	<?php
	$danhmucs = getAllDanhmuc();
	require_once PATH_VIEW . 'layouts/patials/header.php';
	?>
	<!-- header section end -->

	<!-- featured section start -->
	<?php
	require_once PATH_VIEW . $view . '.php';
	?>
	<!-- popular-product section end -->
	<!-- blog section start -->

	<!-- blog section end -->
	<!-- quick view start -->

	<!-- quick view end -->
	<!-- footer section start -->
	<?php
	require_once PATH_VIEW . 'layouts/patials/footer.php';
	?>
	<!-- footer section end -->

	<!-- Scroll To Top -->
	<a class="scroll-to-top" href="#">
		<i class="fa fa-angle-double-up"></i>
	</a>

	<!-- all js here -->
	<!-- jquery latest version -->
	<script src="<?= BASE_URL ?>client/template/rideo/rideo/js/vendor/jquery-3.6.0.min.js"></script>
	<script src="<?= BASE_URL ?>client/template/rideo/rideo/js/vendor/jquery-migrate-3.3.2.min.js"></script>
	<!-- modernizr js -->
	<script src="<?= BASE_URL ?>client/template/rideo/rideo/js/vendor/modernizr-3.11.2.min.js"></script>
	<!-- bootstrap js -->
	<script src="<?= BASE_URL ?>client/template/rideo/rideo/js/bootstrap.bundle.min.js"></script>


	<!-- slick slider js -->
	<script src="<?= BASE_URL ?>client/template/rideo/rideo/js/slick.min.js"></script>
	<!-- jquery-ui js -->
	<script src="<?= BASE_URL ?>client/template/rideo/rideo/js/jquery-ui.min.js"></script>
	<!-- magnific-popup js -->
	<script src="<?= BASE_URL ?>client/template/rideo/rideo/js/magnific-popup.min.js"></script>
	<!-- countdown js -->
	<script src="<?= BASE_URL ?>client/template/rideo/rideo/js/countdown.js"></script>
	<!-- meanmenu js -->
	<script src="<?= BASE_URL ?>client/template/rideo/rideo/js/jquery.meanmenu.js"></script>
	<!-- main js -->
	<script src="<?= BASE_URL ?>client/template/rideo/rideo/js/main.js"></script>

	<!-- start ajax -->
	<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
	<script>
		let tongSanpham = document.getElementById('tongSanpham');

		function addGiohang(idSanpham, tenSanpham, giaSanpham) {
			let soluongSanpham = $('#soluongsp').val();
			if (soluongSanpham <= 0) {
				soluongSanpham = 1;
			}
			
			$.ajax({
				type: "POST",
				url: "<?= BASE_URL ?>models/giohang.php",
				data: {
					id: idSanpham,
					ten: tenSanpham,
					gia: giaSanpham,
					soluong: soluongSanpham,
				},
				success: function(response) {
					tongSanpham.innerText = response;
					alert("Bạn đã thêm sản phẩm vào giỏ hàng thành công");
				},
				error: function(error) {
					console.log(error);
				}
			});
		}
	</script>


</body>

<!-- Mirrored from template.hasthemes.com/rideo/rideo/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jun 2024 08:22:55 GMT -->

</html>