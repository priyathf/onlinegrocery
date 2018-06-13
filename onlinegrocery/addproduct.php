<?php
session_start();





	$pid=$_GET['pid'];
	$qty=$_GET['qty'];
	$action=$_GET['action'];
	

	
if(isset($_SESSION['addedproducts']))
{

	$addedproducts=$_SESSION['addedproducts'];
	$addedqty=$_SESSION['addedqty'];
	if($action=="add")
	{
		if(in_array($pid,$addedproducts)) //if product already selected add new qty to previous qty
		{
			$index = array_search($pid,$addedproducts); //get index of existing product
			$addedqty[$index] = $addedqty[$index] + $qty; //update the quantity
		}
		else
		{
			array_push($addedproducts,$pid);
			array_push($addedqty,$qty);
		}

	
	}
	else if($action=="remove")
	{
		
	}
	
	unset($_GET['pid']);
	unset($_GET['qty']);
	unset($_GET['action']);
	
	$_SESSION['addedproducts']=$addedproducts;
	$_SESSION['addedqty']=$addedqty;
	

}
else
{
$addedproducts=array($pid);	
$addedqty=array($qty);	

$_SESSION['addedproducts']=$addedproducts;
$_SESSION['addedqty']=$addedqty;


}




header('Location:index.php');


?>