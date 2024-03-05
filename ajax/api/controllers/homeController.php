<?php

    class homeController extends controller{
        private $dados;
        public function __construct()
        {
            parent::__construct();
            $this->dados = array();
        }
        //controle da visualização e do banco de dados
        public function index(){ //chamado do core

            $produto = new Produto();
            
            $this->dados['produtos'] = $produto->getAll();

            $this->loadTemplate('home', $this->dados);
        }
       /*  public function produto(){ //chamado do core
            $this->dados['nome'] = 'Samsung 4G';
            $this->loadTemplate('produto', $this->dados); //não chama
        } */
    }
?>