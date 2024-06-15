<?php
/*le router est chargé de se connecter a la clé controlleur.
Se baser sur le controlleur et selectionner le controleur conrespondent*/ 
class Router{
    public static function run(){
        $controlleur = null;
        if (isset($_REQUEST['controlleur'])) {
            if ($_REQUEST['controlleur'] == 'article') {
                require_once("../contrôlleur/article.controlleur.php");
                $controlleur = new ArticleControlleur();
            } else if ($_REQUEST['controlleur'] == 'type') {
                require_once("../contrôlleur/type.controlleur.php");
                $controlleur = new TypeControlleur();
            } else if ($_REQUEST['controlleur'] == 'categorie') {
                require_once("../contrôlleur/categorie.controlleur.php");
                $controlleur = new CategorieControlleur();
            }
        }
        if ($controlleur === null) {
            require_once("../contrôlleur/article.controlleur.php");
            $controlleur = new ArticleControlleur();
        }
    }

}
/*
class Router {
    public static function run() {
        $controlleur = null;

        if (isset($_REQUEST['controlleur'])) {
            switch ($_REQUEST['controlleur']) {
                case 'article':
                    require_once("../contrôlleur/article.controlleur.php");
                    $controlleur = new ArticleControlleur();
                    break;
                case 'type':
                    require_once("../contrôlleur/type.controlleur.php");
                    $controlleur = new TypeControlleur();
                    break;
                case 'categorie':
                    require_once("../contrôlleur/categorie.controlleur.php");
                    $controlleur = new CategorieControlleur();
                    break;
                default:
                    echo "Contrôleur non trouvé.";
                    break;
            }
        }

        // Charger et initialiser le contrôleur par défaut si aucun contrôleur n'est spécifié ou si un contrôleur invalide est spécifié
        if ($controlleur === null) {
            require_once("../contrôlleur/article.controlleur.php");
            $controlleur = new ArticleControlleur();
        }
    }
}*/

?>