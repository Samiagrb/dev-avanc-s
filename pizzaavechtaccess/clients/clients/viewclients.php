<?php
$compteur=0;
echo "<div id=Listepizza> ";
echo("<table align='center' ><tr width=90%>");
foreach($tabclients as $ligne){

	if ($compteur==3){
		echo("</tr><tr>");
		$compteur=0;
	}
	echo("<td width=15%><IMG SRC='../../images/".$ligne->getSexe().".jpg' width='50' height='50'></td>");
	echo("<div class='pizza'>");
    echo("<td width=15%>");
	echo $ligne->getId()."<br>"; 
    echo $ligne->getNom()."<br>";  
    echo $ligne->getPrenom()."<br>";

    
	echo("</div>");

    $compteur=$compteur+1;
}

?>