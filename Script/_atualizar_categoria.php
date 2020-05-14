<?php 

include 'conexao.php';

$id = $_POST['id'];
$categoria = $_POST['categoria'];


$sql = "UPDATE `categoria` SET `categoria`='$categoria' WHERE id_categoria = $id";
    
$atualiza = mysqli_query($conexao,$sql);
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div class="container" style="width: 400px;"></div>
<center>
    <div style="margin-top: 30px;">
        <h3>Categoria atualizada com sucesso!</h3>
    </div>
    <div style="margin-top: 10px;">
        <a href="listar_categorias.php" class="btn btn-sm btn-primary">Ir para lista de categorias</a>
    </div>
</center>