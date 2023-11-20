<?php
session_start();

if (isset($_SESSION['email']))
{
    $email = $_SESSION['email'];
    $nome = $_SESSION['nome'];

    if (isset($_SESSION['Admin']) && $_SESSION['Admin'] === true) 
    {
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
else 
{
    header("Location: login.php?erro=2");
    exit;
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Área do Admnistrador</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Caveat&family=Press+Start+2P&family=Sora:wght@600&display=swap" rel="stylesheet">
   
</head>
<body>

<style>   
    body{ 
        background-image: url('white.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
</style>

<?php

$host  = "localhost:3306";
$user  = "root";
$pass  = "";
$base  = "portal_noticias";

$con = new mysqli($host, $user, $pass, $base);

        $res = mysqli_query ($con, 'SELECT * FROM usuarios;');
        $pegaCad = "select id_user, usuario, nome, estado, administrador, colunista FROM usuarios";
        $tabela = mysqli_query($con, $pegaCad);

        echo " <table style='margin-left: 20%; text-align: center; margin-top: 4%'><tr><th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ID do Usuário &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th><th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Usuário &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th><th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Nome do Usuário &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th><th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp UF &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th><th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Administrador? &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th><th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Colunista? &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th></tr>";

            while ($escrever = mysqli_fetch_array ($res))
            {
                echo "</td><td>" . $escrever['id_user'] . "</td><td>" . $escrever['usuario'] ."</td><td>" . $escrever['nome'] ."</td><td>" . $escrever['estado'] . "</td><td>";

                if ($escrever['administrador'] == 1) {
                    echo "Sim";
                }
                else
                {
                    echo "Não";
                }

                echo "</td><td>";

                if ($escrever['colunista'] == 1){
                    echo "Sim";
                }
                else{
                    echo "Não";
                }


                echo "</td></tr>";

            }


    echo "</table>";
    echo "</br></br>";

    $cadastro = mysqli_query ($con, 'SELECT * FROM usuarios WHERE cad_valido = 0');

    if (mysqli_num_rows($cadastro) === 0) 
    {
    echo "<h2 style='color: black; text-align: center; margin-top: 2%; justify-content: center; z-Index: 5; display: flex; 
    align-items: center' class='boasVindas' class='titulo'>Nenhum cadastro para ser revisado!</h2>";
    echo '<button style="margin-left: 48%; margin-top: 4%" type="button" class="btn btn-dark" ><a href="admin.php" style="color: white">Voltar</a></button>';
    } 
    else
    {
        echo "<h2 style='color: black; text-align: center; margin-top: 2%; justify-content: center; z-Index: 5; display: flex; 
        align-items: center' class='boasVindas' class='titulo'>Você tem cadastro para revisar!</h2> <br><br>";
        echo '<button style="margin-left: 48%; margin-top: 4%" type="button" class="btn btn-dark" ><a href="admin.php" style="color: white">Voltar</a></button>';
    }
mysqli_close ($con);
?>

</body>
</html>