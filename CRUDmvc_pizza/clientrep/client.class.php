<?php

/**
 * Created by PhpStorm.
 * User: Safinou
 * Date: 04/04/2017
 * Time: 15:08
 */
class Clients
{
    private $id;
    private $nom;
    private $prenom;
    private $sexe;

    



    public function __construct($_id, $_nom,$_prenom,$_sexe)
    {
        $this->id = $_id;
        $this->nom = $_nom;
        $this->prenom = $_prenom;
        $this->sexe=$_sexe;
    }

  //   public function ajoutPizza($_id,_$nom,$_prix){
  //   	$sql_req="insert into pizza(".$_id.",".$_nom.",".$_prix.")";
		// $execution=$bdd->query($sql_req)or die("query Error ");
		// $result=$execution->fetchAll(PDO::FETCH_OBJ);

  //   }
    public function setId($_id){
        $this->id=$_id;
    }
    public function getId(){
        return $this->id;
    }
     public function setNom($_nom){
        $this->nom=$_nom;
    }
    public function getNom(){
        return $this->nom;
    }
     public function setPrenom($_prenom){
        $this->prenom=$_prenom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
     public function setSexe($_sexe){
        $this->sexe=$_sexe;
    }
    public function getSexe(){
        return $this->sexe;
    }

}