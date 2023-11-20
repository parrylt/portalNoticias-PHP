<?php

session_start();


if (isset($_SESSION['usuario'])) {
    
    header("Location: index.php?erroLogin=1");
    exit;
}

    $host  = "localhost:3306";
    $user  = "root";
    $pass  = "";
    $base  = "portal_noticias";

    $con = mysqli_connect ($host, $user, $pass, $base);


    if ($con->connect_error) {
        die("Erro na conexão com o banco de dados: " . $con->connect_error);
    }
    else
    {

        $email = $_POST['email'];
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $nome = $_POST['nome'];
        $genero = $_POST['genero'];
        $uf = $_POST['uf'];
        $confirmar_senha = $_POST['confirmar_senha'];


        $emailExistente = "SELECT id_user FROM usuarios WHERE email = '$email';";
        $usuarioExistente = "SELECT id_user FROM usuarios WHERE usuario = '$usuario';";

        $result = $con->query($emailExistente);
        $resultUsu = $con->query($usuarioExistente);


        if ($resultUsu->num_rows > 0)
        {
            header("Location: cadastro.php?erro=7");
            exit;  
        }

        if ($result->num_rows > 0)
        {
            header("Location: cadastro.php?erro=6");
            exit;  
        }

            if (strlen($senha) < 8) {
                header("Location: cadastro.php?erro=1");
                exit;    
            } 
            else
            {
                if (!preg_match("/[0-9]/", $senha)) {
                header("Location: cadastro.php?erro=2");
                exit;                
                } 
                else
                {
                    if (!preg_match("/[A-Z]/", $senha) || !preg_match("/[a-z]/", $senha))
                    {
                        header("Location: cadastro.php?erro=3");
                        exit;   
                    } 
                    else
                    {
                        if (!preg_match("/[!@#\$%^&*()\-_=+{};:,<.>]/", $senha)) 
                        {
                            header("Location: cadastro.php?erro=4");
                            exit;   
                        }
                    }
                }
            }

            if ($senha !== $confirmar_senha)
            {
                header("Location: cadastro.php?erro=5");
                exit;
            } 


            if ($emailErro == "" && $senhaIgualErro == "")
            {
                $senhaF = password_hash($senha, PASSWORD_DEFAULT);

                $consulta = $con->prepare("INSERT INTO usuarios (email, usuario, senha, nome, genero, estado) VALUES (?, ?, ?, ?, ?, ?)");
                $consulta->bind_param("ssssss", $email, $usuario, $senhaF, $nome, $genero, $uf);
                if ($consulta->execute())
                {
                    header("Location: index.php?sucessoCad=1");                  
                    exit;
                }
                else
                {
                    echo "Erro ao cadastrar o usuário: " . $consulta->error;
                }
            }
            

    $con->close();
    }
?>