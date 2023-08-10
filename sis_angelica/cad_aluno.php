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
    <h1>♡ Cadastro Aluno ♡</h1>

    <form method="GET" action="crudaluno.php">
    <label for="">Nome Aluno</label>
    <input type="text" name="nomealuno">

    <label for="">Idade</label>
     <input type="text" name="idade"> 

    <label for="">Telefone</label>
     <input type="text" name="telefone"> 

    <label for="">Endereço</label>
     <input type="text" name="endereco">

    <input type="submit" name="cadastrar" value="cadastrar">
    </form>

   <p></p>
   
   <button class="button"><a href="index.php">voltar</a></button>

</body>
</html>