<?php
session_start();



$pid=$_GET['pid'];

include("dbcon.php");


$uprice=0;
$pname="";
$uquantity=0;

if(!isset($_SESSION['purchasing']))
{
	$_SESSION['purchasing']="yes";
}


if($con)
{
	$sql="select*from products where product_id='".$pid."'";
	$res=mysqli_query($con,$sql);
	
	while($row=mysqli_fetch_array($res))
	{
		$uprice=$row['unit_price'];
		$pname=$row['product_name'];
		$uquantity=$row['unit_quantity'];	
	}
	echo $sql;
	
	
	$_SESSION['uprice']=$uprice;
	$_SESSION['pname']=$pname;
	$_SESSION['uquantity']=$uquantity;
	$_SESSION['pid']=$pid;
	//header('Location:index.php?uprice='.$uprice.'&pname='.$pname.'&uquantity='.$uquantity);
}
else
{
	
}


header('Location:index.php');



?>