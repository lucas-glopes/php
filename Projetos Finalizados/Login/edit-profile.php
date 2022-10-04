<?php

require('db/connect.php');

if (!isset($_SESSION)) {
    session_start();
}

// pegar sobrenome do usuário
function getLastName($full_name)
{
    $last_name = null;

    for ($i = 1; $i < sizeof($full_name); $i++) {
        if ($i == 1) {
            $last_name = $full_name[$i];
        } else {
            $last_name = $last_name . " " . $full_name[$i];
        }
    }

    return $last_name;
}

// variáveis gerais do usuário
$full_name = explode(' ', $_SESSION['name']);
$name = $full_name[0];
$last_name = getLastName($full_name);
$email = $_SESSION['email'];

if (isset($_POST['cancel'])) {
    header('location: index');
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
    'nome' => null,
    'sobrenome' => null,
    'email' => null,
    'senha_antiga' => null,
    'senha' => null,
    'confirmar_senha' => null
];

if (isset($_POST['general_edit'])) {
    // set novas variáveis gerais do usuário
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];

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
    } else {

        // receber dados
        $name = limparDado($_POST['name']);
        $name = ucwords($name);

        $last_name = limparDado($_POST['last_name']);
        $last_name = ucwords($last_name);

        $email = limparDado($_POST['email']);

        // atualizar dados no banco de dados
        $query = $pdo->prepare('UPDATE users SET name=?, email=? WHERE id=?');

        try {

            $query->execute(array($name . " " . $last_name, $email, $_SESSION['id']));

            // atulizar dados na session
            $_SESSION['name'] = $name . " " . $last_name;
            $_SESSION['email'] = $email;

            // redirecionar usuário para a index
            header('location: index?general_edit=true');
        } catch (PDOException $erro) {
            echo "<script>alert('[ERRO] Falha ao atualizar dados')</script>";
        }
    }
}

if (isset($_POST['password_edit'])) {
    $query = $pdo->prepare('SELECT * FROM users WHERE id=?');
    $query->execute(array($_SESSION['id']));

    $user = $query->fetch();

    if (!password_verify($_POST['old_password'], $user['password'])) {

        $erro['senha_antiga'] = '*Senha incorreta';
    } elseif (strlen($_POST['password']) == 0) {

        $erro['senha'] = '*Preencha seu senha';
    } elseif (strlen($_POST['password_confirm']) == 0) {

        $erro['confirmar_senha'] = '*Confirme seu senha';
    } elseif ($_POST['password'] != $_POST['password_confirm']) {

        $erro['confirmar_senha'] = '*Senha incorreta';
    } else {

        // receber nova senha
        $new_password = limparDado(password_hash($_POST['password'], PASSWORD_DEFAULT));

        // atualizar senha no banco de dados
        $query = $pdo->prepare('UPDATE users SET password=? WHERE id=?');

        try {

            $query->execute(array($new_password, $_SESSION['id']));

            // redirecionar usuário para a index
            header('location: index?password_edit=true');
        } catch (PDOException $erro) {
            echo "<script>alert('[ERRO] Falha ao atualizar senha')</script>";
        }
    }
}

if (isset($_POST['delete_profile'])) {
    // deletar conta
    $query = $pdo->prepare('DELETE FROM users WHERE id=?');

    try {

        $query->execute(array($_SESSION['id']));

        // fazer logout
        header('location: logout');

    } catch (PDOException $erro) {
        echo "<script>alert('[ERRO] Falha ao excluir perfil')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/accdb5154f.js" crossorigin="anonymous"></script>

    <!-- css -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- js -->
    <script src="js/script.js" defer></script>
</head>

<body>
    <main class="large-block">
        <h1>Perfil</h1>

        <form action="" method="post">
            <div class="input">
                <label for="name">Nome:</label>
                <input type="text" name="name" id="name" value="<?php echo $name; ?>">

                <p><?php if ($erro['nome'] != null) {
                        echo $erro['nome'];
                    } ?></p>
            </div>

            <div class="input">
                <label for="last_name">Sobrenome:</label>
                <input type="text" name="last_name" id="last_name" value="<?php echo $last_name; ?>">

                <p><?php if ($erro['sobrenome'] != null) {
                        echo $erro['sobrenome'];
                    } ?></p>
            </div>

            <div class="input">
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" value="<?php echo $email; ?>">

                <p><?php if ($erro['email'] != null) {
                        echo $erro['email'];
                    } ?></p>
            </div>

            <div class="form_btns">
                <input type="submit" name="general_edit" value="Salvar Alterações">
                <input type="submit" name="cancel" value="Cancelar" class="cancel_btn">
            </div>
        </form>

        <div class="edit-password">
            <h2>Senha <i class="fa-solid fa-play"></i></h2>

            <form action="" method="post">
                <div class="input">
                    <label for="old_password">Senha Antiga:</label>
                    <input type="password" name="old_password" id="old_password" class="password-input" value="<?php if (isset($_POST['password_edit'])) {
                                                                                                                    echo $_POST['old_password'];
                                                                                                                } ?>">

                    <i class="fa-regular fa-eye"></i>
                    <i class="fa-regular fa-eye-slash"></i>

                    <p><?php if ($erro['senha_antiga'] != null) {
                            echo $erro['senha_antiga'];
                        } ?></p>
                </div>

                <div class="input">
                    <label for="password">Nova Senha:</label>
                    <input type="password" name="password" id="password" class="password-input" value="<?php if (isset($_POST['password_edit'])) {
                                                                                                            echo $_POST['password'];
                                                                                                        } ?>">

                    <i class="fa-regular fa-eye"></i>
                    <i class="fa-regular fa-eye-slash"></i>

                    <p><?php if ($erro['senha'] != null) {
                            echo $erro['senha'];
                        } ?></p>
                </div>

                <div class="input">
                    <label for="password_confirm">Confirmar Nova Senha:</label>
                    <input type="password" name="password_confirm" id="password_confirm" class="password-input" value="<?php if (isset($_POST['password_edit'])) {
                                                                                                                            echo $_POST['password_confirm'];
                                                                                                                        } ?>">

                    <i class="fa-regular fa-eye"></i>
                    <i class="fa-regular fa-eye-slash"></i>

                    <p><?php if ($erro['confirmar_senha'] != null) {
                            echo $erro['confirmar_senha'];
                        } ?></p>
                </div>

                <div class="form_btns">
                    <input type="submit" name="password_edit" value="Salvar Alterações">
                    <input type="submit" name="cancel" value="Cancelar" class="cancel_btn">
                </div>
            </form>
        </div>


        <div class="delete-profile">
            <h2>Excluir Perfil <i class="fa-solid fa-play"></i></h2>

            <button class="delete-profile_btn">Excluir Perfil</button>
        </div>

        <div class="menu_delete-profile">
            <div class="menu">
                <p>Deseja realmente excluir seu perfil?</p>
                
                <form action="" method="post" class="delete-profile">
                    <div class="form_btns">
                        <input type="submit" name="delete_profile" value="Excluir">
                        <button class="cancel_btn">Cancelar</button>
                    </div>
                </form>
            </div>
            
        </div>
    </main>
</body>

</html>