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
##permite acesso as variaves dentro do aquivo conexao
require_once('conexao.php');



##cadastrar
if(isset($_GET['cadastrar'])){
        ##dados recebidos pelo metodo GET
        $nomeprofessor = $_GET["nomeprofessor"];
        $idade = $_GET["idade"];
        $cpf = $_GET["cpf"];
        $endereco = $_GET["endereco"];
        $datanascimento = $_GET["datanascimento"];
        $estatus = $_GET["estatus"];

        ##codigo SQL
        $sql = "INSERT INTO professor(nomeprofessor,idade,cpf,endereco,datanascimento,estatus) 
                VALUES('$nomeprofessor','$idade','$cpf','$endereco','$datanascimento','$estatus')";

        ##junta o codigo sql a conexao do banco
        $sqlcombanco = $conexao->prepare($sql);

        ##executa o sql no banco de dados
        if($sqlcombanco->execute())
            {
                echo " <strong>OK!</strong> o professor
                $nomeprofessor foi Incluido com sucesso!!!"; 
                echo " <button class='button'><a href='index.php'>voltar</a></button>";
            }
        }
#######alterar
if(isset($_POST['update'])){

    ##dados recebidos pelo metodo POST
    $nomeprofessor = $_POST["nomeprofessor"];
    $idade = $_POST["idade"];
    $id = $_POST["id"];
    $cpf = $_POST["cpf"];
    $endereco = $_POST["endereco"];
    $datanascimento = $_POST["datanascimento"];
    $estatus = $_POST["estatus"];
   
      ##codigo sql
    $sql = "UPDATE  professor SET nomeprofessor= :nomeprofessor, idade= :idade, id= :id, cpf= :cpf, endereco= :endereco, datanascimento= :datanascimento, estatus= :estatus WHERE id= :id ";
   
    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->bindParam(':nomeprofessor',$nomeprofessor, PDO::PARAM_STR);
    $stmt->bindParam(':idade',$idade, PDO::PARAM_STR);
    $stmt->bindParam(':cpf',$cpf, PDO::PARAM_INT);
    $stmt->bindParam(':endereco',$endereco, PDO::PARAM_STR);
    $stmt->bindParam(':datanascimento',$datanascimento, PDO::PARAM_STR);
    $stmt->bindParam(':estatus',$estatus, PDO::PARAM_STR_CHAR);
    $stmt->execute();

    if($stmt->execute())
        {
            echo " <strong>OK!</strong> O professor
            $nomeprofessor foi Alterado com sucesso!!!"; 

            echo " <button class='button'><a href='index.php'>voltar</a></button>";
        }

}        


##Excluir
if(isset($_GET['excluir'])){
    $id = $_GET['id'];
    $sql ="DELETE FROM `professor` WHERE id={$id}";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    if($stmt->execute())
        {
            echo " <strong>OK!</strong> O professor
             $id foi excluido!!!"; 

            echo " <button class='button'><a href='listaprofessor.php'>voltar</a></button>";
        }

}

        
?>
</body>
</html>