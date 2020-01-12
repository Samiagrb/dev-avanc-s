<?php
	$id=$action;

	require('clients/modele.php');

	if(empty($id)){
		$tabclients=get_all_clients();
	}
	else{
	$tabclients=get_clients($id);
	}
	// var_dump($tabclients);

	require ('clients/viewclients.php');





?>