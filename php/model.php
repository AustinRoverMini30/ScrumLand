<?php
class ModelArticle{
    private $db;

    public function __construct() {
        $hostname = 'localhost'; 
        $dbname = 'dbscrumland'; 
        $username = 'root'; 
        $password = null;

        $this->db = new PDO("mysql:host=$hostname;dbname=$dbname;charset=utf8;", $username, $password);
    }

    //fonction a titre de test, elle retourne une liste de tous les valeurs de actualités
    public function getToutesLesActu(){
        $stmt = $this->db->prepare("SELECT * FROM ACTUALITE");
        $stmt->execute();
        $lstActu=array();
        while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){
            array_push($lstActu,$row);
        }
        return $lstActu;
    }
}
