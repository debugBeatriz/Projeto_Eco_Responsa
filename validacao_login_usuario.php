<!-- Tudo certo com a validação de login para membros da comunidade -->

<?php

$emailcpf=$_POST['emailcpf'];
$senha=$_POST['senha'];

include('conexao.php'); //para conectar.

$sql="SELECT * FROM usuario WHERE (email='$emailcpf' AND senha='$senha') OR (cpf='$emailcpf' AND senha='$senha')"; 

$resultado=mysqli_query($conn,$sql);

$linha=mysqli_fetch_array($resultado);

mysql_close($conn); // para fechar a conexão.

if ($linha) {
    echo ("<script>
    window.location.href='principal_usuario.php';
    </script>");

}
else {
    echo ("<script> 
    alert('Usuário Não Cadastrado! Tente novamente.'); 
    window.location.href='login_comunidade.html';
    </script>");
}

?>