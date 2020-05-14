<?php

include 'conexao.php';

$id = $_GET['id'];
$nivel = $_GET['nivel'];

if ($nivel == 1) {
    $update = "UPDATE `usuarios` SET `status` = 'Ativo', `nivel_usuario`= 1 WHERE `id_usuario` = $id";
    $atualiza = mysqli_query($conexao,$update);
}

if ($nivel == 2) {
    $update = "UPDATE `usuarios` SET `status` = 'Ativo', `nivel_usuario`= 2 WHERE `id_usuario` = $id";
    $atualiza = mysqli_query($conexao,$update);
}

if ($nivel == 3) {
    $update = "UPDATE `usuarios` SET `status` = 'Ativo', `nivel_usuario`= 3 WHERE `id_usuario` = $id";
    $atualiza = mysqli_query($conexao,$update);
}
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div class="container" style="widith: 500px; margin-top: 30px;">
    <center>
        <h4><?php
        if ($nivel == 1) {
            echo "Administrador";
        }
        if ($nivel == 2) {
            echo "Funcionário";
        }
        if ($nivel == 3) {
            echo "Conferente";
        }
        ?> aprovado com sucesso!</h4>
    </center>
    <div style="padding-top: 20px;">
        <center>
            <a href="aprovar_usuario.php" role="button" class="btn btn-primary btn-sm">Voltar para a lista</a>
        </center>
    </div>

</div>