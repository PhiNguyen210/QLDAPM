/*index*/
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>WEB Bán san pham coffe</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="wrapper">
		<?php
		include("pages/header.php");
		include("pages/menu.php");
		include("pages/main.php");
		include("pages/footer.php");
		?>
		
		
			
	</div>
</body>
</html>

/*menu.php*/
<div class="menu">
			<ul class="list_menu">
				<li><a href="index.php">Trang chủ</a></li>
				<li><a href="index.php?quanly=danhmucsanpham&id=1">Danh mục sản phẩm</a></li>
				<li><a href="index.php?quanly=giohang">Giỏ hàng</a></li>
				<li><a href="index.php?quanly=tintuc">Tin tức</a></li>
				<li><a href="index.php?quanly=lienhe">Liên hệ</a></li>
				
				
			</ul>
		</div>

    /*main.php
    <div id="main">
			
			<?php
				include("sidebar/sidebar.php");
			?>
				
			<div class="maincontent">
				<?php
				if(isset($_GET['quanly'])){
					$tam = $_GET['quanly'];
				}else{
					$tam = '';
				}
				if($tam=='danhmucsanpham'){
					include("main/danhmuc.php");
				}elseif($tam=='giohang'){
					include("main/giohang.php");
				}elseif($tam=='tintuc'){
					include("main/tintuc.php");
				}elseif($tam=='lienhe'){
					include("main/lienhe.php");
				}else{
					include("main/index.php");
				}
				?>
			</div>
	</div>
  */footer*/
  <div class="clear"></div>
		<div class="footer">
			<p class=" footer_copyright">Copyright by NhutMinh developer 2023</p>
		</div>

    /*sideber*/
    <div class="sidebar">
				<ul class="list_sidebar">
				
				<li><a href="index.php?quanly=danhmucsanpham&id=1">Cafe1( Các loại)</a></li>
				<li><a href="index.php?quanly=danhmucsanpham&id=2">Cafe2 </a></li>
				<li><a href="index.php?quanly=danhmucsanpham&id=3">Cafe3</a></li>
				<li><a href="#">Cafe4</a></li>
				<li><a href="#">Cafe5</a></li>
				<li><a href="#">Cafe6</a></li>
				<li><a href="#">Cafe7</a></li>
				</ul>
			</div>
      /*indexsanpham.php */
      <h3>Sản phẩm mới nhất</h3>
				 <ul class="product_list">
					<li>
					<a href="">
						<img src="images/vietmucxanh.jpg">
						<p class="title_product">Ten san pham: Cafe 001</p>
						<p class="price_product">Gia : 4000000 vnd</p>
						</a>
					</li>
					<li>
						<img src="images/vietmucxanh1.jpg">
						<p class="title_product">Ten san pham: Cafe 001</p>
						<p class="price_product">Gia : 4000000 vnd</p>
					</li>
					<li>
						<img src="images/vietmucxanh.jpg">
						<p class="title_product">Ten san pham: Cafe 001</p>
						<p class="price_product">Gia : 4000000 vnd</p>
					</li>
					<li>
						<img src="images/vietmucxanh.jpg">
						<p class="title_product">Ten san pham: Cafe 001</p>
						<p class="price_product">Gia : 4000000 vnd</p>
					</li>
					<li>
						<img src="images/vietmucxanh.jpg">
						<p class="title_product">Ten san pham: Cafe 001</p>
						<p class="price_product">Gia : 4000000 vnd</p>
					</li>
					<li>
						<img src="images/vietmucxanh.jpg">
						<p class="title_product">Ten san pham: Cafe 001</p>
						<p class="price_product">Gia : 4000000 vnd</p>
					</li>
					<li>
						<img src="images/vietmucxanh.jpg">
						<p class="title_product">Ten san pham: Cafe 001</p>
						<p class="price_product">Gia : 4000000 vnd</p>
					</li>
					<li>
						<img src="images/vietmucxanh.jpg">
						<p class="title_product">Ten san pham: Cafe 001</p>
						<p class="price_product">Gia : 4000000 vnd</p>
					</li>
				 </ul>
         */danhmuc*/
         <h3>Sản phẩm mới nhất</h3>
				 <ul class="product_list">
					<li>
					<a href="">
						<img src="images/vietmucxanh.jpg">
						<p class="title_product">Ten san pham: Cafe 001</p>
						<p class="price_product">Gia : 4000000 vnd</p>
						</a>
					</li>
					<li>
						<img src="images/vietmucxanh1.jpg">
						<p class="title_product">Ten san pham: Cafe 001</p>
						<p class="price_product">Gia : 4000000 vnd</p>
					</li>
					<li>
						<img src="images/vietmucxanh.jpg">
						<p class="title_product">Ten san pham: Cafe 001</p>
						<p class="price_product">Gia : 4000000 vnd</p>
					</li>
					<li>
						<img src="images/vietmucxanh.jpg">
						<p class="title_product">Ten san pham: Cafe 001</p>
						<p class="price_product">Gia : 4000000 vnd</p>
					</li>
					<li>
						<img src="images/vietmucxanh.jpg">
						<p class="title_product">Ten san pham: Cafe 001</p>
						<p class="price_product">Gia : 4000000 vnd</p>
					</li>
					<li>
						<img src="images/vietmucxanh.jpg">
						<p class="title_product">Ten san pham: Cafe 001</p>
						<p class="price_product">Gia : 4000000 vnd</p>
					</li>
					<li>
						<img src="images/vietmucxanh.jpg">
						<p class="title_product">Ten san pham: Cafe 001</p>
						<p class="price_product">Gia : 4000000 vnd</p>
					</li>
					<li>
						<img src="images/vietmucxanh.jpg">
						<p class="title_product">Ten san pham: Cafe 001</p>
						<p class="price_product">Gia : 4000000 vnd</p>
					</li>
				 </ul>