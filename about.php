<?php
include("conn.php");
$headerQuery = "SELECT * FROM `cms_menu` WHERE `page_url`='about'";
$headerResult = mysqli_query($conn, $headerQuery);

if ($headerResult && mysqli_num_rows($headerResult) > 0) {
    // Fetch data as an associative array
    $header1 = mysqli_fetch_assoc($headerResult);
} else {
    $header1 = ['page_title' => '', 'message' => '', 'page_keyword' => '']; // Default values if no result is found
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
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
	<!-- Page Heading Section Start -->	
	<div class="pagehding-sec">
		<div class="images-overlay"></div>		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-heading">
						<h1>About Us</h1>
					</div>				
					<div class="page-breadcrumb-inner">
						<div class="page-breadcrumb">
							<div class="breadcrumb-list">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li><a href="#">About Us</a></li>
								</ul>
							</div>					
						</div>				
					</div>				
				</div>				
			</div>
		</div>
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
				<div class="col-md-6">
					<div class="what-we-do-shortdesc">
						<p>Established in the year 1974 at DELHI, we "Rama Petti Works" are as Sole Proprietorship based firm ,engaged as the foremost Manufacturer of Wooden Box and many more.</p>
					</div>
				</div>
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
	 <?php include('footer.php')?>	
</body>
</html>