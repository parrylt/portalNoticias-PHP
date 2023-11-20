<?php
session_start();

if (isset($_SESSION['nome']))
{
    $nome = $_SESSION['nome'];
    $email = $_SESSION['email'];

    if (isset($_SESSION['Admin']) && $_SESSION['Admin'] === true) 
    {
        $nome = $_SESSION['nome'];

        echo '<h5 style="color: black; text-align: center; justify-content: center; z-Index: 5; display: flex; 
        align-items: center" class="boasVindas">Boas-vindas, <br/>' . $nome .'</h5>';
        echo '<button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 5px"><a href="index.php" style="color: white">Home</a></button>';
        echo '<button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 9.5px"><a href="newsletter.php" style="color: white">Newsletter</a></button>';
        echo '<button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 9.55px"><a href="trabalheConosco.php" style="color: white">Trabalhe Conosco</a></button>';
        echo '<button type="button" class="btn btn-dark btnAreaCadastro" style="margin-top: 5px; margin-left: 9.55px"><a href="colunista.php" style="color: white">Área do Colunista</a></button>';
        echo '<button type="button" class="btn btn-dark btnAreaLogin" style="margin-top: 5px; margin-left: 9.5px"><a href="admin.php" style="color: white">Área do Administrador</a></button>';
        echo' <button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 5px"><a href="logout.php" style="color: white">Sair</a></button>';
    }
    else 
    {
    header("Location: index.php?erroAdmin=1");
    exit;
    }
}   
else {
    {
        header("Location: login.php?erro=3");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Área do Admnistrador</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
</head>
<body>

<style>
  body {
    background-image: url('white.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
  }

</style>

<?php

$id = $_POST['id'];

$host  = "localhost:3306";
$user  = "root";
$pass  = "";
$base  = "portal_noticias";
$con   = mysqli_connect($host, $user, $pass, $base);

$sqlAdmin = "SELECT usuario FROM usuarios WHERE id_user = $id AND administrador = 1";
$resultAdmin = mysqli_query($con, $sqlAdmin);

if (mysqli_num_rows($resultAdmin) > 0) {
    echo "<h3 style='text-align: center; margin-top: 5%;'>Você não pode deletar um administrador!</h3>";
    echo '<button style="margin-left: 48%; margin-top: 4%" type="button" class="btn btn-dark" ><a href="admin.php" style="color: white">Voltar</a></button>';
} else 
{


$deletar = mysqli_query ($con, "delete from usuarios where id_user = $id;"); 

$cadastro = mysqli_query ($con, 'SELECT * FROM usuarios WHERE cad_valido = 0');

if ($deletar) {
    echo "<h3 style='text-align: center; margin-top: 5%;'>Usuário deletado com sucesso!</h3>";
} 
else {
    echo "<h3 style='text-align: center'>Erro ao deletar o usuário: " . mysqli_error($con) . " </h3>";
    echo '<button style="margin-left: 48%; margin-top: 4%" type="button" class="btn btn-dark" ><a href="admin.php" style="color: white">Voltar</a></button>';
}

    if (mysqli_num_rows($cadastro) === 0) 
    {
    echo "<h3 style='text-align: center; margin-top: 5%;'>Nenhum cadastro para ser revisado!</h3>";
    echo '<button style="margin-left: 48%; margin-top: 4%" type="button" class="btn btn-dark" ><a href="admin.php" style="color: white">Voltar</a></button>';
    } 
    else
    {
        echo '<h3 style="text-align: center; margin-top: 5%;">Você tem cadastro para revisar!';
        echo '<button style="margin-left: 48%; margin-top: 4%" type="button" class="btn btn-dark" ><a href="admin.php" style="color: white">Voltar</a></button>';
    }

}

    mysqli_close ($con);
?>
</body>
</html>