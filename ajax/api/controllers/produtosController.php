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

        //output_header(true,'Título do retorno', array('msg1','msg2'));
        /* echo '<pre>';
        print ($_SERVER);
        echo '</pre>';
        exit; */
            $token = '';
            //if(!isset($_SERVER['authorization']) || empty($_SERVER['authorization'])){
                if(!isset($_SERVER['HTTP_AUTH']) || empty($_SERVER['HTTP_AUTH'])){
                output_header(false,'Token não encontrado', array('consulte o manual aqui www.help.com.br'));
                }
                if($_SERVER['HTTP_AUTH']  != "12345"){
                    output_header(false,'Token não é válido', array('Gere novamente!'));
                }
           $produto = new Produtos();
           $lista = $produto->getAll();
           output_header(true,'Lista de produtos', array('$lista'));

          /*  echo '<pre>';
            print_r($lista);
            echo '</pre>'; */

            echo json_encode($lista); //transformando em json
            // $this->loadTemplate('produtos', $this->dados);
        }

    }
?>