	<div class="f-widget"><!--footer Widget-->
		<div class="container">
			<div class="row">
				<div class="col-md-4"><!--footer twitter widget-->
					<div class="title-widget-bg">
						<div class="title-widget">Twitter Güncellemeleri</div>
					</div>
					<ul class="tweets">
						<li>#gifternational ile avuçlarında ki hatıra
						'Gifternational' <a href="https://twitter.com">Twitter </a>

						<li class="tweets">#gifternational ile özel günler
						<br>'Gifternational' <a href="https://twitter.com">Twitter </a>

					</ul>
					<div class="clearfix"></div>
					<a href="#" class="btn btn-default btn-follow"><i class="fa fa-twitter fa-2x"></i><div>Takip et !</div></a>
				</div><!--twitter-->
				<div class="col-md-4"><!--Mail Bülten-->
					<div class="title-widget-bg">
						<div class="title-widget">Haftalık Mail Bülteni</div>
					</div>
					<div class="newsletter">
						<p>
							Yeni eklenen ve fırsat ürünlerini kaçırmak istemiyor musunuz ?
						</p>
						<form role="form">
							<div class="form-group">
								<label>Email Adresiniz</label>
								<input type="email" class="form-control newstler-input" id="exampleInputEmail1" placeholder="Email Giriniz">
								<button class="btn btn-default btn-red btn-sm">Kayıt Ol</button>
							</div>
						</form>
					</div>
				</div><!--Mail bülten-->
				<div class="col-md-4"><!--iletişim-->
					<div class="title-widget-bg">
						<div class="title-widget-cursive">İletişim</div>
					</div>
					<ul class="contact-widget">
						<li class="fphone"><?php echo $ayarcek[ayar_tel] ?>  <br> <?php echo $ayarcek[ayar_gsm] ?> </li>
						<li class="fmail lastone"><?php echo $ayarcek[ayar_mail] ?> <br><?php echo $ayarcek[ayar_faks] ?> </li>
					</ul>
				</div><!--iletişim-->
			</div>
			<div class="spacer"></div>
		</div>
	</div><!--footer Widget-->
	<div class="footer"><!--footer-->
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<ul class="footermenu"><!--footer nav-->
						<li><a href="index-1.htm">Ana sayfa</a></li>
						<li><a href="cart.htm">Sepetim</a></li>
						<li><a href="checkout.htm">Ödeme</a></li>
						<li><a href="order.htm">Siparişlerim</a></li>
						<li><a href="contact.htm">İletişim</a></li>
					</ul><!--footer nav-->
					<div class="f-credit">&copy;<?php echo $ayarcek[ayar_author] ?> <a href="#">gifternational.com</a></div>
					<a href=""><div class="payment visa"></div></a>
				</div>
				<div class="col-md-3"><!--footer Share-->
					<div class="followon">Takip edin</div>
					<div class="fsoc">
						<a href="http://<?php echo $ayarcek[ayar_twitter] ?>" class="ftwitter">twitter</a>
						<a href="http://<?php echo $ayarcek[ayar_facebook] ?> " class="ffacebook">facebook</a>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div><!--footer Share-->
			</div>
		</div>
	</div><!--footer-->
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap\js\bootstrap.min.js"></script>
	
	<!-- map -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
	<script type="text/javascript" src="js\jquery.ui.map.js"></script>
	<script type="text/javascript" src="js\demo.js"></script>
	
	<!-- owl carousel -->
    <script src="js\owl.carousel.min.js"></script>
	
	<!-- rating -->
	<script src="js\rate\jquery.raty.js"></script>
	<script src="js\labs.js" type="text/javascript"></script>
	
	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="js\product\lib\jquery.mousewheel-3.0.6.pack.js"></script>
	
	<!-- fancybox -->
    <script type="text/javascript" src="js\product\jquery.fancybox.js?v=2.1.5"></script>
	
	<!-- custom js -->
    <script src="js\shop.js"></script>
	</div>
  </body>
</html>
