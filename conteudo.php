<?php
session_start();

if (!isset ($_SESSION ['user'])) {
    header("Location: login.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conteudo</title>
</head>
<body>
<h1>Bem Vindo</h1>

    <?php
    echo "Seus Dados <br>"; 
    echo $_COOKIE['user'];
    ?>

</body>
</html>

