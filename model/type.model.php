<?php
require_once("../core/Model.php");
class TypeModel extends Model{
    public function __construct(){
        $this->ouvrirConnexion();
        $this->table="type";
    }

public function save(array $type):int{
        extract($type);
        return $this->executeUpdate("INSERT INTO `type` (`nomType`) VALUES ('$nomType');");
}
   /* public function save (array $type) :int{
        extract($type);
        $sql = "INSERT INTO `type` (`nomType`) VALUES (:nomType);";
    }
    cette fonction est conçu pour insere une valeur de type. elle est unie à la 
    fonction (public function executeUpdate()) de model.php qui permet d'effectuer 
    autres commandes que Select .
    */


}
?>