<?php

    require_once("../model/categories.model.php");
    require_once("../core/Controlleur.php");
    //class CategorieControlleur extends Controlleur
    class CategorieControlleur extends Controlleur
    {
        private CategorieModel $categorieModel;
        public function __construct(){
            parent::__construct();
            $this->categorieModel = new CategorieModel();
            $this->load();
        }
    public function load(){
            if (isset($_REQUEST['action'])){                    
                if ($_REQUEST['action'] == 'liste-categorie') {
                $this->listerCategorie();
            } elseif ($_REQUEST['action'] == 'add-categorie') {
                unset($_POST['action']);/*retirer un variable */
                unset($_POST['controlleur']);
                $this->ajouter($_POST);
            }
        } else {
            $this->listerCategorie();
        }
    }
    public function ajouter(array $data):void{
        $this->categorieModel->save($data);
        header("Location: ".WEBROOT."/?controlleur=categorie&action=liste-categorie");
        exit();
    }
    public function listerCategorie():void{

        $datas = $this->categorieModel->findAll();
        $this->renderView("categories/liste", [
            "categories" => $datas
        ]);
        /* appel le model pour chercher les donnees de la table article*/
    }
}
?>