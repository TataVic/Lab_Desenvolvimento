<?php
class Core{
    public function exec(){
        //cria uma instancia do roteador
        $router = new router();

        //adicionar rotas
        $router->addRoute('/', [new homeController(), 'index']);
        //$router->addRoute('/', array(new homeController(), 'index'));
        $router->addRoute('/produtos', [new produtosController(), 'index']);
        
        //api pokemo
        $router->addRoute('/pokemon', [new pokemonController(), 'index']);
        $router->addRoute('/pokemon/lista', [new pokemonController(), 'lista']);
        $router->addRoute('/pokemon/get', [new pokemonController(), 'get']);
        $router->addRoute('/pokemon/search', [new pokemonController(), 'search']);
       
        //$router->addRoute('/produtos', [new produtosController(), 'index']);

        $router->addRoute('/404', [new notfoundController(), 'index']);
        //iniciando 
        $route = isset($_GET['route'])?'/'.$_GET['route']:'/';
        
        //lidar com a requisição
        $router->handleRequest($route);
    }
}

?>