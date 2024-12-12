 <?php  
include("conn.php");
$url = mysqli_real_escape_string($conn, $_GET['alias']);
$query = "SELECT * FROM cat_prod WHERE ct_pd_url = '$url' AND status = '1' LIMIT 1";
$header = mysqli_query($conn, $query);

if (mysqli_num_rows($header) > 0) {
    $header1 = mysqli_fetch_assoc($header);
    $subcategory_id = $header1['id']; // Get the subcategory ID
    $subcategory_name = $header1['ct_pd_name']; // Get the subcategory name
    $product_images = explode(",", $header1['cat_pd_image']); // Split image filenames
    $price = $header1['cat_pd_price'];
    $mrp =$header1['cat_pd_mrp'];
    $long_desc = $header1['long_description'];
} 
$headerQuery = "SELECT * FROM `cms_menu` WHERE `page_url`='home'";
$headerResult = mysqli_query($conn, $headerQuery);
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<meta charset="utf-8">
	<title><?php echo $header1['ct_pd_title'];?></title>		
    <meta name="author" content="<?php echo $theme['ct_pd_sl'];?>">
    <meta name="description" content="<?php echo $header1['ct_pd_mt_ds'];?>">
    <link rel="canonical" href="<?php echo $header1['ct_pd_ky'];?>" >	
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700,800" rel="stylesheet"> 
	<link rel="stylesheet" href="<?=$site?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=$site?>css/magnific-popup.css">
	<link rel="stylesheet" href="<?=$site?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?=$site?>css/animate.css">
	<link rel="stylesheet" href="<?=$site?>css/main.css">
	<link rel="stylesheet" href="<?=$site?>style.css">
	<link rel="stylesheet" href="<?=$site?>css/meanmenu.min.css">
	<link rel="stylesheet" href="<?=$site?>css/icofont.min.css">
	<link rel="stylesheet" href="<?=$site?>css/responsive.css">	
	<link rel="stylesheet" href="<?=$site?>css/all.min.css">	
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
						<h1><?= $subcategory_name  ?></h1>
					</div>				
					<div class="page-breadcrumb-inner">
						<div class="page-breadcrumb">
							<div class="breadcrumb-list">
								<ul>
									<li><a href="<?=$site?>index.php">Home</a></li>
									<li style="color:whitesmoke;"><?= $subcategory_name  ?></li>
								</ul>
							</div>					
						</div>				
					</div>				
				</div>				
			</div>
		</div>
	</div>
	<!-- Page Heading Section End -->	
	
	<!-- Service Details Section Start -->	
	<div class="">
		<div class="container">		
			<div class="row">	
				<div class="col-md-12">
					<div class="service-details">
						<div class="service-details-thumb">
						
								<img src="<?=$site?>admin/uploads/product/cat_pd_image/<?=htmlspecialchars($product_images[0])?>" alt=""/>
						
					</div>
					<div class="about-text">
                                <p>
                                  <?=$long_desc?>



                                </p>
                               
                                 <a class="btn" style="    padding: 12px 14px;
                                 margin: 10px;
    display: inline-block;
    font-weight: 600;
    text-transform: capitalize;
    margin-top: 13px;
    border-bottom: 1px solid #9c2416;
    text-align: center;
    background: #9c2416;
    color: #fff;"href="<?=$site?>contact-us.php">Yes! I am Interested</a>
                            </div>
				</div>
			</div>
		</div>	
	</div>	
	<!-- Service Details Section End -->	

	<?php include('footer.php')?>
</body>
</html>
