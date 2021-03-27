<?php

    spl_autoload_register(function ($classe){

        $diretories = [
            'Libraries',
            'Helpers'

        ];

        foreach($diretories as $diretorio):

            $arquivo = __DIR__.DIRECTORY_SEPARATOR.$diretorio.DIRECTORY_SEPARATOR.$classe.'.php' ;

            if(file_exists($arquivo)):
                require_once($arquivo);
            endif;
        endforeach;    


    });



