<?php
require ('./backend/verificaLogin.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/OIP (2).ico" />
    <link rel="stylesheet" href="./styles/responsive.css">
    <link rel="stylesheet" href="./styles/main.css">
    <title>Cadastrar Paciente</title>
</head>
<body>
    <header>
        <nav>
            <a href="list.php">Listar Pacientes</a>
            <a href="backend/logout.php">Logout</a>
        </nav>
    </header>
    <div class="container">
        <!-- Imagem da enfermeira -->
        <img src="./images/banner-patients.png" alt="medicos">
       
        <form action="./backend/pacientRegister.php" method="POST">
            <h1 class="titulo">Cadastrar paciente</h1>
            <div class="nome">
                <label>Nome:</label>
                <input type="text" name="nome" placeholder="Informe seu nome" required>
            </div>
            <div class="peso">
                <label>Peso:</label>
                <input type="text" name="peso" placeholder="Exemplo: 65" required>
            </div>
            <div class="altura">
                <label>Altura:</label>
                <input type="text" name="altura" placeholder="Exemplo: 1.75" required>
            </div>
            <div class="altura">
                <label>Numero do SUS:</label>
                <input type="text" name="Num_Sus" placeholder="Numero do SUS" required>
            </div>
            <div class="altura">
                <label>Sexo:</label>
                <input type="text" name="sexo" placeholder="Seu sexo"  required>
            </div>
            <div class="idade">
                <label>Data Nascimento:</label>
                <input type="date" name="data_nasc" placeholder="Informe sua data de Nascimmento" required>
            </div>
            <button type="submit">Cadastrar</button>
        </form>
        
    </div>

</body>
</html>