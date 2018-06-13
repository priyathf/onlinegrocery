<?php
session_start();

if(isset($_GET['clear']))
{
	session_destroy();
	header('Location:index.php');
}

?>