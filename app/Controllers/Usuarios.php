<?php

    class Usuarios extends Controller {


        public function __construct(){
            $this->usuarioModel = $this->model('Usuario');

        }

        public function cadastrar(){

            $formulario = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            if(isset($formulario)):
                $dados = [
                    'nome' => trim($formulario['nome']),
                    'email' => trim($formulario['email']),
                    'senha' => trim($formulario['senha']),
                    'confirmar_senha' => trim($formulario['confirmar_senha']),

                ];
                if(in_array("". $formulario)):

                    if(empty($formulario['nome'])):
                        $dados['nome_erro'] = 'Preencha o campo nome';
                    endif;      

                    if(empty($formulario['email'])):
                        $dados['email_erro'] = 'Preencha o campo email';
                    endif; 

                    if(empty($formulario['senha'])):
                        $dados['senha_erro'] = 'Preencha o campo senha';
                    endif;  

                    if(empty($formulario['confirmar_senha'])):
                        $dados['confirmar_senha_erro'] = 'Confirme a senha';
                    endif;  

                else:    
                    if(Check::checarNome($formulario['nome'])):
                        $dados['nome_erro'] = 'O nome informado é invalido';

                    elseif(Check::checarEmail($formulario['email'])):
                        $dados['email_erro'] = 'O e-mail informado é inválido';

                    elseif($this->usuarioModel->checarEmail($formulario['email'])):
                        $dados['email_erro'] = 'O e-email informado já está cadastrado';  

                    elseif (strlen($formulario['senha']) < 6 ) :
                        $dados['senha_erro'] = 'A senha deve ser no minimo 6 caracteres';

                    elseif($formulario['senha'] != $formulario['confirmar_senha']) :
                        $dados['confirmar_senha_erro'] = 'As senhas são diferentes';

                    else:
                        $dados['senha'] = password_hash($formulario['senha'], PASSWORD_DEFAULT);
                        
                        if($this->usuarioModel->armazenar($dados)):
                            Sessao::mensagem('usuario','Cadastro realizado com sucesso');
                            Url::redirecionar('usuarios/login');

                        else:
                            die("Erro ao armazenar usuario no banco de dados");
                        endif;    
                        
                    endif;
                endif;    

                $senhaSegura = password_hash($formulario['senha'], PASSWORD_DEFAULT);

            else:
                $dados = [
                    'nome' => '' ,
                    'email' => '',
                    'senha' => '',
                    'confirmar_senha' => '',
                    'nome_erro' => '' ,
                    'email_erro' => '',
                    'senha_erro' => '',
                    'confirmar_senha_erro' => '',
                ];
            endif;   
            $this->view('usuarios/cadastrar' , $dados);
        }

        public function login(){

            $formulario = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            if(isset($formulario)):
                $dados = [
                    'email' => trim($formulario['email']),
                    'senha' => trim($formulario['senha']),
                ];
                if(in_array("". $formulario)):
                    if(empty($formulario['email'])):
                        $dados['email_erro'] = 'Preencha o campo email';
                    endif; 

                    if(empty($formulario['senha'])):
                        $dados['senha_erro'] = 'Preencha o campo senha';
                    endif;  
                else:    
                    if(Check::checarEmail($formulario['email'])):
                        $dados['email_erro'] = 'O e-mail informado é inválido';

                    else:
                        
                        $usuario = $this->usuarioModel->checarLogin(
                            $formulario['email'],
                            $formulario['senha']
                        );

                        if($usuario):
                            $this->criarSessaoUsuario($usuario);
                        else:
                            Sessao::mensagem('usuario','Usuario ou senha invalidos','alert alert-danger');
                        endif;    


                    endif;

                endif;    

            else:
                $dados = [
                    'email' => '',
                    'senha' => '',
                    'email_erro' => '',
                    'senha_erro' => '',
                ];
            endif;    

            $this->view('usuarios/login' , $dados);
        }

        private function criarSessaoUsuario($usuario){
            $_SESSION['usuario_id'] = $usuario->id ;
            $_SESSION['usuario_nome'] = $usuario->nome ;
            $_SESSION['usuario_email'] = $usuario->email ;

            URL::redirecionar('paginas/home');
        }

        public function sair(){
            unset($_SESSION['usuario_id']);
            unset($_SESSION['usuario_nome']);
            unset($_SESSION['usuario_emial']);

            session_destroy();

            URL::redirecionar('usuarios/login');
            /* header(paginas/index) */ 

        }
        
    }




