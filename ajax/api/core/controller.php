<?php
class controller{
    public function __construct(){ //método construtor
        global $config;
    }
    //atribuir valores para as views - nas views e templates
    public function loadView($viewName, $viewData = array()){
        extract(($viewData));
        include 'view/'.$viewName.'.php';
    }
    public function loadTemplate($viewName, $viewData = array()){
        extract(($viewData));
        include 'template/template.php';
    }
}
?>