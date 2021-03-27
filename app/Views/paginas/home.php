<!--<h1 class="titulo">

</h1>-->
<?= Sessao::mensagem('usuario') ?>
<div class="content bg-dark">
    <div class="container d-flex h-100 p-3 mx-auto flex-column ">
    
      <main role="main" class="inner cover">
        <h1 class="cover-heading"><?php echo $dados['tituloPagina'];   ?></h1>
        <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
        <p class="lead">
          <a href="<?=URL?>/usuarios/cadastrar" class="btn btn-lg btn-secondary">Cadastrar</a>
        </p>
      </main>

    </div>
</div>


 