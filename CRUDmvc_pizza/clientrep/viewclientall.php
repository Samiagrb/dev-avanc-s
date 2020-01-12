<?php
$compteur=0;
echo "<div id=Listepizza> ";
echo("<table align='center' ><tr width=90%>");
echo "eee";
foreach($tabclients as $ligne){

	if ($compteur==3){
		echo("</tr><tr>");
		$compteur=0;
	}
	
	echo("<div class='pizza'>");
    echo("<td width=15%>");
	echo'<img src="./images/'.$ligne->getId().'.jpg " alt="" height="100">'."<br>";
	//echo $ligne->getId()."<br>"; 
    echo "Nom : ".$ligne->getNom()."<br>";  
    echo "Prenom : ".$ligne->getPrenom()."<br>";
    echo "Sexe : ".$ligne->getSexe()."<br>";
    
	echo("</div>");

    $compteur=$compteur+1;
}

?>