<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>

<?php 

session_start();

$usuario = $_SESSION['usuario'];

if(!isset($_SESSION['usuario'])){
    header('Location: index.php');
}

include 'conexao.php';

$sql = "SELECT `nivel_usuario` FROM `usuarios` WHERE `mail_usuario` = '$usuario' and `status` = 'Ativo'";
$buscar = mysqli_query($conexao, $sql);
$array = mysqli_fetch_array($buscar);
$nivel = $array['nivel_usuario'];

?>

    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="menu.php" style="font-weight: 700;"><i class="fab fa-php"></i>&nbsp; Daniel
                Luiz Alves</a>
        </div>
    </nav>

    <div class="container" style="margin-top:25px;">
        <div class="row">
            <?php 
            if(($nivel == 1)||($nivel == 2)){
            ?>
            <div class="col-sm-6" style="margin-top: 25px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-cart-plus"></i>&nbsp;Adicionar produto</h5>
                        <p class="card-text">Adicione novos produtos em seu estoque.</p>
                        <a href="adicionar_produto.php" class="btn btn-sm btn-primary">Cadastrar produto</a>
                    </div>
                </div>
            </div>
            <?php } ?>

            <div class="col-sm-6" style="margin-top: 25px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-clipboard-list"></i>&nbsp;Lista de produtos</h5>
                        <p class="card-text">Edite, liste e adicione exclua seus produtos.</p>
                        <a href="listar_produtos.php" class="btn btn-sm btn-primary">Listar produtos</a>
                    </div>
                </div>
            </div>
            <?php 
            if(($nivel == 1)||($nivel == 2)){
            ?>
            <div class="col-sm-6" style="margin-top: 25px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-box"></i>&nbsp;Adicionar categorias</h5>
                        <p class="card-text">Adicione novas categorias para seus produtos.</p>
                        <a href="adicionar_categoria.php" class="btn btn-sm btn-primary">Adicionar categoria</a>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php 
            if(($nivel == 1)||($nivel == 2)){
            ?>
            <div class="col-sm-6" style="margin-top: 25px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="far fa-id-card"></i>&nbspAdicionar Fornecedores</h5>
                        <p class="card-text">Adicione novos fornecedores de seus produtos.</p>
                        <a href="adicionar_fornecedor.php" class="btn btn-sm btn-primary">Adicionar fornecedor</a>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="col-sm-6" style="margin-top: 25px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-pencil-alt"></i>&nbsp Listar categorias</h5>
                        <p class="card-text">Edite, liste e adicione exclua suas categorias cadastradas.</p>
                        <a href="listar_categorias.php" class="btn btn-sm btn-primary">Listar categorias</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 25px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-user-edit"></i>&nbsp Listar fornecedores</h5>
                        <p class="card-text">Edite, liste e adicione exclua seus fornecedores ja cadastrados.</p>
                        <a href="#" class="btn btn-sm btn-secondary disabled" aria-disabled="true">Em breve</a>
                    </div>
                </div>
            </div>
            <?php 
            if(($nivel == 1)){
            ?>
            <div class="col-sm-6" style="margin-top: 25px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-user-check"></i>&nbsp Cadastrar usuários</h5>
                        <p class="card-text">Cadastre novos usuários no sistema.</p>
                        <a href="cadastro_usuario.php" class="btn btn-sm btn-primary">Cadastrar novo</a>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php 
            if(($nivel == 1)){
            ?>
            <div class="col-sm-6" style="margin-top: 25px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-user-check"></i>&nbsp Aprovar usuários</h5>
                        <p class="card-text">Aprove os usuários que se cadastraram no sistema por meio externo.</p>
                        <a href="aprovar_usuario.php" class="btn btn-sm btn-primary">Exibir lista</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/cae6919cdb.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>