<?php

$servidor = "localhost";
$usuarioser = "root";
$senhaser= "";
$bd = "reparte";

$conexao = new mysqli($servidor, $usuarioser, $senhaser, $bd);

    if($conexao->connect_error)
    {
        die("Falha na conexão : " . $conexao->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $usuario = $_POST["usuario"];

        //Validando a entrada de dados
        if(empty($email) || empty($senha) || empty($usuario))
        {
            echo "Faltou dados! :D";
        }  
            //Validando o email
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            echo "Email inválido";
        }
        else
        {

            $stmt = $conexao->prepare("SELECT email FROM login WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($email_bd);
            $stmt->fetch();

            if($email_bd == $email)
            {

                echo "Email Já existe";
                
            } 
            else 
            {
                $senha_has = password_hash($senha, PASSWORD_DEFAULT);
                $stmt = $conexao->prepare("INSERT INTO `login`(`usuario`, `email`, `senha`) VALUES (?, ?, ?)");
                $stmt->bind_param("sss", $usuario, $email, $senha_has);
                
                if ($stmt->execute()) {
                    echo "Usuário cadastrado com sucesso!";
                } else {
                    echo "Erro ao cadastrar usuário: " . $stmt->error;
                }

            }

        } 
    }      

?>