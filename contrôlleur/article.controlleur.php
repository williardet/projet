<?php

require_once("../model/article.model.php");
require_once("../model/categories.model.php");
require_once("../model/type.model.php");
require_once("../core/Controlleur.php");

class ArticleControlleur extends Controlleur
{
    private ArticleModel $articleModel;
    private CategorieModel $categorieModel;
    private TypeModel $typeModel;
    public function __construct()
    {
        parent::__construct();
        $this->articleModel = new ArticleModel();
        $this->categorieModel = new CategorieModel();
        $this->typeModel = new TypeModel();
        $this->load();
    }
    public function load()
    {
        if (isset($_REQUEST['action'])) {
            if ($_REQUEST['action'] == "liste-article") {
                $this->listerArticle();
            } elseif ($_REQUEST['action'] == "form-article") {
                $this->chargerForm();
            } elseif ($_REQUEST["action"] == "add-article") {
                unset($_POST['action']);/*retirer un variable */
                unset($_POST['controlleur']);
                $this->ajouterArticle($_POST);
            }
        }else {
            //page de connexion
            $this->listerArticle();
        } ;
    }

    public function listerArticle(): void
    {    
        $datas =  $this->articleModel->findAll();
        $this->renderView("articles/liste",[
            "articles"=>$datas]);
        /* appel le model pour chercher les donnees de la table article*/
    }


    public function chargerForm(): void
    {
        $categories = $this->categorieModel->findAll();
        $types = $this->typeModel->findAll();
        $this->renderView("articles/form",[
            "categories"=>$categories,
            "types"=>$types]);
        /* appel le model pour chercher les donnees de la table article*/
    }

    public function ajouterArticle(array $data): void
{
    $this->articleModel->save($data);
    header("Location: ".WEBROOT."/?controlleur=article&action=liste-article"); /* liste-type */
    exit(); // Ajoutez exit pour vous assurer que le script s'arrête après la redirection
}
}
