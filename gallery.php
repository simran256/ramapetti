<?php 
include("conn.php");
$headerQuery = "SELECT * FROM `cms_menu` WHERE `page_url`='gallery'";
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
						<h1>Gallery</h1>
					</div>				
					<div class="page-breadcrumb-inner">
						<div class="page-breadcrumb">
							<div class="breadcrumb-list">
								<ul>
									<li><a href="<?=$site?>index.php">Home</a></li>
									<li style="color:whitesmoke;">Gallery</li>
								</ul>
							</div>					
						</div>				
					</div>				
				</div>				
			</div>
		</div>
	</div>
 <!-- Gallery Section Start -->
	<div class="gallery-sec pt-50 pb-50">	
		<div class="container">
				
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
						<!-- Gallery Item Block End -->							
					<?php
						}
						?>
					</div>
					
				</div>				
			</div>
		</div>
	</div>
			<!-- team Section End -->	
	 <?php include('footer.php')?>	
</body>
</html>