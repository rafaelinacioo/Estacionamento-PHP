<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Painel Banco de dados</title>
    <link rel="stylesheet" href="../css/meuEstilo.css" type="text/css">
    <link rel="shortcut icon" href="../imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/bootstrap.min.css.map" type="text/css">
    <script src="../js/main.js" type="text/javascript"></script>
    <script src="../js/jquery.min.js" type="text/javascript"></script>
    <script src="../js/jquery.mask.min.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../js/bootstrap-notify.min.js" type="text/javascript"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>


<body>
    <?php
    include_once("bloqueio.php");
    ?>

    <?php

    mysqli_query($conexao, "delete from veiculo where id_veiculo ");
    echo "<script>
                        function confirmacao(){
                            $.notify({
                    // options
                    message: 'Deletado com successo!' 
                },{
                    // settings
                    type: 'danger',
                    delay: 1000
                });
                return false
                        }
                            </script>";

    echo "<meta http-equiv='refresh' content='0, url=index.php'>";

    ?>

    <script src="../../js/popper.min.js" type="text/javascript"></script>
</body>

</html>