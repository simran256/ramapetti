<?php
include("conn.php");
$headerQuery = "SELECT * FROM `cms_menu` WHERE `page_url`='contact'";
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
						<h1>Contact us</h1>
					</div>				
					<div class="page-breadcrumb-inner">
						<div class="page-breadcrumb">
							<div class="breadcrumb-list">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li style="color:whitesmoke;">Contact us</li>
								</ul>
							</div>					
						</div>				
					</div>				
				</div>				
			</div>
		</div>
	</div>
    	<!-- Contact Page Section Start -->
	<div class="contact-page-sec pt-100 pb-100">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="contact-page-form">
						<h2>Get in Touch</h2>	
						<form action="" method="post">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="single-input-field">
									<input type="text" placeholder="Your Name" name="name"/>
								</div>
							</div>	
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="single-input-field">
									<input type="email" placeholder="E-mail" name="email" required/>
								</div>
							</div>															
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="single-input-field">
									<input type="text" placeholder="Phone Number" name="phone"/>
								</div>
							</div>	
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="single-input-field">
									<input type="text" placeholder="Subject" name="subject"/>
								</div>
							</div>								
							<div class="col-md-12 message-input">
								<div class="single-input-field">
									<textarea  placeholder="Write Your Message" name="message"></textarea>
								</div>
							</div>																								
							<div class="single-input-fieldsbtn">
								<input type="submit" value="Send Now" name="submit"/>
							</div>													
						</form>		
					</div>				
				</div>
				<div class="col-md-4">				
					<div class="contact-info">
					    <?php
				
				$sql = "SELECT * FROM `users`";
				$res = mysqli_query($conn,$sql);
				$row = mysqli_fetch_assoc($res);
				$email = $row['email'];
				$num = $row['mobile']; 
				$address = $row['address']; 
		
			
				?>
						<div class="contact-info-item">
							<div class="contact-info-icon">
								<i class="icofont-map-pins"></i>
							</div>
							<div class="contact-info-text">
								<h2>address</h2>
								<span><?=$address?></span> 
							</div>
						</div>						
					</div>					
					<div class="contact-info">
						<div class="contact-info-item">
							<div class="contact-info-icon">
								<i class="icofont-email"></i>
							</div>
							<div class="contact-info-text">
								<h2>e-mail</h2>
								<span><?=$email?></span>
							</div>
						</div>						
					</div>								
					<div class="contact-info">
						<div class="contact-info-item">
							<div class="contact-info-icon">
								<i class="icofont-wall-clock"></i>
							</div>
							<div class="contact-info-text">
								<h2>Mobile No.</h2>
								<span>+91-<?=$num?></span> 
							</div>
						</div>						
					</div>					
				</div>				
			</div>
		</div>
	</div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1749.975299317002!2d77.29781323887792!3d28.691124346798613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfb90fc6036af%3A0xeb6e113f29d6a239!2sWest%20Jyoti%20Nagar%2C%20Nathu%20Colony%2C%20Shahdara%2C%20Delhi!5e0!3m2!1sen!2sin!4v1731043724249!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<!-- Contact Page Section End -->		
	 <?php include('footer.php')?>	
	  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
<?php 
include("conn.php");
ini_set('display_errors', 1);
error_reporting(E_ALL);
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'PHPMailer/PHPMailer/src/Exception.php';  // if one level up
// require 'PHPMailer/PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/PHPMailer/src/SMTP.php';


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Insert into the database
    $sql = "INSERT INTO tbl_contact(name, email, phone, subject, message)
            VALUES ('$name', '$email', '$phone', '$subject', '$message')";
    $res = mysqli_query($conn, $sql);
    
      if ($email === false) {
        echo "<script>alert('Invalid email address')</script>";
        exit;
    }
    
      ob_start(); 
    include 'emailTemplate.php'; 
     $message2 = ob_get_clean(); 
     
       $to = "developer.web2techsolutions@gmail.com";
    $subject = $subject;
    // $body = "<html><body>";
    // $body .= "<h2>Enquiry From: " . $name . "</h2>";
    // $body .= "<p><strong>Name:</strong> " . $name . "</p>";
    // $body .= "<p><strong>Email:</strong> " . $email . "</p>";
    // $body .= "<p><strong>Number:</strong> " . $phone . "</p>";
    // $body .= "<p><strong>Subject:</strong> " . $subject . "</p>";
    // $body .= "<p><strong>Message:</strong> " . $message . "</p>";
    $body .= $message2; // This will append the content of emailTemplate.php
    $body .= "</body></html>";
    
    
    
     $headers = "From: no-reply@Rama-Petti-Work.com\r\n" .
                       "Reply-To: no-reply@Rama-Petti-Work.com\r\n" .
                       "MIME-Version: 1.0\r\n" .
                       "Content-Type: text/html; charset=UTF-8\r\n";
                       
                         if (mail($to, $subject, $body, $headers)) {
                echo '<script>
                    Swal.fire({
                        icon: "success",
                        title: "Data Sent Successfully",
                      
                        confirmButtonText: "OK"
                    }).then(function() {
                        window.location.href = "index.php";
                    });
                </script>';
            } else {
                echo '<script>
                    Swal.fire({
                        icon: "error",
                        title: "Email Error!",
                        text: "Failed to send the email. Please try again later.",
                        confirmButtonText: "OK"
                    });
                </script>';
            }
}
?>
