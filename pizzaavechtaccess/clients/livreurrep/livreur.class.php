<?php
class livreur
{
    private $id;
    private $nom;
    private $prenom;
	private $datEmbauchLivr;


    



    public function __construct($_id, $_nom,$_prenom,$_datEmbauchLivr)
    {
        $this->id = $_id;
        $this->nom = $_nom;
        $this->prenom = $_prenom;
		$this->datEmbauchLivr = $_datEmbauchLivr;
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
     public function setPrenom($_prenom){
        $this->prenom=$prenom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
	 public function setDatEmbauchLivr($_datEmbauchLivr){
        $this->prenom=$prenom;
    }
    public function getDatEmbauchLivr(){
        return $this->_datEmbauchLivr;
    }

}