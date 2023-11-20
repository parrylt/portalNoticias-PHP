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
        body{ 
            background-image: url('white.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .btnVerCad{
            margin-left: 45%;
            margin-top: 8%;
        }

        .btnVerificarNovosCad{
            margin-left: 42.8%;
            margin-top: 2%;
        }

        .btnVerificarNoticias{
            margin-left: 41.8%;
            margin-top: 2%;
        }
    </style>

    <form class="row g-3" method="POST" action="cadastrados.php">
        <input class="btn btn-dark btnVerCad" type="submit" name="aceitar" value="Ver cadastrados "><br><br>
    </form>

    <form class="row g-3" method="POST" action="novos.php">
        <input class="btn btn-dark btnVerificarNovosCad" type="submit" name="aceitar" value="Verificar novos cadastros"><br><br>
    </form>

    <form class="row g-3" method="POST" action="noticiasAdmin.php">
        <input class="btn btn-dark btnVerificarNoticias" type="submit" name="aceitar" value="Verificar notícias para liberar"><br><br>
    </form>
</body>
</html>