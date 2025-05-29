<?php

    if(isset($_POST['submit']))
    {
        //print_r('Nome: ' . $_POST['username']);
        //print_r('<br>');
        //print_r('Email: ' . $_POST['email']);
        //print_r('<br>');
        //print_r('Senha: ' . $_POST['senha']);

        include_once('config_2.php');

        $nome = $_POST['username'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO cliente(nome, email, senha) 
        VALUES ('$nome', '$email', '$senha')");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/0fb5d3af77.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="form.css">
    <title>Formulário</title>
</head>
<body>
    <div id="form">
        <form action="formulario2.php" method="POST">
            <h2 class="title">Cadastrar</h2>

            <label for="username">Nome</label>
            <div class="input">
                <i class="fa-regular fa-circle-user"></i>
                <input id="username" name="username" placeholder="Username" type="text">
            </div>

            <label for="email">Email</label>
            <div class="input">
                <i class="fa-regular fa-envelope"></i>
                <input id="email" name="email" placeholder="Email" type="text">
            </div>

            <label for="senha">Senha</label>
            <div class="input">
                <i class="fa-solid fa-lock"></i>
                <input id="senha" name="senha" placeholder="Password" type="password">
            </div>

            <div id="btn">
                <button type="submit" name="submit">Cadastrar</button>
            </div>
        </form>
    </div>
</body>
</html>