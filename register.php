<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/OIP (2).ico" />
    <link rel="stylesheet" href="./styles/responsive.css">
    <link rel="stylesheet" href="./styles/main.css">
    <title>Registrar</title>
</head>
<body>
    <div class="container">
    <!-- Imagem dos profissionais de saúde -->
    <img src="./images/profissionais.jpg" alt="medicos">
    <!-- Fomulário de cadastro -->
    <form action="./backend/functionRegister.php" method="POST" name="formRegister">
        <h1 class="titulo">Cadastre-se</h1>
        <div class="email">
            <label>Nome:</label>
            <input type="text" name="nome" placeholder="Informe seu nome" required>
        </div>
        <div class="email">
            <label>Email:</label>
            <input type="email" name="email" placeholder="Informe um email" required>
        </div>
        <div class="senha">
            <label>Senha:</label>
            <input type="password" name="senha" placeholder="Informe uma senha" required>
        </div>
        <div class="senha-confirmar">
            <label>Confirmar senha:</label>
            <input type="password" name="senhaConfirm" placeholder="Confirme sua senha" required>
        </div>
        <button type="submit">Cadastrar</button>
        <!-- Botaão para ir para a página de cadastro -->
      
    </form>
    </div>
  
</body>
</html>