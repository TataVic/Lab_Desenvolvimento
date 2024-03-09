<?php
    class produtosController extends controller{
        private $dados;
        public function __construct()
        {
            parent::__construct();
            $this->dados = array();
        }
        //controle da visualização e do banco de dados
        public function index(){ //chamado do core
           $produto = new Produtos();
           $lista = $produto->getAll();

          /*  echo '<pre>';
            print_r($lista);
            echo '</pre>'; */

            echo json_encode($lista); //transformando em json
            // $this->loadTemplate('produtos', $this->dados);
        }

    }
?>