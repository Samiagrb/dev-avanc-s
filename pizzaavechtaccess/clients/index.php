<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset =utf-8>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script> 
</head>
<body>
<h1 style="text-align:center">PizzaWeb</h1>
<?php
ini_set('display_errors','off');
//var_dump($_GET);
echo("<br>");
//echo($_SERVER['REQUEST_URI']);

$controller=$_GET['controller'];
$action=$_GET['action'];

echo("le controller "  .$controller ."  et le numero item ou action ".$action);
echo("<br>");
echo("le rep  \$_SERVER [ 'DOCUMENT_ROOT ' ] du serveur est  ". $_SERVER['DOCUMENT_ROOT']);
echo("<br>");
echo("le rep actuel  est      __DIR__    ". __DIR__);
echo("<br>");
echo("le file actuel est  __FILE__   ". __FILE__);
echo("<br>");
echo("le server name \$_SERVER['SERVER_NAME'] est ". $_SERVER['SERVER_NAME']);
echo("<br>");
echo("le uri \$_SERVER['REQUEST_URI'] est ".$_SERVER['REQUEST_URI']);
echo("<br>");

$mesControllers= array("pizza","clients","livreur",);

if (in_array($controller,$mesControllers)){
		echo "controller trouvé";echo("<br>");

		if (!empty($action)){
			if(!preg_match('/^[0-9]*$/',$action)){
			echo("Mauvais numéro pour le controller".$controller);
			}
			else{
			/**echo("Je vais appeler le controller : ".$controller." en transmettant le numéro ".$action);
			echo("<br>");**/
			$controllerfile="./".$controller."rep/controller".$controller.".php"; //."?id=".$data[4]
                //echo ($controllerfile);
			require ($controllerfile);
			}
		}

		else{
			echo("Je vais appeler le controller : ".$controller);
			
			$controllerfile="./".$controller."rep/controller".$controller.".php"; //."?id=".$data[4]
			require ($controllerfile);
		}
}
else{
	echo("Controller non trouvé");
}
?>
</body>
</html>