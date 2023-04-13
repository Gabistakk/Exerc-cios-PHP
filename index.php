<?php
    require_once('teste.php');

    $database = new Database();

    $database->query('INSERT INTO usuario(nome, senha) VALUES("nome", "senha")');

    $printar = $database->query('SELECT * FROM usuario');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
</head>
<body>
    <?php
    print_r($printar);
    ?>
</body>
</html>