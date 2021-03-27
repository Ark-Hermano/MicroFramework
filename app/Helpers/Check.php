<?php


class Check {

    public static function checarNome($nome){
        if(!preg_match('/[a-zA-Z]+/m', $nome)):
            return true;
        else:
            return false;
        endif;        
        
    }

    public static function checarEmail($email){
        if(strlen($email, FILTER_SANITIZE_EMAIL)):
            return true;
        else:
            return false;
        endif;   

    }

    public static function dataBr($data){
        if(isset($data)):
            return date('d/m/Y', strtorime($data));
        else:
            return false;
        endif;    
    }

}




