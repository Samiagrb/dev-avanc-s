<?php
	$id=$action;

	require('pizzarep/modele.php');
	
	if(empty($id)){
		$tabpizzas=get_all_pizza();
        require ('pizzarep/viewpizzaall.php');
	}
	else{
	$tabpizzas=get_pizza($id);
        require ('pizzarep/viewpizza.php');
	}
	//var_dump($tabpizzas);

	





?>