
<div class="col-xl-4 col-md-6 mx-auto p-5">
    <div class="card">

        <mav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="<?= URL ?>/posts">Posts</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Editar
                </li>
            </ol> 
        </mav>

        <div class="card-body">

            <form name="login" method="Post" action="<?= URL?>/posts/editar/<?= $dados['id'] ?>" class="mt-4">     

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

                <input type="submit" value="Atualizar Post" class="btn btn-info btn-block">
                    
            </form>

        </div>
    </div>
</div>

