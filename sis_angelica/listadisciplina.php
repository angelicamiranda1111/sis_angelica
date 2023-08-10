<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-form.css">
    <title>Document</title>
</head>
<body>
    <?php 
  require_once('conexao.php');
   
  $retorno = $conexao->prepare('SELECT * FROM disciplina');
  $retorno -> execute();

?>       
<div class=tres>
<table> 
            <thead>
                <tr>
          
                    <th>ID</th>
                    <th>NOME DISCIPLINA</th>
                    <th>CH</th>
                    <th>SEMESTRE</th>
                    <th>IDPROFESSOR</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <?php foreach($retorno->fetchall() as $value) { ?>
                        <tr>
                            <td> <?php echo $value['id'] ?>      </td> 
                            <td> <?php echo $value['nomedisciplina']?>     </td> 
                            <td> <?php echo $value['ch']?>    </td> 
                            <td> <?php echo $value['semestre']?> </td> 
                            <td> <?php echo $value['idprofessor']?> </td> 

                            <td>
                               <form method="POST" action="altdisciplina.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button name="alterar"  type="submit">Alterar</button>
                                </form>

                             </td> 

                             <td>
                               <form method="GET" action="cruddisciplina.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button name="excluir"  type="submit">Excluir</button>
                                </form>
                             </td> 
                      </tr>
                    <?php  }  ?> 
                 </tr>
            </tbody>
        </table>
</div>

<?php         
   echo "<button class='button button3'><a href='index.php'>voltar</a></button>";
?>
</body>
</html>