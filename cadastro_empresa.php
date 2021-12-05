<?php
 $cnpj=$_POST['cnpj'];
 $razao_social=$_POST['razao_social'];
 $email=$_POST['email'];
 $telefone=$_POST['telefone'];
 $tipo_logradouro=$_POST['tipo_logradouro'];
 $numero=$_POST['numero'];
 $logradouro=$_POST['logradouro'];
 $cidade=$_POST['cidade'];
 $estado=$_POST['estado'];
 $opcao_contribuicao=$_POST['opcao_contribuicao']; 
 $texto_contribuicao=$_POST['texto_contribuicao']; 
 $senha=$_POST['senha'];
 
 echo $cnpj .'<br>';
 echo $razao_social .'<br>';
 echo $email .'<br>';
 echo $telefone .'<br>';
 echo $tipo_logradouro .'<br>';
 echo $numero .'<br>';
 echo $logradouro .'<br>';
 echo $cidade .'<br>';
 echo $estado .'<br>';
 echo $opcao_contribuicao .'<br>';
 echo $texto_contribuicao .'<br>';
 echo $senha .'<br>';


 include ('conexao.php');

 $sql="INSERT INTO teste_empresa (cnpj, razao_social, email, telefone, tipo_logradouro, numero, logradouro, cidade, estado, opcao_contribuicao, texto_contribuicao, senha) VALUES ('$cnpj','$razao_social','$email','$telefone','$tipo_logradouro','$numero','$logradouro', '$cidade','$estado','$opcao_contribuicao','$texto_contribuicao', '$senha')";
 
 $resultado=mysqli_query($conn,$sql) or die ('Erro na inserção do registro');
 echo ('<script>
         alert("Registro inserido com sucesso!");
        </script>');
 
 //fechar a conexão
 mysqli_close($conn);
 
 //voltando para a tela de cadastro
 echo('<script>
         window.location.href="cadastroempresa.html";
     </script>');
 ?>