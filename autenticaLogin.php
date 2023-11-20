<?php
session_start();


if (isset($_SESSION['email'])) {
    
    header("Location: index.php?erroLogin=1");
    exit;
}


$host  = "localhost:3306";
$user  = "root";
$pass  = "";
$base  = "portal_noticias";

$conn = new mysqli($host, $user, $pass, $base);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = 'SELECT email, usuario, senha, nome, administrador, colunista FROM usuarios WHERE email = ? AND cad_valido = 1;';
    $consulta = $conn->prepare($sql);
    $consulta->bind_param("s", $email);
    $consulta->execute();
    $result = $consulta->get_result();
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    
        if (password_verify($senha, $row['senha'])) {
            session_start();
            $_SESSION['usuario'] = $row['usuario'];
            $_SESSION['nome'] = $row['nome'];
            $_SESSION['email'] = $email;
    
            if ($row['administrador'] == 1 && $row['colunista'] == 0) {
                $_SESSION['Admin'] = true;
                $_SESSION['Colunista'] = false;
            } elseif ($row['colunista'] == 1 && $row['administrador'] == 0) {
                $_SESSION['Admin'] = false;
                $_SESSION['Colunista'] = true;
            } else {
                $_SESSION['Admin'] = false;
                $_SESSION['Colunista'] = false;
            }
    
            header("Location: index.php?sucessoLogin=1");
            exit;
        } else {
            header("Location: login.php?erro=4");
            exit;
        }
    } else {
        header("Location: login.php?erro=1");
        exit;
    }
}
$conn->close();
?>