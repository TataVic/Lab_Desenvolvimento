<?php
class Core{
    public function exec(){
        //cria uma instancia do roteador
        $router = new router();

        //adicionar rotas
        $router->addRoute('/', [new homeController(), 'index']);

        //iniciando 
        $route = isset($_GET['route'])?'/'.$_GET['route']:'/';
        
        //lidar com a requisição
        $router->handleRequest($route);
    }
}

?>