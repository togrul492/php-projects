<?php
include 'config.php';
include 'datas/categories.php';
if($_SERVER['REQUEST_METHOD']=='GET')
{
	$url = $_GET['mod'];
	if($url=='add')
	{
		include 'includes/head.php';
		include 'includes/header.php';
		include 'category/add.php';
		include 'includes/footer.php';
	}
	else if($url=='list')
	{
		include 'includes/head.php';
		include 'includes/header.php';
		include 'category/list.php';
		include 'includes/footer.php';
	}
	else if($url=='edit')
	{
		include 'includes/head.php';
		include 'includes/header.php';
		include 'category/edit.php';
		include 'includes/footer.php';
	}
}



?>