<?php
require_once("../core/Controlleur.php");
require_once("../model/type.model.php");
class TypeControlleur extends Controlleur
{
    private TypeModel $typeModel;

   public function __construct()
    {
        parent::__construct();
        $this->typeModel = new TypeModel();
        $this->load();
    }
    public function load()
    {
       /* $this->layout = "base1"
       faire cela permet de changer l'apparence de la page layout qui sera chargée.
       Il suffirait juste de remplacer base1 par l'intitulé de la page layout à attribuer
       */
        if (isset($_REQUEST['action'])) {
            if ($_REQUEST['action'] == 'add-type') {
                unset($_POST['action']);/*retirer un variable */
                unset($_POST['controlleur']);
                $this->ajouterType($_POST);
            } else if ($_REQUEST['action'] == 'liste-type') {
                $this->listerType();
            }
        }else{
            $this->listerType();
        }
    }
    public function ajouterType(array $data): void
    {
        $this->typeModel->save($data);
        header("Location:".WEBROOT."/?controlleur=type&action=liste-type");exit();
    }
    public function listerType(): void
    {
        $datas =  $this->typeModel->findAll();
        $this->renderView("types/liste",[
            "types"=>$datas
        ]);
        /* appel le model pour chercher les donnees de la table article*/
    }
}
