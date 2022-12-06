<?php
include_once('db.php');

if(!empty($_GET['id'])){
$id=$_GET['id'];
//sql para deletar registro
$query= "DELETE FROM paciente WHERE id_Paciente=$id";
if (mysqli_query($conection,$query)){
    echo "Registro deletado com sucesso";
}else{
    echo "Erro ao deletar registro:". mysqli_error($conection);

}
}

header('Location: ../list.php');

?>