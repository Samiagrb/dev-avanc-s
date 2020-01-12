<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>
</head>
<body>



<?php 
require_once('conf.php');
require_once('livreurrep/livreur.class.php');

function dbconnect(){
        try{
	           $bdd=new PDO($GLOBALS['_connexion'],$GLOBALS['_username'],$GLOBALS['_password'],array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));

            }
        catch(PDOExeption $e){
	
	           print"	Erreur ! :" . $e->getMessage() . "<br/>"; die();
            }

        return $bdd;
}
function get_all_livreur(){
        $bdd=dbconnect();
        //echo("je suis connecté à ma base ".$GLOBALS['_dbname']);
        $sql_req="select * from livreur";
        $execution=$bdd->query($sql_req)or die("query Error ");
        $result=$execution->fetchAll(PDO::FETCH_OBJ);
        // var_dump($result);
        $livreur=array();
        // $tab_ingredients;
        foreach ($result as $ligne) {
            //instanciation d'un livreur
            $livreur[$ligne->NroLivr]= new Livreur($ligne->NroLivr,$ligne->NomLivr,$ligne->PrenomLivr,$ligne->DatEmbauchLivr);
            // $tab_ingredients
            
        }
        
        return $livreur;
}
function get_livreur($id){

        $bdd=dbconnect();
        //echo("je suis connecté à ma base ".$GLOBALS['_dbname']);
        $sql_req="select * from livreur where NroLivr=".$id;
        $execution=$bdd->query($sql_req)or die("query Error ");
        $result=$execution->fetchAll(PDO::FETCH_OBJ);
        // var_dump($result);
        $livreur=array();
        // $tab_ingredients;
        foreach ($result as $ligne) {
            //instanciation d'un livreur
            $livreur[$ligne->NroLivr]= new Livreur($ligne->NroLivr,$ligne->NomLivr,$ligne->PrenomLivr,$ligne->DatEmbauchLivr);
            
        }
        
        return $livreur;
}


?>