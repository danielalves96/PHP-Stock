<?php

include 'conexao.php';
include 'script/password.php';

$usuario = $_POST['usuario'];
$senhausuario = $_POST['senha'];

$sql = "SELECT `mail_usuario`, `senha_usuario` FROM `usuarios` WHERE `mail_usuario` = '$usuario' and `status` = 'Ativo' ";
$buscar = mysqli_query($conexao, $sql);

$total = mysqli_num_rows($buscar); //consulta numero de emails na base.

while ($array = mysqli_fetch_array($buscar)){
    $senha = $array['senha_usuario'];

$senhadecode = md5($senhausuario);

if ($total > 0) {
    if ($senhadecode == $senha) {

        session_start();
        $_SESSION['usuario'] = $usuario;
        header('Location: menu.php');

    } else { 
        header('Location: erro_senha.php');
    }

} else {
    header('Location: erro.php');
}


}

?>