<?php

class Rota {

    private $controlador = 'Paginas';
    private $metodo = 'index';
    private $parametros = [] ;

    public function __construct()
    {
        //se a url existir joga a função url na variavel url
       $url = $this->url() ? $this->url() : [0];

       //ucwords converte para maiusculas o primeiro caracterer de cada palavra
       if(file_exists('../app/Controllers/'.ucwords($url[0]).'.php')):
            //se existir seta como controlador
            $this->controlador = ucwords($url[0]);
            //unset 0 destroi a variavel especificada
            unset($url[0]);
       endif;

       //requere o controlador
       require_once '../app/Controllers/'.$this->controlador.'.php';
       $this->controlador = new $this->controlador;

       if(isset($url[1])):
            if(method_exists($this->controlador, $url[1])):
                $this->metodo = $url[1];
                unset($url[1]);
            endif;
       endif;

       $this->parametros = $url ? array_values($url) : [];
       call_user_func_array([$this->controlador, $this->metodo], $this->parametros);


       //var_dump($this);
    }

    private function url(){
        $url = filter_input(INPUT_GET,'url',FILTER_SANITIZE_URL);
        //verifica se a url existe
        if(isset($url)):
            //trim - retira espaço no inicio e final de uma string
            //rtrim - Retira espaço em branco (ou decora outros caraceres )  do final da string
            $url = trim(rtrim($url,'/'));
            $url = explode('/', $url);
            return $url;    
        endif;    
    }


}


