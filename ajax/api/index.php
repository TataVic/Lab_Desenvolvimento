<?php
    session_start();
    require 'config/config.php'; //carregar os arquivos
    require 'config/database.php';

    //setando configs
    spl_autoload_register(
        function($class){
            if(file_exists('controllers/'.$class.'.php')){
                require_once 'controllers/'.$class.'.php';
            }elseif (file_exists('models/'.$class.'.php')){
                require_once 'models/'.$class.'.php';
            }elseif (file_exists('core/'.$class.'.php')){
                require_once 'core/'.$class.'.php';
            }
        }
    );

    $core = new Core();
    $core->exec();

?>