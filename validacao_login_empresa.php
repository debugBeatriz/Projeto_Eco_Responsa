<!-- Tudo certo com a validação de login para empresas parceiras -->

<?php

$emailcnpj=$_POST['emailcnpj'];
$senha=$_POST['senha'];

include('conexao.php'); //para conectar.

$sql="SELECT * FROM tbl_empresa WHERE (email='$emailcnpj' AND senha='$senha') OR (cnpj='$emailcnpj' AND senha='$senha')"; 

$resultado=mysqli_query($conn,$sql);

$linha=mysqli_fetch_array($resultado);

mysql_close($conn); // para fechar a conexão.

if ($linha) {
    echo ("<script>
    window.location.href='principal_empresa.php';
    </script>");

}
else {
    echo ("<script> 
    alert('Usuário Não Cadastrado! Tente novamente.'); 
    window.location.href='login_empresa.html';
    </script>");
}

?>