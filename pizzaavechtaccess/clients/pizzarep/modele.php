<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>
</head>
<body>



<?php 
require_once('conf.php');
require_once('pizzarep/pizza.class.php');

function dbconnect(){
        try{
	           $bdd=new PDO($GLOBALS['_connexion'],$GLOBALS['_username'],$GLOBALS['_password'],array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));

            }
        catch(PDOExeption $e){
	
	           print"	Erreur ! :" . $e->getMessage() . "<br/>"; die();
            }

        return $bdd;
}
function get_all_pizza(){
        $bdd=dbconnect();
        //echo("je suis connecté à ma base ".$GLOBALS['_dbname']);
        $sql_req="select * from pizza";
        $execution=$bdd->query($sql_req)or die("query Error ");
        $result=$execution->fetchAll(PDO::FETCH_OBJ);
        // var_dump($result);
        $pizza=array();
        // $tab_ingredients;
        foreach ($result as $ligne) {
            //instanciation d'une pizza
            $pizza[$ligne->NroPizz]= new Pizza($ligne->NroPizz,$ligne->DesignPizz,$ligne->TarifPizz);
            // $tab_ingredients
            
        }
        
        return $pizza;
}
function get_pizza($id){

        $bdd=dbconnect();
        //echo("je suis connecté à ma base ".$GLOBALS['_dbname']);
        $sql_req="select * from pizza where NroPizz=".$id;
        $execution=$bdd->query($sql_req)or die("query Error ");
        $result=$execution->fetchAll(PDO::FETCH_OBJ);
        // var_dump($result);
        $pizza=array();
        // $tab_ingredients;
        foreach ($result as $ligne) {
            //instanciation d'une pizza
            $pizza[$ligne->NroPizz]= new Pizza($ligne->NroPizz,$ligne->DesignPizz,$ligne->TarifPizz);
            // $tab_ingredients
            
        }
        
        return $pizza;
}


?>