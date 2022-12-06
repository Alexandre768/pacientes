<?php
    // Verifica e inclui o arquivo que faz a conexão com o banco de dados, caso nao houver, retorna um erro faltal
    require 'db.php';

    // Função para registrar um usuario
    function registerPacient($conection) {
      
        $nome = $_POST["nome"];
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];
        $Sus=$_POST["Num_Sus"];
        $sexo=$_POST["sexo"];
        $Data_Nasc=$_POST["data_nasc"];
       

        // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
        if (empty($_POST['nome']) OR empty($_POST['sus'] OR empty($_POST['peso']) OR empty($_POST['altura']) OR empty($_POST['data']))) {
            echo '<br/><br/><br/><center><img class="alert" src="https://www.monetcasadefestas.com.br/wp-content/uploads/2020/02/icone-aten%C3%A7%C3%A3o-png.png">';
            echo "<center><p>Você deixou campos em branco, corrija-os para continuar!</p><center/><br/>";
            echo "<center><p>Voltando a página de cadastro...</p><center/><br/>";
            // Redireciona dentro de 5s para a página de cadastro se a condição acima for verdadeira
            header('refresh: 5; ../register.php');
        } else {
            // Querry armazenha o comando para inserir os dados no banco de dados
            $query = "INSERT INTO `paciente` (`nome`, `peso`, `altura`, `Num_Sus`, `sexo`,`data_nasc`) VALUES ('$nome', '$peso', '$altura', '$Sus', '$sexo','$Data_Nasc')";
            // Envia o comando salvo em query para o banco de dados
            mysqli_query($conection, $query);
            header('Location: ../list.php');

            
        }
    }
    // Chama a função
    registerPacient($conection);
?>