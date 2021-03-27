<div class="col-xl-4 col-md-6 mx-auto p-5">
    <div class="card">
        <div class="card-body">
            <h2>Cadastra-se</h2>
            <small>Preencha o formulario abaixo para fazer seu cadastro</small>

            <form name="cadastrar" method="Post" action="<?= URL ?>/usuarios/cadastrar">
                <div class="form-group">
                    <label for="nome">
                        Nome:
                        <sup class="text-danger">
                            *
                        </sup>
                    </label>
                    <input type="text"  name="nome" id="nome" value="<?=$dados['nome']?>" class="form-control <?$dados['nome_erro'] ? 'is-invalid' : ''  ?> ">               

                    <div class="invalid-feedback">
                        <?= $dados['nome_erro']; ?>
                    </div>

                </div>

                <div class="form-group">
                    <label for="email">
                        Email:
                        <sup class="text-danger">
                            *
                        </sup>
                    </label>
                    <input type="email"  name="email" id="email" value="<?=$dados['email']?>" class="form-control <?$dados['email_erro'] ? 'is-invalid' : ''  ?> " >    

                    <div class="invalid-feedback">
                        <?= $dados['email_erro']; ?>
                    </div>

                </div>

                <div class="form-group">
                    <label for="senha">
                        Senha:
                        <sup class="text-danger">
                            *
                        </sup>
                    </label>
                    <input type="password" name="senha" id="senha" value="<?=$dados['senha']?>" class="form-control <?$dados['senha_erro'] ? 'is-invalid' : ''  ?> " >   

                    <div class="invalid-feedback">
                        <?= $dados['senha_erro']; ?>
                    </div>

                </div>

                <div class="form-group">
                    <label for="confirmar_senha">
                        Confirmar Senha:
                        <sup class="text-danger">
                            *
                        </sup>
                    </label>
                    <input type="password"  name="confirmar_senha" id="confirmar_senha" value="<?=$dados['confirmar_senha']?>" class="form-control <?$dados['confirmar_senha_erro'] ? 'is-invalid' : ''  ?> " >   

                    <div class="invalid-feedback">
                        <?= $dados['confirma_senha_erro']; ?>
                    </div>

                </div>

                <div class="row">
                    <div class="col">
                        <input type="submit" value="Cadastrar" class="btn btn-info btn-block">
                    </div>
                    <div class="col">
                        <a href="#">Você tem uma conta? Faça login</a>
                    </div>
                </div>

            
            </form>

        </div>
    </div>
</div>
