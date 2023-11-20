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

$sqlAprov = "SELECT titulo FROM materia WHERE id_materia = $id AND valida = 1";
$resultAprov = mysqli_query($con, $sqlAprov);

if (mysqli_num_rows($resultAprov) > 0) {
    echo "<h3 style='text-align: center; margin-top: 5%;>Você não pode deletar uma matéria já publicada!</h3>";
} else 
{

$deletar = mysqli_query ($con, "delete from materia where id_materia = $id;"); 

$faltando = mysqli_query ($con, 'SELECT * FROM materia WHERE valida = 0');

if ($deletar) {
    echo "<h3 style='text-align: center; margin-top: 5%;'>Matéria deletada com sucesso!</h3>";
} else {
    echo "<h3 style='text-align: center; margin-top: 2%;'>Erro ao deletar a matéria: " . mysqli_error($con) . " </h3>";
}

    if (mysqli_num_rows($faltando) === 0) 
    {
    echo "<h3 style='text-align: center; margin-top: 5%;'>Nenhuma notícia para ser aprovada!</h3>";

    } 
    else
    {
        echo '<h3 style="text-align: center; margin-top: 2%;">Você tem notícias para aprovar! <br><br>';
        echo '<button type="button" class="btn btn-dark" ><a href="noticiasAdmin.php" style="color: white">Voltar</a></button>';
    }

}

    mysqli_close ($con);
?>
</body>
</html>