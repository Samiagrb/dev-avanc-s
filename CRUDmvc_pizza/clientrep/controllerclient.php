<?php
	$id=$action;

	require('clientrep/modele.php');

	if(empty($id)){
		$tabclients=get_all_clients();
		require ('clientrep/viewclientall.php');
	}
	else{
	    $tabclients=get_clients($id);
	    require ('clientrep/viewclient.php');
	}
	// var_dump($tabclients);

	//require ('clientrep/viewclientall.php');





?>