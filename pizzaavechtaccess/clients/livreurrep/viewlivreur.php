<?php
$compteur=0;
echo "<div id=Listelivreur> ";
echo("<table align='center' ><tr>");
$cpt=1;
foreach($tablivreurs as $ligne){
    echo'<div class="row">';
        echo'<div class="col s12 m4">';
        echo'<div class="card small">';
    echo'<div class="card-image waves-effect waves-block waves-light">';
      echo'<img src="../images/'.$ligne->getId().'.jpg " alt="livreur'.$ligne->getNom().'" height="220">';
    echo'</div>';
    echo'<div class="card-content">';
      echo'<span class="card-title activator blue-text text-dark-4">'.$ligne->getNom().'<i class="material-icons right">more_vert</i></span>';
    echo'</div>';
    echo'<div class="card-reveal">';
      echo'<span class="card-title blue-text text-dark-4">'.$ligne->getNom().'<i class="material-icons right">close</i></span>';
      echo'<p>prenom de livreur : '.$ligne->getPrenom().'€</p>';
    echo'</div>';
  echo'</div>';
        echo'</div>';

    $cpt++;
}


?>