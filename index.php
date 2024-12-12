<?php include("conn.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$headerQuery = "SELECT * FROM `cms_menu` WHERE `page_url`='home'";
$headerResult = mysqli_query($conn, $headerQuery);

if ($headerResult && mysqli_num_rows($headerResult) > 0) {
    // Fetch data as an associative array
    $header1 = mysqli_fetch_assoc($headerResult);
} else {
    $header1 = ['page_title' => '', 'message' => '', 'page_keyword' => '']; // Default values if no result is found
}
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
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
	<!-- Meta Tags -->	
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<meta charset="utf-8">
	<title><?php echo $header1['page_title'];?></title>
    <!--<meta name="author" content="<?php echo $theme['company_name'];?>">-->
    <meta name="description" content="<?php echo $header1['message'];?>">
    <link rel="canonical" href="<?php echo $header1['page_keyword'];?>" >
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700,800" rel="stylesheet"> 
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/meanmenu.min.css">
	<link rel="stylesheet" href="css/icofont.min.css">
	<link rel="stylesheet" href="css/responsive.css">	
	<link rel="stylesheet" href="css/all.min.css">	
</head>
<body class="home-v1">
   <?php include('header.php')?>
     <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/banner1.jpg" alt="" style="width:100%;">
      </div>

      <div class="item">
        <img src="img/banner2.jpg" alt="" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="img/banner3.jpg" alt="" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
     
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
   
      <span class="sr-only">Next</span>
    </a>
  </div>
    
	<!-- What We Do Section Start -->	
	<div class="what-we-do-crousel-sec">
		<div class="container">
			<div class="row what-we-do-title-inner">
				<div class="col-md-6">
					<div class="what-we-do-title">
						<span class="what-we-do-subtitle">About</span>
						<h1>Welcome to RAMA PETTI WORKS</h1>
					</div>
				</div>
				<?php
				// $sql = "select * from about where `status`='1'";
				// $res = mysqli_query($conn,$sql);
				// while($row = mysqli_fetch_assoc($res)){
				    // $about_desc = $row[''];
				?>
				<div class="col-md-6">
					<div class="what-we-do-shortdesc">
						<p>Established in the year 1974 at DELHI, we "Rama Petti Works" are as Sole Proprietorship based firm ,engaged as the foremost Manufacturer of Wooden Box and many more.</p>
					</div>
				</div>
				<?php
				// }
				?>
			</div>		
			<div class="row">	
				<div class="col-md-4 col-sm-6">
					<div class="what-we-do-single-inner">
						<div class="what-we-do-inner-icon">
							<i class="icofont-architecture-alt"></i>
						</div>
						<div class="what-we-do-inner-desc">
							<h2><a href="#"><span>Get a </span> Free Quote Today!</a></h2>
							<p>"Get a Free Quote Today! Fast, easy, and transparent pricing tailored to your needs. Contact us now for instant estimates!"</p>
							
						</div>
					</div>
				</div>					
				<div class="col-md-4 col-sm-6">
					<div class="what-we-do-single-inner">
						<div class="what-we-do-inner-icon">
							<i class="fa-regular fa-clock"></i>
						</div>
						<div class="what-we-do-inner-desc">
							<h2><a href="#"><span>24/7 </span> Support</a></h2>
							<p>"24/7 Support: We're here for you anytime, day or night, offering round-the-clock assistance to resolve your issues quickly."</p>
							
						</div>
					</div>
				</div>			
				<div class="col-md-4 col-sm-6">
					<div class="what-we-do-single-inner">
						<div class="what-we-do-inner-icon">
							<i class="icofont-trolley"></i>
						</div>
						<div class="what-we-do-inner-desc">
							<h2><a href="#"><span>On time </span> delivery</a></h2>
							<p>"On-time Delivery: We guarantee timely delivery of your products, ensuring reliability and efficiency for every order, every time."</p>
							
						</div>
					</div>
				</div>					
				<div class="col-md-4 col-sm-6">
					<div class="what-we-do-single-inner">
						<div class="what-we-do-inner-icon">
							<i class="fa-solid fa-location-dot"></i>
						</div>
						<div class="what-we-do-inner-desc">
							<h2><a href="#"><span>Your Place, </span> Our Service</a></h2>
							<p>"Your Place, Our Service: We bring expert solutions right to your doorstep, offering convenient, personalized service wherever you are."</p>
							
						</div>
					</div>
				</div>				
				<div class="col-md-4 col-sm-6">
					<div class="what-we-do-single-inner">
						<div class="what-we-do-inner-icon">
							<i class="icofont-energy-oil"></i>
						</div>
						<div class="what-we-do-inner-desc">
							<h2><a href="#"><span>All Safety </span> Work</a></h2>
							<p>"All Safety Work: Comprehensive safety solutions ensuring secure environments, from inspections to installations, protecting your team and assets."</p>
							
						</div>
					</div>
				</div>					
				<div class="col-md-4 col-sm-6">
					<div class="what-we-do-single-inner">
						<div class="what-we-do-inner-icon">
							<i class="icofont-light-bulb"></i>
						</div>
						<div class="what-we-do-inner-desc">
							<h2><a href="#"><span>100% Pure</span> Products</a></h2>
							<p>"100% Pure Products: We guarantee premium quality with our all-natural, authentic products, free from additives or harmful chemicals."</p>
							
						</div>
					</div>
				</div>				
			</div>					
		</div>
	</div>	
	<!-- What We Do Section End -->				
	<!-- Call To Action Section Start -->	
	<div class="call-to-action-sec">
		<div class="call-to-action-overlay"></div>
		<div class="container">
			<div class="row">	
				<div class="col-md-8 col-sm-9">
					<div class="call-to-action-text">
						<h2>contact with us for customer support</h2>
						<p>we are provide 24/7 hours to support.</p>
					</div>												
				</div>				
				<div class="col-md-4 col-sm-3">
					<div class="call-to-action-text">
						<a href="<?=$site?>contact-us.php" class="btn">get support <i class="icofont-thin-double-right"></i></a>
					</div>												
				</div>					
			</div>					
		</div>
	</div>
	<!-- Call To Action Section Start -->	

	<div class="blog-sec pt-100 pb-70">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="sec-title">
						<h1>Our Products</h1>
					
					</div>
				</div>
			</div>				
			<div class="row">
			    <?php
			            $sql = "SELECT * FROM `cat_prod` WHERE sub_category_id = '0' AND status = '1' limit 6";
                        $res = mysqli_query($conn, $sql);
                        while($row= mysqli_fetch_assoc($res)){
                            $pro_name=$row['ct_pd_name'];
                            $pro_desc=$row['long_description'];
                               $product_images = explode(",", $row['cat_pd_image']); // Split multiple images into an array
 $productURL = htmlspecialchars($row['ct_pd_url']);
            // Ensure there's at least one image, if not, set a placeholder
            $product_image = isset($product_images[0]) && !empty($product_images[0]) ? $product_images[0] : 'placeholder.jpg';
                       
                        
			    ?>
				<div class="col-md-4 col-sm-4">				
					<div class="sngl-blg">
						<div class="sngl-blg-img">
							<img src="<?=$site?>admin/uploads/product/cat_pd_image/<?=$product_image?>" alt=""/>
						</div>	
						<div class="sngl-blg-dsc">						
							<h2 class="blg-title"><a href="wooden-box-for-packing.php"><?=$pro_name?></a></h2>
							<p><?=substr($pro_desc, 0, 100)?> </p>
							<a href="<?= $site ?>product-details/<?= $productURL?>" class="rdmoreBtn">Learn More<i class="icofont-long-arrow-right"></i></a>						
						</div>
					</div>
				</div>					
				<!--<div class="col-md-4 col-sm-4">			-->
				<!--	<div class="sngl-blg">-->
				<!--		<div class="sngl-blg-img">-->
				<!--			<img src="img/p2.png" alt=""/>-->
				<!--		</div>	-->
				<!--		<div class="sngl-blg-dsc">						-->
				<!--			<h2 class="blg-title"><a href="#">wooden crate </a></h2>-->
				<!--			<p>A wooden crate is a highly durable, open-box container commonly used for shipping, storing, </p>-->
				<!--			<a href="#" class="rdmoreBtn">Learn More<i class="icofont-long-arrow-right"></i></a>						-->
				<!--		</div>-->
				<!--	</div>-->
				<!--</div>				-->
				<!--<div class="col-md-4 col-sm-4">					-->
				<!--	<div class="sngl-blg">-->
				<!--		<div class="sngl-blg-img">-->
				<!--			<img src="img/p3.png" alt=""/>-->
				<!--		</div>	-->
				<!--		<div class="sngl-blg-dsc">-->
										
				<!--			<h2 class="blg-title"><a href="#">Heavy Wooden Crate</a></h2>-->
				<!--			<p>A heavy wooden crate is a robust and reinforced container crafted specifically to handle large,</p>-->
				<!--			<a href="#" class="rdmoreBtn">Learn More<i class="icofont-long-arrow-right"></i></a>					-->
				<!--		</div>-->
				<!--	</div>-->
				<!--</div>		-->
    <!--            <div class="col-md-4 col-sm-4">					-->
				<!--	<div class="sngl-blg">-->
				<!--		<div class="sngl-blg-img">-->
				<!--			<img src="img/p4.png" alt=""/>-->
				<!--		</div>	-->
				<!--		<div class="sngl-blg-dsc">-->
										
				<!--			<h2 class="blg-title"><a href="#">Heavy Shipment Cargo</a></h2>-->
				<!--			<p>Heavy shipment cargo refers to the transportation of large, oversized, or high-weight goods  </p>-->
				<!--			<a href="#" class="rdmoreBtn">Learn More<i class="icofont-long-arrow-right"></i></a>					-->
				<!--		</div>-->
				<!--	</div>-->
				<!--</div>		-->
    <!--            <div class="col-md-4 col-sm-4">					-->
				<!--	<div class="sngl-blg">-->
				<!--		<div class="sngl-blg-img">-->
				<!--			<img src="img/p5.png" alt=""/>-->
				<!--		</div>	-->
				<!--		<div class="sngl-blg-dsc">-->
										
				<!--			<h2 class="blg-title"><a href="#">Heavy Machine Wooden Packing</a></h2>-->
				<!--			<p>Heavy machine wooden packing is a specialized packaging solution designed to secure and </p>-->
				<!--			<a href="#" class="rdmoreBtn">Learn More<i class="icofont-long-arrow-right"></i></a>					-->
				<!--		</div>-->
				<!--	</div>-->
				<!--</div>		-->
    <!--            <div class="col-md-4 col-sm-4">					-->
				<!--	<div class="sngl-blg">-->
				<!--		<div class="sngl-blg-img">-->
				<!--			<img src="img/p6.png" alt=""/>-->
				<!--		</div>	-->
				<!--		<div class="sngl-blg-dsc">-->
										
				<!--			<h2 class="blg-title"><a href="#">Export Worthy Packing</a></h2>-->
				<!--			<p>Export-worthy packing is a specialized method of packaging goods to ensure they withstand</p>-->
				<!--			<a href="#" class="rdmoreBtn">Learn More<i class="icofont-long-arrow-right"></i></a>					-->
				<!--		</div>-->
				<!--	</div>-->
				<!--</div>		-->
					<?php
			}
			?>
			</div>
		
		</div>
	</div>		
	<!-- Blog Section End -->	
	<!-- service Section End -->	
	<div class="why-choose-us-v1-sec">
		<div class="container">			
			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="video-inner">
						
					</div>				
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="why-choose-v1">
						<div class="why-choose-v1-title">
							<span>Why Choose Us</span>
							<h1>Why Trust Our Client</h1>
						</div>					
											
						<div class="why-choose-v1-single">
							<div class="media">
								<div class="media-left">
									<div class="icon">
										<i class="icofont-rocket-alt-2"></i>
									</div>						
								</div>						
								<div class="media-body">
									<h2>Quality Products</h2>
									<p>They offer a range of products, including Rectangle Wooden Heavy Boxes and Moisture Proof Rectangle Wooden Packaging Boxes. </p>
								</div>				
							</div>						
						</div>						
						<div class="why-choose-v1-single">
							<div class="media">
								<div class="media-left">
									<div class="icon">
										<i class="fa-solid fa-gears"></i>
									</div>						
								</div>						
								<div class="media-body">
									<h2>Customization</h2>
									<p>Rama Petti Works provides tailored solutions to meet specific packaging requirements, accommodating various sizes and designs. </p>
								</div>				
							</div>						
						</div>		
                        <div class="why-choose-v1-single">
							<div class="media">
								<div class="media-left">
									<div class="icon">
										<i class="fa-solid fa-inr"></i>
									</div>						
								</div>						
								<div class="media-body">
									<h2>Competitive Pricing</h2>
									<p>Their products are competitively priced, such as the Wooden Packaging Box offered, providing value for money.  </p>
								</div>				
							</div>						
						</div>	
                        <div class="why-choose-v1-single">
							<div class="media">
								<div class="media-left">
									<div class="icon">
										<i class="fa-solid fa-user"></i>
									</div>						
								</div>						
								<div class="media-body">
									<h2>Customer Satisfaction</h2>
									<p> The company maintains a strong focus on customer satisfaction, as evidenced by positive feedback on their Facebook page. </p>
								</div>				
							</div>						
						</div>	
					</div>
				</div>
			
			</div>					
		</div>
	</div>	
	<!-- Why Choose Us Sec Start -->
    <!-- Gallery Section Start -->
	<div class="gallery-sec pt-50 pb-50">	
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="sec-title">
						<span>Company Project</span>
						<h1>Company Project Gallery</h1>
						<div class="border-shape"></div>
					</div>
				</div>
			</div>		
			<div class="row">		
				<div class="gallery-area">	
					
					<!-- Gallery Filter End -->
					<!-- Gallery container Start -->
					<div class="gallery-container">			
						<!-- Gallery Item Block Start -->
						<?php
						
						$sql = "SELECT * FROM `gallery` WHERE `status` = '1' limit 8";
						$res = mysqli_query($conn,$sql);
						while($row = mysqli_fetch_assoc($res)){
						    $image = $row['image'];
						    
						
						
						?>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="gallery-item">
								<img src="<?=$site?>admin/uploads/gallery/<?=$image?>" alt="" />
								<div class="gallery-overlay">
									<div class="gallery-overlay-text">
										<span class="gallery-button">
											<a href="<?=$site?>admin/uploads/gallery/<?=$image?>" class="gallery-photo"><i class="icofont-image"></i></a>
											
										</span>
									</div>
								</div>
							</div>								
						</div>
						<?php
						}
						?>
						
						<!-- Gallery Item Block End -->							
						<!-- Gallery Item Block Start -->
						<!--<div class="col-xs-12 col-sm-6 col-md-3 ">-->
						<!--	<div class="gallery-item">-->
						<!--		<img src="img/g2.png" alt="" />-->
						<!--		<div class="gallery-overlay">-->
						<!--			<div class="gallery-overlay-text">-->
						<!--				<span class="gallery-button">-->
						<!--					<a href="img/g2.png" class="gallery-photo"><i class="icofont-image"></i></a>-->
											
						<!--				</span>-->
						<!--			</div>-->
						<!--		</div>-->
						<!--	</div>								-->
						<!--</div>								-->
						<!-- Gallery Item Block End -->				
						<!-- Gallery Item Block Start -->
						<!--<div class="col-xs-12 col-sm-6 col-md-3 ">-->
						<!--	<div class="gallery-item">-->
						<!--		<img src="img/g3.png" alt="" />-->
						<!--		<div class="gallery-overlay">-->
						<!--			<div class="gallery-overlay-text">-->
						<!--				<span class="gallery-button">-->
						<!--					<a href="img/g3.png" class="gallery-photo"><i class="icofont-image"></i></a>-->
											
						<!--				</span>-->
						<!--			</div>-->
						<!--		</div>-->
						<!--	</div>								-->
						<!--</div>								-->
						<!-- Gallery Item Block End -->						
						<!-- Gallery Item Block Start -->
						<!--<div class="col-xs-12 col-sm-6 col-md-3 ">-->
						<!--	<div class="gallery-item">-->
						<!--		<img src="img/g4.png" alt="" />-->
						<!--		<div class="gallery-overlay">-->
						<!--			<div class="gallery-overlay-text">-->
						<!--				<span class="gallery-button">-->
						<!--					<a href="img/g4.png" class="gallery-photo"><i class="icofont-image"></i></a>-->

						<!--				</span>-->
						<!--			</div>-->
						<!--		</div>-->
						<!--	</div>								-->
						<!--</div>								-->
						<!-- Gallery Item Block End -->							
						<!-- Gallery Item Block Start -->
						<!--<div class="col-xs-12 col-sm-6 col-md-3 ">-->
						<!--	<div class="gallery-item">-->
						<!--		<img src="img/g5.png" alt="" />-->
						<!--		<div class="gallery-overlay">-->
						<!--			<div class="gallery-overlay-text">-->
						<!--				<span class="gallery-button">-->
						<!--					<a href="img/g5.png" class="gallery-photo"><i class="icofont-image"></i></a>-->
											
						<!--				</span>-->
						<!--			</div>-->
						<!--		</div>-->
						<!--	</div>								-->
						<!--</div>								-->
						<!-- Gallery Item Block End -->							
						<!-- Gallery Item Block Start -->
						<!--<div class="col-xs-12 col-sm-6 col-md-3 ">-->
						<!--	<div class="gallery-item">-->
						<!--		<img src="img/g6.png" alt="" />-->
						<!--		<div class="gallery-overlay">-->
						<!--			<div class="gallery-overlay-text">-->
						<!--				<span class="gallery-button">-->
						<!--					<a href="img/g6.png" class="gallery-photo"><i class="icofont-image"></i></a>-->
											
						<!--				</span>-->
						<!--			</div>-->
						<!--		</div>-->
						<!--	</div>								-->
						<!--</div>								-->
						<!-- Gallery Item Block End -->				
						<!-- Gallery Item Block Start -->
						<!--<div class="col-xs-12 col-sm-6 col-md-3">-->
						<!--	<div class="gallery-item">-->
						<!--		<img src="img/g7.jpg" alt="" />-->
						<!--		<div class="gallery-overlay">-->
						<!--			<div class="gallery-overlay-text">-->
										
						<!--				<span class="gallery-button">-->
						<!--					<a href="img/g7.jpg" class="gallery-photo"><i class="icofont-image"></i></a>-->
											
						<!--				</span>-->
						<!--			</div>-->
						<!--		</div>-->
						<!--	</div>								-->
						<!--</div>								-->
						<!-- Gallery Item Block End -->						
						<!-- Gallery Item Block Start -->
						<!--<div class="col-xs-12 col-sm-6 col-md-3 ">-->
						<!--	<div class="gallery-item">-->
						<!--		<img src="img/g8.jpg" alt="" />-->
						<!--		<div class="gallery-overlay">-->
						<!--			<div class="gallery-overlay-text">-->
						<!--				<span class="gallery-button">-->
						<!--					<a href="img/g8.jpg" class="gallery-photo"><i class="icofont-image"></i></a>-->
											
						<!--				</span>-->
						<!--			</div>-->
						<!--		</div>-->
						<!--	</div>								-->
						<!--</div>								-->
						<!-- Gallery Item Block End -->												
					</div>
					
				</div>				
			</div>
		</div>
	</div>
			<!-- team Section End -->		
	<div class="testimonial-v1-sec">
		<div class="container">	
			<div class="row">
				<div class="col-md-12">
					<div class="sec-title">
						<h1>What Say Our CLient</h1>
						<p>These reviews showcase Rama Petti Works' commitment to quality, customization, and customer satisfaction, making them a trusted partner for wooden packaging solutions.</p>
					</div>
				</div>
			</div>		
			<div class="row">
				<div class="col-md-12">
					<div class="testimonial-v1-all">
					    <?php
					    $sql = "SELECT * FROM `daysdata` WHERE `status`='1'";
					    $res = mysqli_query($conn,$sql);
					    while($row = mysqli_fetch_assoc($res)){
					        $image  = explode(",", $row['image']);
					        $name =$row['name'];
					        $desc = $row['description'];
					        $post = $row['designation'];
					        $date = $row['date'];
					        $date2 = date($date);
					    ?>
						<div class="single-testimonial-v1">
							<div class="testimonial-v1-img">
							   <img src="img/c.jpg" alt="">
							</div>
							<div class="details">
							   <h2><a href="#"><?=$name?> </a></h2>
							   <span><?=$post?></span>
							</div>
							<div class="rating">
							   <p>"<?=$desc?> "</p>
							  					   
							</div>
						</div>					
					<?php
					    }
					    ?>
							
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Blog Section Start -->	
	<?php include('footer.php')?>
</body>

</html>