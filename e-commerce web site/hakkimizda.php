<?php 

	include 'header.php';

$hakkimizdasor=$db->prepare("SELECT * FROM hakkimizda where hakkimizda_id=:id");
  $hakkimizdasor->execute(array(
    'id' => 0
  ));
  $hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);


?>


	<div class="container">
		<ul class="small-menu"><!--small-nav -->
			<li><a href="" class="myacc">My Account</a></li>
			<li><a href="" class="myshop">Shopping Chart</a></li>
			<li><a href="" class="mycheck">Checkout</a></li>
		</ul><!--small-nav -->
		<div class="clearfix"></div>
		<div class="lines"></div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-title-wrap">
					<div class="page-title-inner">
					<div class="row">
						<div class="col-md-4">
						
							<div class="bigtitle">Hakkımızda</div>
						</div>
						<div class="col-md-3 col-md-offset-5">
							
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9"><!--Main content-->

				<div class="title-bg">
					<div class="title">Video</div>
				</div>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $hakkimizdacek['hakkimizda_video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


				<div class="title-bg">
					<div class="title"><?php echo $hakkimizdacek['hakkimizda_baslik'] ?> </div>
				</div>
				<div class="page-content">
					<p>
						<?php echo $hakkimizdacek['hakkimizda_icerik'] ?>
					</p>
					
				</div>

				<div class="title-bg">
					<div class="title">Vizyon</div>
				</div>
					<p><?php echo $hakkimizdacek['hakkimizda_vizyon'] ?> </p>

				<div class="title-bg">
					<div class="title">Misyon </div>
				</div>
				<p><?php echo $hakkimizdacek['hakkimizda_misyon'] ?></p>	

			</div>
			
			<?php include 'sidebar.php';  ?>


		</div>
		<div class="spacer"></div>
	</div>
	
	<?php 

	include 'footer.php';

?>