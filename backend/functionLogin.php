<?php
session_start();
require ('db.php');

if (empty($_POST['email']) || empty($_POST['senha'])) {
    header('Location: ../index.php');
    exit;
}

$email = mysqli_real_escape_string($conection, $_POST['email']);
$senha = mysqli_real_escape_string($conection, $_POST['senha']);

$query = "SELECT `email`, `senha` FROM `adm` WHERE (`email` = '".$email ."') AND (`senha` = '$senha')";

$result = mysqli_query($conection, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['email'] = $email;
    header('Location: ../list.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: ../index.php');
    exit();
}

?>