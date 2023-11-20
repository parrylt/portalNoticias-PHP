<?php

session_start();

    $host  = "localhost:3306";
    $user  = "root";
    $pass  = "";
    $base  = "portal_noticias";

    $con = mysqli_connect ($host, $user, $pass, $base);

    $nome = $_POST['nome'];
    $email = $_POST['email'];


    if ($con->connect_error) {
        die("Erro na conexão com o banco de dados: " . $con->connect_error);
    }
    else
    {
        $emailExistente = "SELECT id_usuario_nl FROM newsletter WHERE email_nl = '$email'";
        $result = $con->query($emailExistente);


        if ($result->num_rows > 0)
        {
            header("Location: newsletter.php?erro=1");
            exit;  
        }
        else
        {
            $cadastro = $con->prepare("INSERT INTO newsletter (email_nl, nome_nl) VALUES (?, ?)");
            $cadastro->bind_param("ss",$email, $nome);

            if ($cadastro->execute())
            {
                header("Location: newsletter.php?sucessoCad=1");                  
                exit;
            } else {
                echo "Erro ao cadastrar o usuário: " . $cadastro->error;
            }    
        }
            

    $con->close();
    }
?>