<?php
//Incluido a conexao com o banco de dados
include'conexao.php';

//Recebimento dos valores incluidos no formulario

$id_aluno =($_POST['id_aluno']);
$nome = $_POST['nome'];
$data_nasc = $_POST['data_nasc'];
$foto = $_POST['foto'];
$serie = $_POST['serie'];
$periodo = $_POST['periodo'];
$curso = $_POST['curso'];

//Comando de inserção do SQL

$consulta = "INSERT INTO ALUNO (ID_ALUNO, NOME, DATA_NASC, FOTO, SERIE, ID_PERIODO, ID_CURSO)
 VALUES (NULL,'$nome', '$data_nasc','$foto', '$serie' ,'$periodo','$curso')";
mysqli_query($conexao, $consulta);

/*echo"<script type='text/javascript'>alert('Dados inseridos com sucesso')
    window.location='cadastra_aluno_table.php';
    </script>";
*/
?>