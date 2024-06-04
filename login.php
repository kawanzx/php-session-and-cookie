
<?php

session_start();


if(isset($_POST['email']) && isset($_POST['senha'])) {
$email = $_POST['email'];
$senha = $_POST['senha'];

if($email === 'teste@gmail.com' && $senha === '123') {
    header ('Location: conteudo.php');
    $_SESSION['user'] = $email;
    setcookie('user', $email, time()+(3600));
    
    exit;
}

else {
    echo "<script>alert('Usuario ou senha incorretos');</script>";
}
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
       
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
<form method="POST">
<label for="email">Email</label><br>
<input type="text" name="email" id="email"><br>
<label for="senha">Senha</label><br>
<input type="text" name="senha" id="senha"><br>
<input type="submit" value="Entrar" name="entrar" id="entrar">

</form>

</body>
</html>
