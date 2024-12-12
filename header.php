<?php
include("conn.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Check if 'alias' exists in GET parameters
$url = isset($_GET['alias']) ? $_GET['alias'] : '';

// Fetch header information only if alias is provided
if ($url) {
    $headerQuery = mysqli_query($conn, "SELECT * FROM cat_prod WHERE ct_pd_url='$url'");
    if ($headerQuery && mysqli_num_rows($headerQuery) > 0) {
        $header = mysqli_fetch_assoc($headerQuery);
        $product_url = $header['ct_pd_url'];
    } else {
        $product_url = ''; // Handle case where no product is found
    }
} else {
    $product_url = ''; // Handle missing alias parameter
}
?>

   
	<header>
		<!-- Header Topbar Start -->
		<div class="header-top">
			<div class="container">
				<div class="row"> 
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
				
			
				?>
					<div class="col-md-7 col-sm-8">
						<div class="header-left">
							<span class="social-title">Need Any Help?</span>
							<ul>
								<li><i class="icofont-phone"></i> +91-<?=$num?></li>							
								<li><i class="icofont-mail"></i> <?=$email?></li>
							</ul>	
						</div>
					</div>				
					<div class="col-md-5 col-sm-4">
						<div class="header-right-div">
							<div class="soical-profile">
								<span class="social-title">Follow Us</span>
								<ul>
									<li><a href="<?=$fb?>"><i class="icofont-facebook"></i></a></li>
									<li><a href="<?=$tw?>"><i class="icofont-twitter"></i></a></li>
									<li><a href="<?=$linkedin?>"><i class="icofont-linkedin"></i></a></li>
									<li><a href="<?=$instagram?>"><i class="icofont-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Topbar End -->
		<!-- Main Bar Start -->
		<div class="hd-sec">
			<div class="container">
				<div class="row">
					<!-- Logo Start -->
					<div class="col-md-2 col-sm-12 col-xs-8">
						<div class="logo">
							<a href="<?=$site?>index.php"><img src="<?=$site?>img/logo.png" alt=""/></a>
						</div>
					</div>	
					<!-- Logo End -->
					<!-- Main Menu Start -->
					<div class="mobile-nav-menu"></div>						
					<div class="col-md-8 col-sm-9 nav-menu">
						<div class="menu">
							<nav id="main-menu" class="main-menu">
								<ul>
									<li class="active"><a href="<?=$site?>index.php">Home</a></li> 									
									<li><a href="<?=$site?>about.php">About us</a></li> 														
															
									<li><a href="#">Our Products</a>
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
									</li>									
													
									<li><a href="<?=$site?>gallery.php">Gallery</a></li>
									<li><a href="<?=$site?>contact-us.php">Contact us</a></li>
								</ul>
							</nav>
							<!-- Menu Search Bar Start -->
<!--
							<div class="search-bar-icon">	
								<div class="site-search">	
									<span data-toggle="dropdown"><i class="icofont-search-2"></i></span>
									<div class="search-forum dropdown-menu animation slideUpIn">
										<form action="#">
											<input placeholder="Search For Site" type="text">
											<input type="submit" value="Go"/>
										</form>							
									</div>							
								</div>
							</div>
-->
							<!-- Menu Search Bar End -->
						</div>					
					</div>	
					<!-- Main Menu End -->
					<!-- Main Apply Button Start -->
					<div class="col-md-2 col-sm-3 applay-button-area">
						<div class="applay-button">
							<a href="<?=$site?>contact-us.php">Request a Quote</a>
						</div>					
					</div>
					<!-- Main Apply Button End -->
				</div>
			</div>
		</div>
		<!-- Main Bar End -->
	</header>
 	<!-- Header End -->	
 	