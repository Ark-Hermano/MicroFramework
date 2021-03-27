<?php
    
    session_start();

    include './../app/conf.php';
    include './../app/autoload.php';
    //include './../app/Libraries/Controller.php';
    //include './../app/Libraries/Database.php';
    //$db = new Database;

   /* $usuarioID = 10;
    $titulo = 'Titulo do post';
    $texto = 'Texto do post';

    $db->query("INSERT INTO posts (usuario_id, titulo, texto) VALUES (:usuario_id, :titulo, :texto)");
    $db->bind(":usuario_id", $usuarioID);
    $db->bind(":titulo", $titulo);
    $db->bind(":texto", $texto);

    $db->executa();

    echo '<hr>Total Resultados: '.$db->totalResultados();
    echo '<hr>Último id: '.$db->ultimoIdInserido();*/


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <link rel="stylesheet" href="<?=URL?>/public/css/style.css" >
    <link rel="stylesheet" href="http://localhost/hermano/mvc/pro1/public/css/style.css" >
    <link rel="stylesheet" href="./css/style.css" >
   
</head>
<body>
    <!--<pre>-->
    <?php
        include '../app/Views/topo.php';
        $rotas =  new Rota();
        include '../app/Views/rodape.php'
    ?>
    
    <!--</pre>-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>