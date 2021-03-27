

<div class="container my-5">



    <div class="card text-center">
        <div class="card-header">
            <?=$dados['post']->titulo ?>
        </div>

        <div class="card-body">
            <p class="card-text">
                <?= $dados['post']->$texto ?>
            </p>
        </div>

        <div class="card-footer text-muted">
            <small>Escrito por: <?=$dados['post']->nome ?> 
            em <?=Checa::dataBr($dados['post']->criado_em) ?></small>
        </div>

        <?php if ($dados['post']->usuario_id == $_SESSION['usuario_id']) : ?>
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="<?= URL.'/posts/editar'.$dados['post']->id ?>" class="btn btn-sm btn-primary">
                        Editar
                    </a>
                </li>
                <li class="list-inline-item">
                    <form action="<? URL . '/posts/deletar/' . $dados['dados']->id ?>" method="POST">
                        <input type="submit" class="btn btn-sm btn-danger" value="Deletar">
                    </form>
                </li>
            </ul>
            
            
        <?php endif ?>

    </div>
</div>


