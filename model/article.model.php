<?php
require_once("../core/Model.php");
class ArticleModel extends Model{
    public function __construct(){
        $this->ouvrirConnexion();
        $this->table = "article";
    }
    //methodes = public function(){}
public function findAll():array{   
        return $this->executeSelect("SELECT * FROM `article` a, categorie c, type t WHERE a.`IdType`=t.`id` and a.`IdCat`=c.id");       
}
public function save(array $article):int {
        extract($article);
        return $this->executeUpdate( "INSERT INTO `article` (`nomArt`, `prixAppro`, `qteStock`, `IdType`, `IdCat`) VALUES ('$nomArt', '$prixAppro', '$qteStock', '$IdType', '$IdCat');");
}
}
          
?>