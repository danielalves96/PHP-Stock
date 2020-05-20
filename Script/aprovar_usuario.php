<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CRUD PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
</head>

<body>

<?php 

session_start();
$usuario = $_SESSION['usuario'];
if(!isset($_SESSION['usuario'])){
    header('Location: index.php');
}

?>

    <div class="container" style="margin-top: 40px">
        <center>
            <h3>Aprovar usuários</h3>
        </center>
        <br>
        <br>
        <center>
            <table id="table_id" class="table table-bordered">
                <thead>
                    <tr>
                        <th scope=" col">Nome</th>
                        <th scope=" col">E-mail</th>
                        <th scope="col">
                            <center>Aprovar como</center>
                        </th>
                    </tr>
                </thead>

            <?php
            include 'conexao.php';
            $sql = "SELECT * FROM `usuarios` WHERE status = 'Inativo'";
            $busca = mysqli_query($conexao,$sql);

            while ($array = mysqli_fetch_array($busca)) {
                
                $id_usuario = $array['id_usuario'];
                $nome = $array['nome_usuario'];
                $mail = $array['mail_usuario'];
                $nome = $array['nome_usuario'];
            ?>
                <tr>
                    <td> <?php echo $nome ?> </td>
                    <td> <?php echo $mail ?> </td>

                    <td>
                        <center>
                            <a href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=1" role="button"
                                class="btn btn-success btn-sm"><i class="fas fa-user-shield"></i>&nbsp;
                                Administrador</a>

                            <a href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=2" role="button"
                                class="btn btn-warning btn-sm"><i class="fas fa-user-alt"></i>&nbsp;
                                Usuário</a>

                            <a href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=3" role="button"
                                class="btn btn-primary btn-sm"><i class="fas fa-user-tag"></i>&nbsp;
                                Conferente</a>

                            <a href="_deletar_usuario.php?id=<?php echo $id_usuario ?>"
                                role="button" class="btn btn-danger btn-sm"><i class="fas fa-ban"></i>&nbsp;
                                Inadimitir</a>
                        </center>
                    </td>
                    <?php } ?>

                </tr>
            </table>
        </center>

        <div style="text-align: right; margin-top:20px;">
            <a href="cadastro_usuario.php" role="button" class="btn btn-success btn-sm">Cadastrar novo usuário</a>
            <a href="menu.php" role="button" class="btn btn-primary btn-sm">Voltar para o menu</a>
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
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js">
    </script>

    <script>
    $(document).ready(function() {
        $('#table_id').DataTable({
            "language": {
                "lengthMenu": "Mostrando _MENU_ registros por página",
                "zeroRecords": "Nada encontrado",
                "info": "Mostrando _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro encontrado",
                "infoFiltered": "(Filtrado de _MAX_ registros totais)"
            }
        });
    });
    </script>

</body>

</html>