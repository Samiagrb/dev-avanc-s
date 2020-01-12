<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="pizza.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Document</title>

</head>
<body>
    <?php
    $numLivr = $_GET['numLivr'];
    //echo($numPizza);

    try{
        $bdd = mysqli_connect('localhost', 'root', '', 'pizza');
        mysqli_set_charset($bdd,"utf8");

        $req="SELECT * FROM livreur WHERE NroLivr=".$numLivr;

        //echo($req);
        //$data = mysqli_result($bdd,$req);
        $data = $bdd->query($req)->fetch_row();

        //var_dump($data);

        echo("<a class='list btn btn-info' href='index3.php'>Retour à la liste</a>");

        echo('<div class="container">');
        echo('<form action="recupModifLivr.php" method="post">');
            echo('<input type="hidden" name="numLivr" value="'.$numLivr.'">');
			echo('<h1>Formulaire Modification Livreur</h1>');
  			echo('<div class="form-group">');
    			echo('<label>Nom de la pizza :</label>');
    			echo('<input type="text" class="form-control" name ="nom" id="nom" value="'.$data[1].'">');
 			echo('</div>');
  			echo('<div class="form-group">');
    			echo('<label>Prenom :</label>');
    			echo('<input type="text" class="form-control" name="prenom" id="prenom" value="'.$data[2].'">');
 			echo('</div>');
  			echo('<div class="form-group">');
                echo('<label>Inserer la photo :</label>');
                echo("<img src='images/".$data[0].".jpg' style='width:300px'>");
    			echo('<input class="form-control" type="file" name="photo" id="photo">');
  			echo('</div>');
  			echo('<div class="form-group">');
    			echo('<label>Date dembauche: </label>');
    			echo('<input type="date" class="form-control" name="dateEmbauche" id="dateEmbauche" value="'.$data[3].'">');
 			echo('</div>');
  			echo('<button type="submit" class="btn btn-default">Valider</button>');
		echo('</form>');



    }catch (Exception $e){
        echo "Erreur connection".$e;
    }
    ?>
</body>
</html>