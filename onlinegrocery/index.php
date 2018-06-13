
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>onlinegrocery</title>

<link rel="stylesheet" href="css/style.css" />

<script type="text/javascript" src="js/jsfuncs.js"></script>

</head>

<body>
<?php
session_start();
?>


<div class="leftDiv">
  <img src="images/logoname.jpg" width="100%" height="20%" />
 

<div class="menudiv" width="100%">
<ul class="cats">

<li id="frozen" width="100%">
<a href="#"><img src="images/frozen.jpg" class="imgcats" width="100%" height="20%"></img></a>
	<ul class="itemslist">
    <li>
    <a href="getproduct.php?pid=1002"><img src="images/hamburger.jpg" class="imgcats" width="100%" height="20%"></img></a>
    </li>
    <li id="fishfinger">
    <a href="#"><img src="images/fishfingers.jpg" class="imgcats" width="100%" height="20%"></img></a>
    	<ul class="weight">
            <li>
    		<a href="getproduct.php?pid=1000"><img src="images/500gram.jpg" class="imgcats" width="100%" height="50%"></img></a>
    		</li>
    		<li>
    		<a href="getproduct.php?pid=1001"><img src="images/1000grams.jpg" class="imgcats" width="100%" height="50%"></img></a>
    		</li>
        </ul>
    </li>
    <li id="shelledprawns">
    <a href="getproduct.php?pid=1003"><img src="images/shelledprawns.jpg" class="imgcats" width="100%" height="20%"></img></a>
    </li>
    <li id="tubicecream">
    <a href="#"><img src="images/tubicecream.jpg" class="imgcats" width="100%" height="20%"></img></a>
       	<ul class="weight">
            <li>
    		<a href="getproduct.php?pid=1004"><img src="images/1litre.jpg" class="imgcats" width="100%" height="50%"></img></a>
    		</li>
    		<li>
    		<a href="getproduct.php?pid=1005"><img src="images/2litre.jpg" class="imgcats" width="100%" height="50%"></img></a>
    		</li>
        </ul>
    </li>
    </ul>
</li>
<li id="fresh" width="100%">
<a href="#"><img src="images/fresh.jpg" class="imgcats" width="100%" height="20%"></img></a>
	<ul class="itemslist">
    <li>
    <a href="getproduct.php?pid=3002"><img src="images/tbonesteak.jpg" class="imgcats" width="100%" height="20%"></img></a>
    </li>
        <li id="cheddarcheese">
    <a href="#"><img src="images/cheddercheese.jpg" class="imgcats" width="100%" height="20%"></img></a>
           	<ul class="weight">
            <li>
    		<a href="getproduct.php?pid=3000"><img src="images/500gram.jpg" class="imgcats" width="100%" height="50%"></img></a>
    		</li>
    		<li>
    		<a href="getproduct.php?pid=3001"><img src="images/1000grams.jpg" class="imgcats" width="100%" height="50%"></img></a>
    		</li>
        </ul>
    </li>
        <li>
    <a href="getproduct.php?pid=3003"><img src="images/navelorange.jpg" class="imgcats" width="100%" height="20%"></img></a>
    </li>
        <li>
    <a href="getproduct.php?pid=3004"><img src="images/banana.jpg" class="imgcats" width="100%" height="20%"></img></a>
    </li>
        <li>
    <a href="getproduct.php?pid=3006"><img src="images/grapes.jpg" class="imgcats" width="100%" height="20%"></img></a>
    </li>
        <li>
    <a href="getproduct.php?pid=3007"><img src="images/apples.jpg" class="imgcats" width="100%" height="20%"></img></a>
    </li>
        <li>
    <a href="getproduct.php?pid=3005"><img src="images/peaches.jpg" class="imgcats" width="100%" height="20%"></img></a>
    </li>
    </ul>
</li>
<li id="bev" width="100%">
<a href="#"><img src="images/beverages.jpg" class="imgcats" width="100%" height="20%"></img></a>
	<ul class="itemslist">
    <li id="coffee">
    <a href="#"><img src="images/coffee.jpg" class="imgcats" width="100%" height="20%"></img></a>
               	<ul class="weight">
            <li>
    		<a href="getproduct.php?pid=4003"><img src="images/200gram.jpg" class="imgcats" width="100%" height="50%"></img></a>
    		</li>
    		<li>
    		<a href="getproduct.php?pid=4004"><img src="images/500gram.jpg" class="imgcats" width="100%" height="50%"></img></a>
    		</li>
        </ul>
    </li>
        <li id="earl">
    <a href="#"><img src="images/earlgreyteabags.jpg" class="imgcats" width="100%" height="20%"></img></a>
            <ul class="weight">
            <li>
    		<a href="getproduct.php?pid=4000"><img src="images/pack25.jpg" class="imgcats" width="100%" height="50%"></img></a>
    		</li>
    		<li>
    		<a href="getproduct.php?pid=4001"><img src="images/pack100.jpg" class="imgcats" width="100%" height="50%"></img></a>
    		</li>
            <li>
    		<a href="getproduct.php?pid=4002"><img src="images/pack200.jpg" class="imgcats" width="100%" height="50%"></img></a>
    		</li>
        </ul>
    </li>
        <li>
    <a href="getproduct.php?pid=4005"><img src="images/chocolatebar.jpg" class="imgcats" width="100%" height="20%"></img></a>
    </li>
    </ul>
