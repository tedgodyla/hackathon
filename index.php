<?php 

  	error_reporting(E_ALL ^ E_NOTICE);

	$page = $_GET['page'];
	$subpage = $_GET['subpage'];
	
	$page = ( !$page ) ? 'homepage' : $page;
	
	$filename = ( $subpage ) ? $subpage : $page;
	$filepath = 'includes/' . $filename . '.php';
	
	$filepath = ( !file_exists( $filepath ) ) ? 'includes/404.php' : $filepath; 

	include_once('config.php');
	include_once('includes/header.php');
	include_once($filepath);
	include_once('includes/footer.php');

?>