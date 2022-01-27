<?php 
  
  include 'nedmin/netting/baglan.php';

  $ayarsor=$db->prepare("SELECT * FROM ayar where ayar_id=:id");
  $ayarsor->execute(array(
    'id' => 0
  ));
  $ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $ayarcek[ayar_title] ?> </title>
     <meta name="description" content="<?php echo $ayarcek[ayar_description] ?> ">
  <meta name="keywords" content="<?php echo $ayarcek[ayar_keywords] ?> ">
  <meta name="author" content="<?php echo $ayarcek[ayar_author] ?> ">

	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,400italic,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='font-awesome\css\font-awesome.css' rel="stylesheet" type="text/css">

    <link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
	

	<link rel="stylesheet" href="style.css">
	

	<link rel="stylesheet" href="css\owl.carousel.css">
	<link rel="stylesheet" href="css\owl.transitions.css">
	
  </head>
  <body>
  <div id="wrapper">
	<div class="header">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-md-4 main-logo">
					<a href="index.php"><img src="images\logo.png" alt="logo" class="logo img-responsive"></a>
				</div>
				<div class="col-md-8">
					<div class="pushright">
						<div class="top">
							<a href="#" id="reg" class="btn btn-default btn-dark">Giriş Yap<span>-- veya --</span>Kayıt Ol</a>
							<div class="regwrap">
								<div class="row">
									<div class="col-md-6 regform">
										<div class="title-widget-bg">
											<div class="title-widget">Giriş</div>
										</div>
										<form role="form">
											<div class="form-group">
												<input type="text" class="form-control" id="username" placeholder="Kullanıcı Adı">
											</div>
											<div class="form-group">
												<input type="password" class="form-control" id="password" placeholder="Şifre">
											</div>
											<div class="form-group">
												<button class="btn btn-default btn-red btn-sm">Giriş Yap</button>
											</div>
										</form>
									</div>
									<div class="col-md-6">
										<div class="title-widget-bg">
											<div class="title-widget">Kayıt Ol</div>
										</div>
										<p>
											Hesap oluşturarak daha hızlı alışveriş yapabilir, sipariş durumundan haberdar olabilirsiniz..
										</p>
										<a href="register.php"><button class="btn btn-default btn-yellow">Kayıt Ol</button></a>
									</div>
								</div>
							</div>
							<div class="srch-wrap">
								<a href="#" id="srch" class="btn btn-default btn-search"><i class="fa fa-search"></i></a>
							</div>
							<div class="srchwrap">
								<div class="row">
									<div class="col-md-12">
										<form class="form-horizontal" role="form">
											<div class="form-group">
												<label for="search" class="col-sm-2 control-label">Arama</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="search">
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="dashed"></div>
	</div><!--Header -->
	<div class="main-nav"><!--end main-nav -->
		<div class="navbar navbar-default navbar-static-top">
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="navbar-collapse collapse">
							<ul class="nav navbar-nav">
								<li><a href="index.php" class="active">Ana sayfa</a><div class=""></div>
								<li><a href="hakkimizda.php" class="">Hakkımızda</a><div class=""></div></li>
								<li class="dropdown menu-large">
									<a href="kategoriler.php" class="dropdown-toggle" data-toggle="dropdown">Kategoriler</a>
									<ul class="dropdown-menu megamenu container row">
										<li class="col-sm-4">
											<h4>Kategori 1</h4>
											<ul>
												<li><a href="product.htm">Ürünler</a></li>
											</ul>
											<div class="dashed-nav"></div>
										</li>
										<li class="col-sm-4">
											<h4>Kategori 2</h4>
											<ul>
												
												<li><a href="product.htm">Ürünler</a></li>
											</ul>
											<div class="dashed-nav"></div>
										</li>
										<li class="col-sm-4">
											<h4>Kategori 3</h4>
											<ul>
												<li><a href="product.htm">Ürünler</a></li>
											</ul>
											<div class="dashed-nav"></div>
										</li>
									</ul>
								</li>
								<li><a href="category.htm">Ürünler</a></li>
								<li><a href="contact.htm">İletişim</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-2 machart">
						<button id="popcart" class="btn btn-default btn-chart btn-sm "><span class="mychart">Sepetim</span>|<span class="allprice">0.00₺</span></button>
						<div class="popcart">
							<table class="table table-condensed popcart-inner">
								<tbody>
									<tr>
										<td>
										<a href="product.htm"><img src="images\dummy-1.png" alt="" class="img-responsive"></a>
										</td>
										<td><a href="product.htm">Ürün Deneme</a><br><span>Color: green</span></td>
										<td>1X</td>
										<td>138.80₺</td>
										<td><a href=""><i class="fa fa-times-circle fa-2x"></i></a></td>
									</tr>
								</tbody>
							</table>
							<span class="sub-tot">Ara Toplam : <span>138.80</span> | <span>KDV (17.5%)</span> : 36.00₺ </span>
							<br>
							<div class="btn-popcart">
								<a href="checkout.htm" class="btn btn-default btn-red btn-sm">Ödeme</a>
								<a href="cart.htm" class="btn btn-default btn-red btn-sm">Daha fazlası</a>
							</div>
							<div class="popcart-tot">
								<p>
									Toplam<br>
									<span>174.80₺</span>
								</p>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!--end main-nav -->