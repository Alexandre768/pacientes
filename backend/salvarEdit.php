<?php
include_once('db.php');
if(isset($_POST['update'])) 
{
        $nome = $_POST['nome'];
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        $Sus=$_POST['Num_sus'];
        $sexo=$_POST['sexo'];
        $Data_Nasc=$_POST['data_nasc'];
        $id_Paciente=$_POST['id_Paciente'];
   
        $query = "UPDATE paciente
        SET nome='$nome', peso='$peso', altura='$altura', Num_sus='$Sus',sexo='$sexo', data_nasc='$Data_Nasc' WHERE id_Paciente=$id_Paciente ";
        echo $query;
        if (mysqli_query($conection, $query)) {
                echo "Registro deletado com sucesso";
        } else {
                echo "Error: " . $query ."<br>" . mysqli_error($conection);
        }
         mysqli_close($conection);
       
         
}
header('Location: ../list.php');


?>