</li>
<li id="home" width="100%">
<a href="#"><img src="images/home.jpg" class="imgcats" width="100%" height="20%"></img></a>
	<ul class="itemslist">
    <li>
    <a href="getproduct.php?pid=2002"><img src="images/bathsoap.jpg" class="imgcats" width="100%" height="20%"></img></a>
    </li>
        <li id="panadol">
    <a href="#"><img src="images/panadol.jpg" class="imgcats" width="100%" height="20%"></img></a>
            <ul class="weight">
            <li>
    		<a href="getproduct.php?pid=2000"><img src="images/pack24.jpg" class="imgcats" width="100%" height="50%"></img></a>
    		</li>
    		<li>
    		<a href="getproduct.php?pid=2001"><img src="images/bottle50.jpg" class="imgcats" width="100%" height="50%"></img></a>
    		</li>
        </ul>
    </li>
        <li>
    <a href="getproduct.php?pid=2005"><img src="images/washingpowder.jpg" class="imgcats" width="100%" height="20%"></img></a>
    </li>
            <li id="gbag">
    <a href="#"><img src="images/garagebag.jpg" class="imgcats" width="100%" height="20%"></img></a>
            <ul class="weight">
            <li>
    		<a href="getproduct.php?pid=2003"><img src="images/smallpack10.jpg" class="imgcats" width="100%" height="50%"></img></a>
    		</li>
    		<li>
    		<a href="getproduct.php?pid=2004"><img src="images/largepack50.jpg" class="imgcats" width="100%" height="50%"></img></a>
    		</li>
        </ul>
    </li>
            <li>
    <a href="getproduct.php?pid=2006"><img src="images/laundrybleach.jpg" class="imgcats" width="100%" height="20%"></img></a>
    </li>
    </ul>
</li>
<li id="pets" width="100%">
<a href="#"><img src="images/pet.jpg" class="imgcats" width="100%" height="20%"></img></a>
	<ul class="itemslist">
    <li>
    <a href="getproduct.php?pid=5002"><img src="images/birdfood.jpg" class="imgcats" width="100%" height="20%"></img></a>
    </li>
        <li>
    <a href="getproduct.php?pid=5003"><img src="images/catfood.jpg" class="imgcats" width="100%" height="20%"></img></a>
    </li>
        <li id="dogfood">
    <a href="#"><img src="images/drydogfood.jpg" class="imgcats" width="100%" height="20%"></img></a>
               <ul class="weight">
            <li>
    		<a href="getproduct.php?pid=5001"><img src="images/1kgpack.jpg" class="imgcats" width="100%" height="50%"></img></a>
    		</li>
    		<li>
    		<a href="getproduct.php?pid=5000"><img src="images/5kgpack.jpg" class="imgcats" width="100%" height="50%"></img></a>
    		</li>
        </ul>
    </li>
        <li>
    <a href="getproduct.php?pid=5004"><img src="images/fishfood.jpg" class="imgcats" width="100%" height="20%"></img></a>
    </li>
    </ul>


</li>

</ul>
</div>




  
</div>








<div class="toprightDiv">
<div id="product"></div>


<?php

if(isset($_SESSION['pid']))
{
$uprice=$_SESSION['uprice'];
$pname=$_SESSION['pname'];
$uquantity=$_SESSION['uquantity'];
$pid=$_SESSION['pid'];


}

?>




<div id="selectedItem">

<form action="addproduct.php" method="get" onsubmit="return frmValidate()">


<?php
if(isset($_SESSION['uprice'])&&$_SESSION['purchasing']=="yes")
{
echo "<b>Product Name:</b> ".$pname."<br>";
echo "<b>Unit Quantity:</b> ".$uquantity."<br>";
echo "<b>Unit Price:</b> ".$uprice."<br>";
echo "<b>Quantity</b> <input type=\"text\" name=\"qty\" id=\"qty\"/><br><br><br>";
echo "<input type=\"hidden\" name=\"pid\" value='".$pid."' />";
echo "<input type=\"hidden\" name=\"action\" value='add' />";
echo "<input type=\"submit\" value=\"Add Product\"></input>";
//unset the get values
unset($_SESSION['uprice']);
unset($_SESSION['pname']);
unset($_SESSION['uquantity']);
unset($_SESSION['pid']);


}
?>


</form>

</div>

</div>






<div class="bottomrightDiv">


<div align="center">
<form method="get" onsubmit="openCheckout()">

<?php
if(isset($_SESSION['addedproducts'])&&isset($_SESSION['addedqty']))
{
	echo "<table border=\"1\" align=\"center\">";
	echo "<tr><th>Product ID</th><th>Product Name</th><th>Unit Qty</th><th>Qty</th><th>Unit price</th><th>Price</th></tr>";
	$addedproducts=$_SESSION['addedproducts'];
	$addedqty=$_SESSION['addedqty'];

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
	}
	
	
	}
	}
	
	echo "</table>";
	
	
	echo "";
	
	
	echo "<br /><br /><br /><br />";
	echo "<input type=\"submit\" name=\"checkout\" value=\"Checkout\"/>";
	echo "<button type=\"button\" onclick=\"fnClear()\">Clear</button>";
	
	
}
?>



</form>

</div>

</div>


</body>
</html>
