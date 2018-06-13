<?php
session_start();



if(isset($_SESSION['purchasing']))
{
	
	$name=$_GET['name'];
	$email=$_GET['email'];
	$addr=$_GET['address'];
	$suburb=$_GET['suburb'];
	$state=$_GET['state'];
	$postcode=$_GET['postcode'];
	$country=$_GET['country'];
	$payment=$_GET['payment'];
	$cardnumber=$_GET['cardnumber'];
	$scvc=$_GET['cvc'];
	$msg=$_GET['msg'];
	

		
		//send and email
		
		$message="";
		
		mail($email,"Purchace - onlinegrocery",$msg);
		
		
		session_destroy();		
		

	
	//header('Location:index.php');
	
}

echo "<script>window.close();</script>";

?>