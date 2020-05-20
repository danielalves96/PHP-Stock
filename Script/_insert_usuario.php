<?php 

include 'conexao.php';
include 'script/password.php'; 

$nomeusuario = $_POST['nome'];
$mail = $_POST['mail'];
$senha = $_POST['senha'];
$nivel = $_POST['nivel'];
$status = 'Ativo';

$sql = "INSERT INTO `usuarios`(`nome_usuario`, `mail_usuario`, `senha_usuario`, `nivel_usuario`, `status`) VALUES ('$nomeusuario','$mail',md5('$senha'),$nivel,'$status')";

$inserir = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div class="container" style="widith: 500px; margin-top: 30px;">
    <center>
        <h4>Usuário cadastrado com sucesso!</h4>
    </center>
    <div style="padding-top: 20px;">
        <center>
            <a href="cadastro_usuario.php" role="button" class="btn btn-primary btn-sm">Cadastrar novo usuário</a>
            <a href="menu.php" role="button" class="btn btn-success btn-sm">Voltar ao início</a>
        </center>
    </div>

</div>