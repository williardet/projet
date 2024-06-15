<?php
require_once("../core/Model.php");
class CategorieModel extends Model{
    public function __construct(){
        $this->ouvrirConnexion();
        $this->table="categorie";
    }

public function save(array $categorie):int {
        extract($categorie);
        return $this->executeUpdate("INSERT INTO `categorie` (`nomCat`) VALUES ('$nomCat');");
       
}
}
?>