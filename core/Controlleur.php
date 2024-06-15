<?php
class Controlleur
{
    protected string $layout;
    /*
    bout de code pour layout*/
    public function __construct(){
        $this->layout = "base";
    }
    public function renderView(string $view,array $data)
    {
        ob_start();
        extract($data);
        require_once("../views/$view.html.php");
        $contentView = ob_get_clean();
       // require_once("../public/index.php");
        //bout de code pour layout
        require_once "../views/layout/$this->layout.layout.php";
    }
}
?>
