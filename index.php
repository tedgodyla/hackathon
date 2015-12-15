<?php 

  	error_reporting(E_ALL ^ E_NOTICE);

	$page = $_GET['page'];
	$page = ( !$page ) ? 'homepage' : $page;
	
	$filename = 'includes/' . $page . '.php';
	
	$page = ( !file_exists( $filename ) ) ? '404' : $page; 

	include_once('config.php');
	include_once('includes/header.php');
	include_once('includes/' . $page . '.php');
	include_once('includes/footer.php');

?>