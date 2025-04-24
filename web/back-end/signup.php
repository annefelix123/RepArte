<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="loginf" method="post" action="">
        <label for="">email:</label>
        <input name="email" id="email" type="text">
        <label for="">senha:</label>
        <input name="senha" id="senha" type="password">
    </form>

    window

</body>
</html>

<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha= "";
    $bd = "reparte";

    $conexao = new mysqli($serv, $usuario, $senha, $bd);

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['senha']['email']) && !empty($_POST['email']['senha'])){


        $email = floatval($_POST["email"]);
        $senha = floatval($_POST["senha"]);


    } else {

                
    }

    if($conexao->connect_error){
        die("Falha na conexão : " . $conexao->connect_error);
    }



?>

<script type="text/javascript">

function erro() {
    window.prompt("Faltou dados! :D")
}



</script>