<?php
class Api{
    //está no index - produtos controller 
    //para envio do token
    public function __construct()
    {
        if(!isset($_SERVER['HTTP_AUTH']) || empty($_SERVER['HTTP_AUTH'])){
            output_header(false, 'Token não enviado', array('consulte o manual da api', 'manual disponivel'));
        }
        if($_SERVER['HTTP_AUTH']  != "12345"){
            output_header(false,'Token não é válido', array('Gere novamente!'));
        }
    }
}