<div class="col-xl-4 col-md-6 mx-auto p-5">
    <div class="card">

        <div class="card-header">
            Cadastrar Post
        </div>

        <div class="card-body">

            <form name="login" method="Post" action="<?= URL?>/posts/cadastrar" class="mt-4">     

                <div class="form-group">
                    <label for="titulo">
                        Titulo:<sup class="text-danger">*</sup>
                    </label>
                    <input type="text" name="titulo" id="titulo" value="<?=$dados['titulo']?>" class="form-control <?$dados['titulo_erro'] ? 'is-invalid' : ''  ?> " >    

                    <div class="invalid-feedback">
                        <?= $dados['email_erro']; ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="texto">
                        Texto:<sup class="text-danger">*</sup>
                    </label>
                    <textarea  name="texto" id="texto" value="<?=$dados['texto']?>" class="form-control <?$dados['texto_erro'] ? 'is-invalid' : ''  ?> " >   

                    <div class="invalid-feedback">
                        <?= $dados['senha_erro']; ?>
                    </div>
                </div>

                
                <input type="submit" value="Cadastrar" class="btn btn-info btn-block">
                    
            </form>

        </div>
    </div>
</div>
