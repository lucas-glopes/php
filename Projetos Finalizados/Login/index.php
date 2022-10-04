<?php

require('protect.php');

if (isset($_GET['general_edit'])) {
    echo "<script>alert('Dados atualizados com SUCESSO!')</script>";
}

if (isset($_GET['password_edit'])) {
    echo "<script>alert('Senha atualizada com SUCESSO!')</script>";
}

// set variáveis sobre o usuário
$name = $_SESSION['name'];
$first_name = explode(" ", $name)[0];
$email = $_SESSION['email'];
$user_since = $_SESSION['user_since'];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>

    <!-- css -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main class="large-block">
        <a href="logout"><button class="exit-account_btn">Sair</button></a>

        <h1><span>Bem-Vindo(a)</span><br><?php echo $first_name ?></h1>

        <div class="user-info">
            <h2>Suas informações</h2>

            <div class="info">
                <h3>Nome Completo:</h3>
                <p><?php echo $name ?></p>
            </div>

            <div class="info">
                <h3>E-mail:</h3>
                <p><?php echo $email ?></p>
            </div>

            <div class="info">
                <h3>Usuário desde:</h3>
                <p><?php echo $user_since ?></p>
            </div>
        </div>

        <a href="edit-profile"><button class="edit-profile_btn">Editar Perfil</button></a>
    </main>
</body>

</html>