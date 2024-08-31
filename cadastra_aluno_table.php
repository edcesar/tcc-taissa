<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <center><h1>Alunos Cadastrados</h1></center> 
    <br>


    <center>  <a href="cadastro.php"class="btn btn-outline-danger">Cadastrar aluno</a></center>
    <br>
  
      <center> <table class="tabela-espacada" border=2>
          <tr>
              <th>ID</th>
              <th>NOME</th>
              <th>NASCIMENTO</th>
              <th>FOTO</th>
              <th>SÉRIE</th>
              <th>PERÍODO</th>
            
          </tr>

          <?php

//Incluir a pagina conexao para fazer a conexao com o banco de dados
        include_once "conexao.php";

//Pegar os dados da table ALUNO e guardar na variavel $consulta 
        $consulta="SELECT * FROM ALUNO ORDER BY NOME";
//Passando a execução do comando query para a variavel $resultado
        $resultado = mysqli_query($conexao,$consulta);

//Verificar se a variavel ta vazia e retornar a mensagem "Nenhum Aluno Cadastrado"
        if(mysqli_num_rows($resultado)>0){

 
 //fetch_array quebra a tabela resultado em linhas
 while($linha= mysqli_fetch_array($resultado)){

    echo("<tr>");
    echo("<td>");
    echo($linha["ID_ALUNO"]);
    echo("<td>");

    echo("<td>");
    echo($linha["NOME"]);
    echo("<td>");

    echo("<td>");
    echo($linha["DATA_NASC"]);
    echo("<td>");

    echo("<td>");
    echo($linha["FOTO"]);
    echo("<td>");
    
    echo("<td>");
    echo($linha["SERIE"]);
    echo("<td>");

    echo("<td>");
    echo($linha["PERIODO"]);
    echo("<td>");

    echo("</tr>");

 }
}else{
    echo("<tr> <td colspan='6'> Nenhum Aluno cadastrado  </td></tr>");
}
          ?>
  
        </table>
             
</body>
</html>