<?php
class Pizza
{
    private $id;
    private $nom;
    private $prix;

    



    public function __construct($_id, $_nom,$_prix)
    {
        $this->id = $_id;
        $this->nom = $_nom;
        $this->prix = $_prix;
    }
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
     public function setPrix($_prix){
        $this->prix=$_prix;
    }
    public function getPrix(){
        return $this->prix;
    }

}