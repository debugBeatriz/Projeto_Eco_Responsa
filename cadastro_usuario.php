<?php
$cpf=$_POST['cpf'];
$nome=$_POST['nome'];
$email=$_POST['email'];
$bairro=$_POST['bairro'];
$cidade=$_POST['cidade'];
$datanasc=$_POST['datanasc'];
$senha=$_POST['senha'];

//conectando-se ao banco de dados
include ('conexao.php');

//criar a string de inserção - sql
$sql="INSERT INTO usuario (cpf, nome, email, bairro, cidade, datanasc, senha) VALUES ('$cpf','$nome','$email', '$bairro', '$cidade', '$datanasc', '$senha')";

//executar o comando que está na variável $sql
$resultado=mysqli_query($conn,$sql) or die ('Erro na inserção do registro');
echo ('<script>
        alert("Registro inserido com sucesso!");
    </script>');

//fechar a conexão
mysqli_close($conn);

//voltando para a tela de cadastro
echo('<script>
        window.location.href="login_comunidade.html";
    </script>');
?>