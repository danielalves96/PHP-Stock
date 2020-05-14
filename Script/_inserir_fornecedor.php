<?php 

include 'conexao.php';

$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO `fornecedor`(`nome_fornecedor`) VALUES ('$fornecedor')";
$inserir = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div class="container" style="widith: 500px; margin-top: 30px;">
    <center>
        <h4>Fornecedor adicionado com sucesso!</h4>
    </center>
    <div style="padding-top: 20px;">
        <center>
            <a href="menu.php" role="button" class="btn btn-primary btn-sm">Voltar ao menu</a>
        </center>
    </div>

</div>