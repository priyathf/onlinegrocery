// JavaScript Document


function frmValidate()
{
var val=document.getElementById('qty').value;
if(isNaN(val)||val<1||val>100)
{
	alert("Invlid Input");
	return false;
}
else
return true;

	
}

function fnClear()
{
	window.open("clear.php?clear=clear","_self");
}

function openCheckout()
{
	window.open("checkout.php","_blank");
	
}

function fnPurchase()
{
	
	
}



function selectItem(item)
{
switch(item)
{
case 'ff500g':
document.getElementById('product').innerHTML="<img src='images/fishfingers.jpg' width='100%'/>";
break;
default:
break;	
}
	
}