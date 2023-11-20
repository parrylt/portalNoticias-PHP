<?php
session_start();

$nome = $_SESSION['nome'];
echo '<h5 style="color: black; text-align: center; justify-content: center; z-Index: 5; display: flex; 
align-items: center" class="boasVindas">Boas-vindas, <br/>' . $nome .'</h5>';


$arquivoErro = "";

if (isset($_GET['erro']))
{
    $erro = $_GET['erro'];

    if ($erro == 1)
    {
        echo "* O arquivo de imagem é muito grande. Tente novamente.";
    }
    elseif ($erro == 2)
    {
        $arquivoErro = "* Este arquivo já foi enviado. Mude o nome do seu arquivo e tente novamente.";
    }
    elseif ($erro == 3)
    {
        $arquivoErro = "* Apenas imagens em JPEG, JPG e PNG são permitidos.";
    }
    elseif ($erro == 4)
    {
        $arquivoErro = "* Não foi possível fazer o upload do seu arquivo de imagem. Tente novamente mais tarde.";
    }
    elseif ($erro == 5)
    {
        $arquivoErro = "* Não foi possível fazer o upload do seu arquivo. Tente novamente";
    }
    elseif ($erro == 6)
    {
        echo "* Houve um erro ao cadastrar a sua notícia. Tente novamente.";
    }

}

if (isset($_GET['sucesso']))
{
    $sucesso = $_GET['sucesso'];

    if ($sucesso == 1)
    {
        echo "A notícia foi enviada. Espere um administrador analisar e aceitar ela.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Colunista</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Caveat&family=Press+Start+2P&family=Sora:wght@600&display=swap" rel="stylesheet">
    
</head>
<body>

<div>
    <button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 5px"><a href="index.php" style="color: white">Home</a></button>
    <button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 5px"><a href="newsletter.php" style="color: white">Newsletter</a></button>
    <button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 5px"><a href="trabalheConosco.php" style="color: white">Trabalhe Conosco</a></button>
    
<?php
    if (isset($_SESSION['Colunista']) && $_SESSION['Colunista'] == true || isset($_SESSION['Admin']) && $_SESSION['Admin'] == true)
    {
    
     if (isset($_SESSION['Colunista']) && $_SESSION['Colunista'] == true){
        echo '<button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 5px"><a href="colunista.php" style="color: white">Área do Colunista</a></button>';
        echo '<button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 5px"><a href="logout.php" style="color: white">Sair</a></button>';
     }
     elseif (isset($_SESSION['Admin']) && $_SESSION['Admin'] == true){
        echo '<button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 5px"><a href="colunista.php" style="color: white">Área do Colunista</a></button>';
        echo '<button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 5px"><a href="admin.php" style="color: white">Área do Administrador</a></button>';
        echo '<button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 5px"><a href="logout.php" style="color: white">Sair</a></button>';
     }   
    }
    else 
    {
        header("Location: login.php?erro=3");
        exit;
    }
?>

</div>
<div class="wrapper">
        <h2 style="margin-top: 50px; margin-left: 460px">Poste a sua notícia, <?php echo $_SESSION['nome']; ?></h2>
        <h4 style="margin-top: 40px; margin-left: 500px">Preencha os campos abaixo de acordo.</h4>

            <form action="postaNoticia.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <h5 for="Titulo" style="margin-left: 515px; margin-top: 50px">Título da Notícia:</h5>
                    <input type="text" class="form-control" aria-describedby="titleHelp" style="margin-left: 505px; width: 400px" name="titulo" required>
                </div>
                <div class="form-group">
                    <h5 for="Subtitulo" style="margin-left: 515px; margin-top: 50px">Subtítulo da Notícia:</h5>
                    <input type="text" class="form-control" aria-describedby="titleHelp" style="margin-left: 505px; width: 400px" name="subtitulo" required>
                </div>
                <div class="form-group">
                    <h5 style="margin-left: 515px; margin-top: 25px">Anexe a imagem da notícia aqui:</h5>
                    <input type="file" style="margin-left: 520px" name="arquivoUpload" id="arquivoUpload" required>
                </div>
                <div class="form-group">
                <span class="erro">
                    <?php echo isset($arquivoErro) ? $arquivoErro : ''; ?>
                    </span><br>  
                </div> 
                <div class="form-group">
                <h5 for="Texto" style="margin-left: 620px; margin-top: 50px">Texto da Notícia:</h5>
                <textarea style="margin-top: 10px; margin-left: 400px; margin-bottom: 50px; width: 600px; height: 500px" class="form-control" id="content" name="noticia" label="Escreva aqui a sua notícia." required></textarea>
            </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark btnCad" style="margin-left: 585px; margin-top: -40px" value="Cadastrar">Cadastrar</button>
                    <button type="reset" class="btn btn-dark btnApagar" style="margin-left: 10px; margin-top: -40px" value="Cadastrar">Apagar Dados</button>
                </div>
            </form>
        </div> 


            <style>
                body{ 
                    background-image: url('white.jpg');
                    background-repeat: no-repeat;
                    background-attachment: fixed;
                    background-size: cover;
                }  

                .btnEnviar{
                    margin-left: 20%;
                    margin-top: 1%;
                }
            </style>

</body>
</html>