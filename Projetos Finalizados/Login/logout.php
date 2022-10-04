<?php

if (!isset($_SESSION)) {
    session_start();
}

// exlcuir sessão
session_destroy();

// redirecionar usuário
header('location: login');
