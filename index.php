<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require './config/config.php';
    

    $objListarUsuario = new ControleUsuario();
    $objListarUsuario->index();
   
   
    $objCadUsuario = new ControleUsuario();
    $objCadUsuario->Cadastrar();

    echo "<hr>";
    //criar um objeto produto e exibi-lo



    ?>
  
</body>
</html>