
<?php
include_once ('db.php');
if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM paciente WHERE id_Paciente=$id";
    $resultado = mysqli_query($conection, $query);
    $numreg = mysqli_num_rows($resultado);
    if ($numreg > 0) {
        while ($dado = mysqli_fetch_assoc($resultado)) {
           
        $nome = $dado['nome'];
        $peso = $dado['peso'];
        $altura = $dado['altura'];
        $Sus=$dado['Num_Sus'];
        $sexo=$dado['sexo'];
        $Data_Nasc=$dado['data_nasc'];
        $id_Paciente=$dado['id_Paciente'];
        }
    } 

   
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="OIP (2).ico" />

    <title>Editar Paciente</title>
</head>
<body>
    <style>
/* ESTILO DAS PÁGINAS */

* {
    font-family: 'Ubuntu', sans-serif;
}
body {
    background-color: #F2F2F2
}

h1 {

    font: 700;
    color: #203A40;
    font-size: 38px;
    text-align: center;

    margin: 48px 0;

}

img {
    height: 480px;
    width: 500px;
    padding-right: 72px;
    margin-top: 50%;
    margin-bottom: 50%;
    
}

.container, .containerList {

    display: flex;
    align-items: center;
    justify-content: center;
    background-color: rgb(255, 255, 255);

    box-shadow: 15px 15px 42px rgba(0, 0, 0, 0.1);
    width: 1100px;
    height: 800px;
    
    margin: 100px auto;
    border-radius: 4px;
}

.containerList {
    box-shadow: none;
    background: none;
    margin-top: 30px;
    height: auto;
}

form label {
    font: 500;
    font-size: 18px;
    display: flex;
    justify-content: left;
    margin-bottom: 10px;
    
}

form input {
    border: solid;
    border-color: #1456e6;
    outline: none;
    border-radius: 4px;

    width: 300px;
    height: 32px;
    padding: 6px;

    margin-bottom: 18px;
    background-color: #F0F0F0;
}

#submit {
    font: 700;
    text-decoration: none;
    color: white;
    
    font-size: 22px;

    border: none;
    border-radius: 4px;
    background-color:#1456e6;
    outline: none;

    width: 318px;
    height: 52px;
}

.links {
    display: flex;
    justify-content: space-between;
    margin-top: 25px;
    margin-left: 30px;
    margin-right: 30px;
}

table th {
    
    color: rgb(0, 0, 0);
    background-color: #1456e6;

}
table{
    width: 100%;
    table-layout: auto;
}
table{
    width: 100%;
    table-layout: fixed;
}
table td {
   
    background-color: #ffffff;
}
p {
    text-align: center;
    color: white;
    background-color: #837375;
    padding: 2px;
    border-radius: 4px;
}
#p{
    text-align: center;
    color: rgb(0, 0, 0);
    background-color: #1456e6;  
    border-radius: 30px;
    margin-left: 600px;
    margin-right: 600px;
    padding-top: 20px;
}
a {
   
    text-decoration: none;
    text-align: center;
}

#linkLogin {
    margin-top: 20px;
}

span {
    color: #1456e6;
}

header nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-left: 420px;
    margin-right: 420px;
}
header a {
    text-align: center;
}


#submit:hover {
    
    cursor: pointer;
    background-color: #030b1d;
    transition: 0.6s;
}

footer {
    color: #203A40;
    text-align: center;
    margin-top: -20px;
    width: 100%;
    
}
/* ESTILO DAS PÁGINAS */

@media only screen and (max-device-width: 900px) {
    img {
        display: none;
    }

    header nav.menu {
        margin-left: 0;
        margin-right: 0;
    }
    
    body, .containerList{
        margin-top: 0;
        height: 30%;
    }
    
    .container {
        margin-top: 0;
        max-width: 100%;
    }
    
    form input {
        width: 200px;
    }

    form h1 {
        font: 700;
        font-size: 32px;
    }

    footer {
        bottom: 100%;
    }
}



    </style>
    <header>
        <nav>
            <a href="list.php">Listar Pacientes</a>
            <a href="backend/logout.php">Logout</a>
        </nav>
       
    </header>
    <div class="container">
        <!-- Imagem da enfermeira -->
        <img src="banner-patients.png" alt="medicos">
       
        <form action="salvarEdit.php" method="post">
            <h1 class="titulo">Editar paciente</h1>
            <div class="nome">
                <label>Nome:</label>
                <input type="text" name="nome" placeholder="Informe seu nome" value=<?php echo $nome?> required="required">
            </div>
            <div class="peso">
                <label>Peso:</label>
                <input type="text" name="peso" placeholder="Exemplo: 65" value=<?php echo $peso?> required="required">
            </div>
            <div class="altura">
                <label>Altura:</label>
                <input type="text" name="altura" placeholder="Exemplo: 1.75" value=<?php echo $altura?> required="required">
            </div>
            <div class="altura">
                <label>Numero do SUS:</label>
                <input type="text" name="Num_Sus" placeholder="Numero do SUS" value=<?php echo $Sus?> required="required">
            </div>
            <div class="altura">
                <label>Sexo:</label>
                <input type="text" name="sexo" placeholder="Seu sexo" value=<?php echo $sexo?> required="required">
            </div>
            <div class="idade">
                <label>Data Nascimento:</label>
                <input type="date" name="data_nasc" placeholder="Informe sua data de Nascimmento" value=<?php echo $Data_Nasc?> required="required">
            </div>
            <input type="submit" name="update" id="submit" value="Editar" />
        </form>
        
    </div>

</body>
</html>