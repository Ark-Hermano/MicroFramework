<?php

class Controller {

    public function model($model){
        //procura se o modelo existe e cospe ele
        require_once '../app/Models/'.$model.'.php';
        return new $model;
    }

    public function view($view, $dados = []){
        //seta a variavel arquivo 
        $arquivo = ('../app/Views/'.$view.'.php');
        //se o arquivo existe então chama ele
        if (file_exists($arquivo)):
            require_once $arquivo;
        else:
            die('O arquivo de view não existe!');
        endif;
    }

}




