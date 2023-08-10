<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-form.css">
    <title>Document</title>
</head>
<body>

<?php
    require_once('conexao.php');

   $id = $_POST['id'];

   ##sql para selecionar apens um aluno
   $sql = "SELECT * FROM professor where id= :id";
   
   # junta o sql a conexao do banco
   $retorno = $conexao->prepare($sql);

   ##diz o paramentro e o tipo  do paramentros
   $retorno->bindParam(':id',$id, PDO::PARAM_INT);

   #executa a estrutura no banco
   $retorno->execute();

  #transforma o retorno em array
   $array_retorno=$retorno->fetch();
   
   ##armazena retorno em variaveis
   $nomeprofessor = $array_retorno['nomeprofessor'];
   $idade = $array_retorno['idade'];
   $id = $array_retorno['id'];
   $cpf = $array_retorno['cpf'];
   $datanascimento = $array_retorno['datanascimento'];
   $endereco = $array_retorno['endereco'];
   $estatus = $array_retorno['estatus'];


?>

  <form method="POST" action="crudprofessor.php">
        <input type="text" name="nomeprofessor" id="" value=<?php echo $nomeprofessor?> >
                                                
        <input type="text" name="idade" id="" value=<?php echo $idade ?> >
      
        <input type="hidden" name="id" id="" value=<?php echo $id ?> >

        <input type="text" name="cpf" id="" value=<?php echo $cpf ?> >

        <input type="data" name="datanascimento" id="" value=<?php echo $datanascimento ?> >

        <input type="text" name="endereco" id="" value=<?php echo $endereco ?> >

        <label for="estatus"> Estatus:
        <label for="">
          <input type="radio" name="estatus" value="1" checked>
          Ativo
        </label>
        <label for="">
          <input type="radio" name="estatus" value="2" checked>
          Desativo
        </label> 
        
        <input type="submit" name="update" value="Alterar">
  </form>
</body>
</html>