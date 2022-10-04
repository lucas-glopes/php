<?php

require('db/connect.php');

function limparDado($dado)
{
    $dado = trim($dado);
    $dado = stripcslashes($dado);
    $dado = stripslashes($dado);
    $dado = htmlspecialchars($dado);

    return $dado;
}

$erro = [
    'nome' => null,
    'sobrenome' => null,
    'email' => null,
    'senha' => null,
    'confirmar_senha' => null
];

// validar dados
if (isset($_POST['register'])) {
    if (strlen($_POST['name']) == 0) {

        $erro['nome'] = '*Preencha seu nome';
    } elseif (!preg_match("/^[A-zÀ-ú' ]*$/", $_POST['name'])) {

        $erro['nome'] = '*Apenas letras e espaços são permitidos';
    } elseif (strlen($_POST['last_name']) == 0) {

        $erro['sobrenome'] = '*Preencha seu sobrenome';
    } elseif (!preg_match("/^[A-zÀ-ú' ]*$/", $_POST['last_name'])) {

        $erro['sobrenome'] = '*Apenas letras e espaços são permitidos';
    } elseif (strlen($_POST['email']) == 0) {

        $erro['email'] = '*Preencha seu E-mail';
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

        $erro['email'] = '*E-mail inválido';
    } elseif (strlen($_POST['password']) == 0) {

        $erro['senha'] = '*Preencha seu senha';
    } elseif (strlen($_POST['password_confirm']) == 0) {

        $erro['confirmar_senha'] = '*Confirme seu senha';
    } elseif ($_POST['password'] != $_POST['password_confirm']) {

        $erro['confirmar_senha'] = '*Senha incorreta';
    } else {

        // receber dados
        $name = limparDado($_POST['name']);
        $name = ucwords($name);

        $last_name = limparDado($_POST['last_name']);
        $last_name = ucwords($last_name);

        $email = limparDado($_POST['email']);

        $password = limparDado(password_hash($_POST['password'], PASSWORD_DEFAULT));

        // inserir dados no banco de dados
        $query = $pdo->prepare('INSERT INTO users (name, email, user_since, password) VALUES (?, ?, ?, ?)');

        try {

            $query->execute(array(
                $name . " " . $last_name,
                $email,
                date("d/m/Y"),
                $password
            ));

            // redirecionar usuario para o login
            header('location: login?new_user=true');
        } catch (PDOException $erro) {
            echo "<script>alert('[ERRO] Falha ao cadastrar usuário')</script>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/accdb5154f.js" crossorigin="anonymous"></script>

    <!-- css -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- js -->
    <script src="js/script.js" defer></script>
</head>

<body>
    <main class="thin-block">
        <h1>Cadastro</h1>

        <form action="" method="post">
            <div class="input">
                <label for="name">Nome:</label>
                <input type="text" name="name" id="name" value="<?php if (isset($_POST['register'])) {
                                                                    echo $_POST['name'];
                                                                } ?>">

                <p><?php if ($erro['nome'] != null) {
                        echo $erro['nome'];
                    } ?></p>
            </div>

            <div class="input">
                <label for="last_name">Sobrenome:</label>
                <input type="text" name="last_name" id="last_name" value="<?php if (isset($_POST['register'])) {
                                                                                echo $_POST['last_name'];
                                                                            } ?>">

                <p><?php if ($erro['sobrenome'] != null) {
                        echo $erro['sobrenome'];
                    } ?></p>
            </div>

            <div class="input">
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" value="<?php if (isset($_POST['register'])) {
                                                                        echo $_POST['email'];
                                                                    } ?>">

                <p><?php if ($erro['email'] != null) {
                        echo $erro['email'];
                    } ?></p>
            </div>

            <div class="input">
                <label for="password">Senha:</label>
                <input type="password" name="password" id="password" class="password-input" value="<?php if (isset($_POST['register'])) {
                                                                                                        echo $_POST['password'];
                                                                                                    } ?>">

                <i class="fa-regular fa-eye"></i>
                <i class="fa-regular fa-eye-slash"></i>

                <p><?php if ($erro['senha'] != null) {
                        echo $erro['senha'];
                    } ?></p>
            </div>

            <div class="input">
                <label for="password_confirm">Confirmar Senha:</label>
                <input type="password" name="password_confirm" id="password_confirm" class="password-input" value="<?php if (isset($_POST['register'])) {
                                                                                                                        echo $_POST['password_confirm'];
                                                                                                                    } ?>">

                <i class="fa-regular fa-eye"></i>
                <i class="fa-regular fa-eye-slash"></i>

                <p><?php if ($erro['confirmar_senha'] != null) {
                        echo $erro['confirmar_senha'];
                    } ?></p>
            </div>

            <input type="submit" name="register" value="Cadastrar">
        </form>

        <p class="register-login_msg">Já possui cadastro? <a href="login">Faça Login</a></p>
    </main>
</body>

</html>