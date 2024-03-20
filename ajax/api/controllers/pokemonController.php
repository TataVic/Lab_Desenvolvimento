<?php 
    class pokemonController extends controller{
        private $dados;

        public function __construct()
        {
            parent::__construct();
            $this->dados = array();
        }

        public function index(){
            output_header(false, 'método inválido');
        }

        public function lista(){
            //$api = new Api();
            //echo 'teste';
            $pokemon = new Pokemon();
            $retorno = $pokemon->getAll();
            //print_r($retorno);
            if(count($retorno) == 0){
                output_header(false, 'nenhum pokemon encontrado!');
            }
            output_header(true, 'busca concluida', $retorno);
        }
        
        public function get(){
                if(isset($_GET['numero']) && !empty($_GET['numero'])){
                    $numero = $_GET['numero'];
                }else{
                    output_header(false, 'parâmetro de busca inválido', array('número do pokemon não enviado'));
                }
                $pokemon = new Pokemon();
            $retorno = $pokemon->getNumero($numero);

            if(isset($retorno['numero']) || !empty($retorno['numero'])){
                output_header(false, 'Código não encotrado', array('consulte o método lista'));
            }
            output_header(true, 'busca concluída', $retorno);
        }

        public function search(){
            
        }
    }