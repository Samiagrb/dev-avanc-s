<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>
</head>
<body>



<?php 
require_once('conf.php');
require_once('clientrep/client.class.php');

function dbconnect(){
        try{
	           $bdd=new PDO($GLOBALS['_connexion'],$GLOBALS['_username'],$GLOBALS['_password'],array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));

            }
        catch(PDOExeption $e){
	
	           print"	Erreur ! :" . $e->getMessage() . "<br/>"; die();
            }

        return $bdd;
}
function get_all_clients(){
        $bdd=dbconnect();
        echo("je suis connecté à ma base ".$GLOBALS['_dbname']);
        $sql_req="select * from client";
        $execution=$bdd->query($sql_req)or die("query Error ");
        $result=$execution->fetchAll(PDO::FETCH_OBJ);
        // var_dump($result);
        $clients=array();
        // $tab_ingredients;
        foreach ($result as $ligne) {
            //instanciation d'une pizza
            $clients[$ligne->NroClie]= new Clients($ligne->NroClie,$ligne->NomClie,$ligne->PrenomClie,$ligne->TitreClie);
            // $tab_ingredients
            
        }
        
        return $clients;
}
function get_clients($id){

        $bdd=dbconnect();
        echo("je suis connecté à ma base ".$GLOBALS['_dbname']);
        $sql_req="select * from client where NroClie=".$id;
        $execution=$bdd->query($sql_req)or die("query Error ");
        $result=$execution->fetchAll(PDO::FETCH_OBJ);
        // var_dump($result);
        $clients=array();
        // $tab_ingredients;
        foreach ($result as $ligne) {
            //instanciation d'une pizza
            $clients[$ligne->NroClie]= new Clients($ligne->NroClie,$ligne->NomClie,$ligne->PrenomClie,$ligne->TitreClie);
            // $tab_ingredients
            
        }
        
        return $clients;
}


?>