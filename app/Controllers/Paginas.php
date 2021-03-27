<?php


class Paginas extends Controller {
   
    public function index(){

        if(Sessao::estaLogado()):
            URL::redirecionar('posts');
        endif;    


        $dados = [
            'tituloPagina' => 'Página Inicial', 
            'descricao' => 'Curso de php7'

        ];

        $this->view('paginas/home', $dados);

    }

    public function sobre(){


        $dados = [
            'tituloPagina' => 'Página Sobre nós', 
            'descricao' => 'Curso de php7'

        ];

        $this->view('paginas/home', $dados);
        
    }

}






