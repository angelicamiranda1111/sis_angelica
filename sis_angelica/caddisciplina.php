<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style-form.css">
</head>
<body>
    <h1>♡ Cadastro Disciplina ♡</h1>

   <form method="GET" action="cruddisciplina.php">
    <label for="">Nome Disciplina:</label>
    <input type="text" name="nomedisciplina">

    <label for="">CH:</label>
     <input type="text" name="ch"> 

    <label for="">Semestre:</label>
     <input type="text" name="semestre"> 

    <label for="">ID Professor:</label>
     <input type="text" name="idprofessor">

    <input type="submit" name="cadastrar" value="cadastrar">
    </form>

   <p></p>
   
   <button class="button"><a href="index.php">voltar</a></button>

</body>
</html>