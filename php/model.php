<?php
class Model{
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

    public function getManifestations(){
        $stmt = $this->db->prepare("SELECT * FROM manifestation");
        $stmt->execute();
        $lstActu=array();
        while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){
            array_push($lstActu,$row);
        }
        return $lstActu;
    }

    public function getElus(){
        $stmt = $this->db->prepare("SELECT * FROM ELU");
        $stmt->execute();
        return $stmt;   
    }

    //fonction qui etourne une liste de toute les images de la ville
    public function getImages($id){
        $stmt = $this->db->prepare("SELECT nom_img,path_img FROM IMAGE WHERE id_img=:id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $lstImg=array();
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
        echo '<img src= ' . htmlspecialchars($row['path_img']) .  ' alt=" ' . htmlspecialchars($row['nom_img']) . '" width="100%">';
    }

    public function getAllImages(){
        $stmt = $this->db->prepare("SELECT nom_img,path_img FROM IMAGE");
        $stmt->execute();
        $lstImg=array();
        while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){
            echo '<label>' . htmlspecialchars($row['nom_img']) . '</label> </br></br>';
            echo '<img src= ' . htmlspecialchars($row['path_img']) .  ' alt=" ' . htmlspecialchars($row['nom_img']) . '" width="100%"> </br></br>';
        }
    }

    public function getCommerce(){
        $stmt = $this->db->prepare("SELECT * FROM COMMERCE");
        $stmt->execute();
        while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){
            echo '<div>';
            echo '<h3>' . htmlspecialchars($row['nom_com']) . '</h3>';
            echo '<p>' . htmlspecialchars($row['desc_com']) . '</p>';
            echo '<p>' . htmlspecialchars($row['mail_com']) . '</p>';
            echo '<p>' . htmlspecialchars($row['tel_com']) . '</p>';
            echo '<p>' . htmlspecialchars($row['type_com']) . '</p>';
            echo '</div>';
        }
    }

    public function getActualite(){
        $stmt = $this->db->prepare("SELECT * FROM ACTUALITE");
        $stmt->execute();
        return $stmt;
    }

    public function getrawImage($id){
        $stmt = $this->db->prepare("SELECT nom_img,path_img FROM IMAGE WHERE id_img=:id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $lstImg=array();
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
        echo htmlspecialchars($row['path_img']);
    }

}
