<?php
	$id=$action;

	require('livreurrep/modele.php');
	
	if(empty($id)){
		$tablivreurs=get_all_livreur();
        require ('livreurrep/viewlivreurall.php');
	}
	else{
	$tablivreurs=get_livreur($id);
        require ('livreurrep/viewlivreur.php');
	}
	//var_dump($tabpizzas);

	





?>