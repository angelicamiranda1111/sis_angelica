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

   ##sql para selecionar apens um disciplina
   $sql = "SELECT * FROM disciplina where id= :id";
   
   # junta o sql a conexao do banco
   $retorno = $conexao->prepare($sql);

   ##diz o paramentro e o tipo  do paramentros
   $retorno->bindParam(':id',$id, PDO::PARAM_INT);

   #executa a estrutura no banco
   $retorno->execute();

  #transforma o retorno em array
   $array_retorno=$retorno->fetch();
   
   ##armazena retorno em variaveis
   $nomedisciplina = $array_retorno['nomedisciplina'];
   $ch = $array_retorno['ch'];
   $id = $array_retorno['id'];
   $semestre = $array_retorno['semestre'];
   $idprofessor = $array_retorno['idprofessor'];


?>

  <form method="POST" action="cruddisciplina.php">
        <input type="text" name="nomedisciplina" id="" value=<?php echo $nomedisciplina?> >
                                                
        <input type="text" name="ch" id="" value=<?php echo $ch ?> >
      
        <input type="hidden" name="id" id="" value=<?php echo $id ?> >

        <input type="text" name="semestre" id="" value=<?php echo $semestre ?> >

        <input type="text" name="idprofessor" id="" value=<?php echo $idprofessor ?> >
        
        <input type="submit" name="update" value="Alterar">
  </form>
</body>
</html>