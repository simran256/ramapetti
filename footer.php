<?php include("conn.php");?>
<!-- Footer Section Start -->
	<footer class="footer">	
		<div class="footer-overlay"></div>	
		<!-- Footer Top Start -->
		<div class="footer-sec">	
			<div class="container">
				<div class="row">
					<!-- Single Footer Widget Start -->
					<div class="col-md-3 col-sm-6">
						<div class="footer-wedget-one">
							<h2>Company Info</h2>
							<p>Established in the year 1974 at DELHI, we "Rama Petti Works" are as Sole Proprietorship based firm ,engaged as the foremost Manufacturer of Wooden Box and many more.</p>	
							 <div class="footer-social">
								<ul>
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-twitter"></i></a></li>
                                    <li><a href="#"><i class="icofont-linkedin"></i></a></li>
									<li><a href="#"><i class="icofont-instagram"></i></a></li>
								</ul>								
							</div>	
						</div>
					</div>	
					<!-- Single Footer Widget End -->
					<!-- Single Footer Widget Start -->
					<div class="col-md-3 col-sm-6">
						<div class="footer-widget-menu">
							<h2>our products</h2>
							<ul>
							    <?php
    $sql = "SELECT * FROM `cat_prod` WHERE sub_category_id = '0' AND status = '1'";
    $res = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($res)) {
        $pro_name = htmlspecialchars($row['ct_pd_name']);
        $productURL = htmlspecialchars($row['ct_pd_url']);
    ?>
									<li><a href="<?= $site ?>product-details/<?= $productURL ?>"><?= $pro_name ?></a></li>
										<?php
    }
    ?>
											
							</ul>
						</div>
					</div>	
					<!-- Single Footer Widget End -->
					<!-- Single Footer Widget Start -->
					<div class="col-md-3 col-sm-6">
						<div class="footer-widget-menu">
							<h2>useful link</h2>
							<ul>
                                
								<li><a href="<?=$site?>about.php">about us</a></li>
								<li><a href="<?=$site?>index.php">Home</a></li>	
								<li><a href="<?=$site?>contact-us.php">Contact Us</a></li>
								<li><a href="<?=$site?>gallery.php">Gallery</a></li>
								
								
							</ul>
						</div>
					</div>	
					<!-- Single Footer Widget End -->
					<!-- Single Footer Widget Start -->
					<div class="col-md-3 col-sm-6">
						<div class="footer-wedget-four">
						    	<?php
				
				$sql = "SELECT * FROM `users`";
				$res = mysqli_query($conn,$sql);
				$row = mysqli_fetch_assoc($res);
				$email = $row['email'];
				$num = $row['mobile'];
				$fb = $row['facebook_link'];
				$tw = $row['twittter_link'];
				$linkedin = $row['linkedin_link'];
				$instagram = $row['instagram_link'];
				$address = $row['address'];
				
			
				?>
							<h2>contact form </h2>
							<div class="footer-contact-inner">
								<div class="footer-contact-info">
									<div class="footer-contact-info-icon">
										<i class="icofont-google-map"></i>
									</div>							
									<div class="footer-contact-info-text">
										<span><?=$address?></span>
									</div>
								</div>
							</div>				
							<div class="footer-contact-inner">
								<div class="footer-contact-info">
									<div class="footer-contact-info-icon">
										<i class="icofont-email"></i>
									</div>							
									<div class="footer-contact-info-text">
										<span><?=$email?></span>
									</div>
								</div>
							</div>				
							<div class="footer-contact-inner">
								<div class="footer-contact-info">
									<div class="footer-contact-info-icon">
										<i class="icofont-telephone"></i>
									</div>							
									<div class="footer-contact-info-text">
										<span>+91-<?=$num?></span>
									</div>
								</div>
							</div>	
                          	  
						</div>
                      
					</div>
					<!-- Single Footer Widget End -->
				</div>
			</div>
		</div>
		<!-- Footer Top End -->
		<!-- Footer Bottom Start -->
		<div class="footer-bottom-sec">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="copy-right text-center">                                                                                        
							<span>&copy; 2024 Rama Petti Work. all rights reserved! </span>
						</div>
					</div>				
								
				</div>
			</div>
		</div>
		<!-- Footer Bottom End -->
	</footer>
	<!-- Footer Section End -->
	<!-- Scripts Js Start -->
    <script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/owl.animate.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/modernizr.min.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/jquery.meanmenu.min.js"></script>
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/custom.js"></script>
	<!-- Scripts Js End -->	
	
	