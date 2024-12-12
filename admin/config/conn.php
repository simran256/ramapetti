
<?php
error_reporting(0);
session_start();
$ses_id = session_id();

$host = 'localhost';
$username = 'web2te_rama_petti_new';
$password = '#AHnYsatiF}o';
$dbName = 'web2te_rama_petti_new';



$conn = new mysqli($host,$username,$password,$dbName);
if($conn->connect_errno)
{
	echo $conn->connect_error;
}

//$site_root = 'https://'.$_SERVER['HTTP_HOST'].'/';
$site_root = 'https://web2tech.org/Rama-Petti-Work/admin';
$site = 'https://web2tech.org/Rama-Petti-Work/';

?>