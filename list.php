
<?php
 session_start();

include ('backend/db.php');
$sql = "SELECT * FROM paciente";
$numreg=0;

$con = mysqli_query($conection, $sql);
$numreg=mysqli_num_rows($con);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/OIP (2).ico" />
    <link rel="stylesheet" href="./styles/responsive.css">
    <link rel="stylesheet" href="./styles/main.css">
    <title>Todos os Pacientes</title>
</head>
<body>
    <header>
        <h1 class="titulo">Pacientes cadastrados</h1>
        <p id="p"><?php echo "<strong> Total de Pacientes:</strong> $numreg <br><br>"; ?></p>

        <nav class="menu">
            <a href="pacientRegister.php">Cadastrar Paciente</a>
            <a href="backend/logout.php">Logout</a>
        </nav>
       
    </header>
    <div class="containerList">
        <div class="list-pacients">
            <table id="table">
                <tr> 
                    <th>Codigo</th>
                    <th>Nome</th>
                    <th>Peso</th>
                    <th>Altura</th>
                    <th>SUS</th>
                    <th>Sexo</th>
                    <th>Data Nascimento</th>
                    <th>Ações</th>
                </tr>
                </div>    
    </div>
                <?php 
                while($dado = mysqli_fetch_assoc($con)) { 
                 echo "<tr>";
                   echo" <td>" .$dado['id_Paciente']."</td>";
                   echo" <td>" .$dado['nome']."</td>";
                   echo" <td>" .$dado['peso']."</td>";
                   echo" <td>" .$dado['altura']."</td>";
                   echo" <td>" .$dado['Num_Sus']."</td>";
                   echo" <td>" .$dado['sexo']."</td>";
                   echo" <td>" . $dado['data_nasc']."</td>";
                echo "<td>
                
                <a href='backend/editar.php?id=$dado[id_Paciente]'>
    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
    <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-
    .168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0
    0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-
    .5a.5.5 0 0 1-.468-.325z'/>
    </svg>
    </a>
    <a href='backend/delete.php?id=$dado[id_Paciente]'>
    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-
    1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8
    5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
    </svg>
    </a>
    </td>";
            echo "</tr>"; 
           
                 } 
                 
                 ?>
            </table>
</body>

</html>