<?php
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $cep = $_POST['cep'];
    $regiao = $_POST['regiao'];

    $dados = file_get_contents('dados.json');

    echo 'Dados recebidos:<br/>Nome:'.$nome.'<br/>Email: '.$email.'tel:'.$telefone.'end:'.$endereco.'cep'.$cep.'regiao:'.$regiao;


?>