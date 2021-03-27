<div class="container py-5">

<?= Sessao::mensagem('post')  ?>

    <div class="card">

        <div class="card-header bg-info">
            Postagens
            <div class="float-right">
                <a href="<?=URL?>/posts/cadastrar" class="btn btn-primary">Escrever</a>
            </div>
        </div>

        <div class="card-body">
            <?php foreach ($dados['posts'] as $post): ?>
                <div class="card-m3">
                    <div class="card-header bg-secondary text-white font-weight-bold">
                        <p><?= $post->titulo ?></p>
                    </div>

                    <div class="card-body">
                        <p class="card-text" ><?= $post->$texto ?> </p>
                        <a href="<?= URL.'/post/ver/'.$post->postId ?>" class="btn btn-sm btn-outline-info float-right">
                        Ler mais
                        </a>
                    </div>

                    <div class="card-footer text-muted">
                        <small>Escrito por: <?= $post->nome ?> em 
                        <?=Checa::dataBr($post->postDataCadastro) ?><small>

                    </div>
                </div>
            <?php endforeach ?>
        </div>

    </div>
</div>
