<?php 

    class router{
        private $routes = [];

        //metodo para rota
        public function addRoute($route, $callback){
            $this->routes[$route] = $callback;
        }

        //metodo para lidar com a rota atual 
        public function handleRequest($route){
            if(array_key_exists($route, $this->routes)){
                $callback = $this->routes[$route];
                if(is_callable($callback)){
                     call_user_func($callback); 
                    /* $callback; */
                }else{
                    echo "Erro: Callback não é uma função válida";
                }
            }else{
                //echo "rota não definida";
                header("Location: ".BASE_URL.'404');
                exit;
            }
        }
    }
?>