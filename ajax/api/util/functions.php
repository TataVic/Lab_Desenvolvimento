<?php
    function output_header($status = true, $titulo = null, $dados = array()){
        header("Content-Type: application/json; charset=utf-8");
        echo json_encode(
            array(
                'status' => $status,
                'titulo' => $titulo,
                'dados' => $dados
            //se colocar aqui - vai aparecer no controller em que estiver
            )
        );
        exit; //por ser a última requisição, morre aqui
    }