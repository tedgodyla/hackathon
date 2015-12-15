<?php

	$title = ( $page === 'homepage' ) ? 'Teddypy' : ucfirst ( $page ) . ' Teddypy';

	$menuItem = array();
	$menuItem[0] = array('Homepage', 'homepage');
	$menuItem[1] = array('Mee doen', 'mee_doen');

	$subMenuItem = array();
	$subMenuItem[0] = array('Winkel', 'winkel', 'mee_doen');
	$subMenuItem[0] = array('Kom langs', 'kom_langs', 'kom_langs');

	$keywords = "";
	$description = "";
	$author = "";
	$robots = "";

?>