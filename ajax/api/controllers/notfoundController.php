<?php

    class notfoundController extends controller{
        private $dados;
        public function __construct()
        {
            parent::__construct();
            $this->dados = array();
        }
        //controle da visualização e do banco de dados
        public function index(){ //chamado do core
            $this->loadTemplate('404', $this->dados);
        }
    }
?>