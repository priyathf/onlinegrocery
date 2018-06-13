<?php
session_start();


if(isset($_GET['checkout']))
{
	$_SESSION['purchasing']="done";
}




?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>onlinegrocery</title>

<link rel="stylesheet" href="css/style.css" />

<script type="text/javascript" src="js/jsfuncs.js"></script>

</head>

<body>

<h1>Checkout</h1>



<?php
if(isset($_SESSION['addedproducts'])&&isset($_SESSION['addedqty']))
{
	echo "<table border=\"1\" align=\"center\">";
	echo "<tr><th>Product ID</th><th>Product Name</th><th>Unit Qty</th><th>Qty</th><th>Unit price</th><th>Price</th></tr>";
	$addedproducts=$_SESSION['addedproducts'];
	$addedqty=$_SESSION['addedqty'];

	$total = 0;
	$message = "
	\t\t\t\t\t Invoice \n\t\t\t\t\t\tOnline Grocery\n\n\n
	Product ID \t Product Name \t Unit Qty \t Qty \t Unit Price \t Price ($) \n
	
	";
	
	include("dbcon.php");

	if($con)
	{
	$len=count($addedproducts);
	for($i=0;$i<$len;$i++)
	{
	$pid=$addedproducts[$i];
	$qty=$addedqty[$i];	
	$sql="select*from products where product_id='".$pid."'";
	$res=mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($res))
	{
		echo "<tr><td>".$pid."</td><td>".$row['product_name']."</td><td>".$row['unit_quantity']."</td><td>".$qty."</td><td>".$row['unit_price']."</td><td>".$row['unit_price']*$qty."</td></tr>";
		
		$total = $total + $row['unit_price']*$qty;
		
		$message .= "".$pid."\t".$row['product_name']."\t".$row['unit_quantity']."\t".$qty."\t".$row['unit_price']."\t".$row['unit_price']*$qty."\n";
	}
	 $message .= "\n\n\n Total: $ ".$total;
	
	}
	}
	

	
	echo "</table>";
	echo "<br><br><br>";
	
	echo "<div align=\"center\"><b>Total: $ ".$total."</b></div>";
	
	
	echo "<br /><br /><br /><br />";

	
	
}
?>




<form method="get" action="purchase.php">

<table border="0" align="center">

<tr><td>Name*</td><td><input type="text" name="name" /></td><td></td><td></td></tr>
<tr><td>Address*</td><td><input type="text" name="address" /></td><td>Suburb</td><td><input type="text" name="suburb" /></td></tr>
<tr><td>State</td><td><select name="state"><option value="nsw">NSW</option><option value="vic">VIC</option><option value="qld">QLD</option><option value="">WA</option><option value="">SA</option><option value="nt">NT</option><option value="act">ACT</option><option value="tas">TAS</option></select></td><td>Post code</td><td><input type="number" name="postcode" /></td></tr>
<tr><td>Country</td><td><input type="text" name="country" /></td><td></td><td></td></tr>
<tr><td>Email*</td><td><input type="email" name="email" /></td><td></td><td></td></tr>
<tr><td>Payment method</td><td><select name="payment"><option value="visa">Visa</option><option value="mastercard">MasterCard</option><option value="paypal">Paypal</option></select></td><td></td><td></td></tr>
<tr><td>Card Number</td><td><input type="text" name="cardnumber" /></td><td>CVC</td><td><input type="text" name="cvc" /></td></tr>
<tr><td></td><td></td><td></td><td><input type="submit" value="Purchase"/></td></tr>

</table>

<?php
echo "<input type=\"hidden\" name=\"msg\" value=\"".$message."\"/>";
?>

</form>





</body>
</html>