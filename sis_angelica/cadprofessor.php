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
<h1>♡ Cadastro Professor ♡</h1>

  <form method="GET" action="crudprofessor.php">

     <label for="">Nome Professor</label>
     <input type="text" name="nomeprofessor">

     <label for="idade">Idade</label>
     <input type="text" name="idade"> 

     <label for="cpf">CPF</label>
     <input type="text" name="cpf">

     <label for="endereco">Endereço</label>
     <input type="text" name="endereco"> 

     <label for="datanascimento">Data de Nascimento</label>
     <input type="date" name="datanascimento"> 

     <label for="estatus"> Estatus:
        <label for="">
          <input type="radio" name="estatus" value="1" checked>
          Ativo
        </label>
        <label for="">
          <input type="radio" name="estatus" value="0">
          Desativo
        </label> 

        <p></p>

     <input type="submit" name="cadastrar" value="cadastrar">

     <p></p>

     <button class="button"><a href="index.php">voltar</a></button>

  </form>

</body>
</html>