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

  .AceitarCad{
    margin-left: 40%;
    width: 150px;
    height: 50px;
    font-size: 18px;
    text-align: center;
  }

  .btnAceitarCad{
    margin-left: 1%;
    width: 150px;
    height: 50px;
  }

  .deletarCad{
    margin-left: 40%;
    width: 150px;
    height: 50px;
    font-size: 18px;
    text-align: center;
  }

  .btnDeletarCad{
    margin-left: 1%;
    width: 150px;
    height: 50px;
  }

  th, tr{
    text-align: center;
  }

</style>

<?php


$host  = "localhost:3306";
$user  = "root";
$pass  = "";
$base  = "portal_noticias";

$con = mysqli_connect ($host, $user, $pass, $base);
$checa = mysqli_query ($con, 'SELECT * FROM materia WHERE valida = 0');

    if (mysqli_num_rows($checa) === 0) 
    {
    echo "<h2 style='color: black; text-align: center; margin-top: 2%; justify-content: center; z-Index: 5; display: flex; 
    align-items: center' class='titulo'>Nenhuma notícia para ser aprovada!</h2>";
    echo '<button style="margin-left: 49%; margin-top: 4%" type="button" class="btn btn-dark" ><a href="admin.php" style="color: white">Voltar</a></button>';
    } 
    else
    {

        $res = mysqli_query ($con, 'SELECT id_materia, pk_autor_nome, titulo, subtitulo FROM materia WHERE valida = 0;');

        echo '<h2 style="color: black; text-align: center; margin-top: 2%; justify-content: center; z-Index: 5; display: flex; 
        align-items: center" class="titulo">Você tem notícias para aprovar!<br><br>';
        echo '<h2 style="color: black; text-align: center; justify-content: center; align-items: center" class="titulo">Para mais informações, leia o texto completo da <br> notícia na página salva na pasta correspondente!<br><br>';

        echo "<div style='padding-left: 5%; padding-right: 5%; padding-top: 2%' class='table'><table><tr><th>ID da Matéria</th><th>Nome do Autor</th><th>Título da Notícia</th><th>Subtítulo da Notícia</th></tr>";

            while ($escrever = mysqli_fetch_array ($res))
            {
            echo "</td><td>" . $escrever['id_materia'] . "</td><td>" . $escrever['pk_autor_nome'] . "</td><td>" .$escrever['titulo'] . "</td><td>" .$escrever['subtitulo'] . "</td></tr>";
            }
        echo '</table></div>';

        echo '<br><h5 style="color: black; text-align: center; margin-top: 2%; justify-content: center; z-Index: 5; display: flex; 
        align-items: center">Digite o ID da notícia você gostaria de aceitar:<h5><br>
        <form class="row g-3" method="POST" action="noticiasAdminSim.php">
        <input class="AceitarCad" type="number" name="id" min="1" max="9999999999" placeholder="ID da Notícia..." required><br><br>
        <input class="btn btn-dark btnAceitarCad" type="submit" name="aceitar" value="Aprovar Notícia"><br><br>
        <br>
        
        </form>
        <h5 style="color: black; text-align: center; margin-top: 2%; justify-content: center; z-Index: 5; display: flex; 
        align-items: center"> OU DIGITE O ID PARA DELETAR A NOTÍCIA:</h5><br>
        <form class="row g-3" method="POST" action="noticiasAdminNao.php">
        <input class="deletarCad" type="number" name="id" min="1" max="9999999999" placeholder="ID da Notícia..." required><br><br>
        <input  class="btn btn-dark btnDeletarCad" type="submit" name="aceitar" value="Deletar Notícia"><br><br>
        </form>';
        echo '<button style="margin-left: 49%; margin-top: 4%; margin-bottom: 2%;" type="button" class="btn btn-dark" ><a href="admin.php" style="color: white">Voltar</a></button>';
    
        mysqli_close ($con);
    }
?>
</body>
</html>