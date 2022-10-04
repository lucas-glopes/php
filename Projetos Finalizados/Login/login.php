<?php

require('db/connect.php');

if (isset($_GET['new_user'])) {
    echo "<script>alert('Usuário cadastrado com SUCESSO!')</script>";
}

function limparDado($dado)
{
    $dado = trim($dado);
    $dado = stripcslashes($dado);
    $dado = stripslashes($dado);
    $dado = htmlspecialchars($dado);

    return $dado;
}

$erro = [
    'email' => null,
    'senha' => null,
];

if (isset($_POST['login'])) {
    // validar dados
    if (strlen($_POST['email']) == 0) {

        $erro['email'] = '*Preencha seu E-mail';
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

        $erro['email'] = '*E-mail inválido';
    } elseif (strlen($_POST['password']) == 0) {

        $erro['senha'] = '*Preencha seu senha';
    } else {

        $email = limparDado($_POST['email']);
        $password = limparDado($_POST['password']);

        // validar usuário
        $query = $pdo->prepare('SELECT COUNT(*) FROM users WHERE email=?');

        try {

            $query->execute(array($email));
            $num_rows = $query->fetchColumn();

            if ($num_rows == 1) {

                // validar senha
                $query = $pdo->prepare('SELECT * FROM users WHERE email=?');
                $query->execute(array($email));
                $user = $query->fetch();

                if (password_verify($password, $user['password'])) {

                    // set sessão
                    if (!isset($_SESSION)) {
                        session_start();
                    }

                    $_SESSION['id'] = $user['id'];
                    $_SESSION['name'] = $user['name'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['user_since'] = $user['user_since'];

                    header('location: index');
                } else {
                    $erro['senha'] = '*Senha incorreta';
                }
            } else {
                echo "<script>alert('[ERRO] Usuário inválido')</script>";
            }
        } catch (PDOException $erro) {
            echo "<script>alert('[ERRO] Falha ao buscar usuário no banco de dados')</script>";
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
    <title>Login</title>

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
        <h1>Login</h1>

        <form action="" method="post">
            <div class="input">
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" value="<?php if (isset($_POST['login'])) {
                                                                        echo $_POST['email'];
                                                                    } ?>">

                <p><?php if ($erro['email'] != null) {
                        echo $erro['email'];
                    } ?></p>
            </div>

            <div class="input">
                <label for="password">Senha:</label>
                <input type="password" name="password" id="password" class="password-input" value="<?php if (isset($_POST['login'])) {
                                                                                                        echo $_POST['password'];
                                                                                                    } ?>">

                <i class="fa-regular fa-eye"></i>
                <i class="fa-regular fa-eye-slash"></i>

                <p><?php if ($erro['senha'] != null) {
                        echo $erro['senha'];
                    } ?></p>
            </div>

            <input type="submit" name="login" value="Entrar">
        </form>

        <p class="register-login_msg">Não possui login? <a href="register">Faça seu Cadastro</a></p>
    </main>
</body>

</html>