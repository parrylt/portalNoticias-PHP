<?php
session_start();
$nome = $_SESSION['nome'];

if (isset($_GET['sucessoCad']) && $_GET['sucessoCad'] == 1) {
    echo "<div style='color: black; text-align: center; justify-content: center; z-Index: 5; 
    display: flex; align-items: center'> <h5 class='CadSucesso'>Cadastro realizado com sucesso! Em breve, você receberá nossas newsletters.</h5></div>";
  }  

if (isset($_SESSION['nome']))
{
    $email = $_SESSION['email'];

    if (isset($_SESSION['Admin']) && $_SESSION['Admin'] === true) 
    {
        echo "<h5 class='boasVindas' style='color: black; text-align: center; justify-content: center; z-Index: 5; display: flex; align-items: center'>Boas-vindas, <br/>" . $nome ."</h5>";
        echo "<button type='button' class='btn btn-dark' style='margin-top: 5px; margin-left: 5px'><a href='colunista.php' style='color: white'>Área do Colunista</a></button>";
        echo '<button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 5px"><a href="admin.php" style="color: white">Área do Administrador</a></button>';
        echo "<button type='button' class='btn btn-dark' style='margin-top: 5px; margin-left: 5px'><a href='logout.php' style='color: white'>Sair</a></button>";
      }
    if (isset($_SESSION['Colunista']) && $_SESSION['Colunista'] === true) 
    {
        echo "<div style='color: black; text-align: center; justify-content: center; z-Index: 5; display: flex; align-items: center'><h5 class='boasVindas'>Boas-vindas, <br/>" . $nome ."</h5>";
        echo "<button type='button' class='btn btn-dark' style='margin-top: 5px; margin-left: 5px'><a href='colunista.php'>Área do Colunista</a></button>";
        echo "<button type='button' class='btn btn-dark' style='margin-top: 5px; margin-left: 5px'><a href='logout.php'>Sair</a></button></div>";
    }
} 
else 
{
    echo '<div>
    <button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 5px"><a href="cadastro.php" style="color: white">Cadastro</a></button>
    <button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 5px"><a href="login.php" style="color: white">Login</a></button>
    </div>';
}

$arquivoErro = $emailErro = "";

if (isset($_GET['erro']))
{
    $erro = $_GET['erro'];

    if ($erro == 1)
    {
        $emailErro = "* Este e-mail já enviou um currículo.";
    }
    elseif ($erro == 2)
    {
        $arquivoErro = "* Este arquivo é muito grande.";
    }
    elseif ($erro == 3)
    {
        $arquivoErro = "* Este arquivo já foi enviado.";
    }
    elseif ($erro == 4)
    {
        $arquivoErro = "* Apenas currículos em PDF, DOCX, JPEG, JPG e PNG são permitidos.";
    }
    elseif ($erro == 5)
    {
        $arquivoErro = "* Não foi possível fazer o upload do seu arquivo. Tente novamente";
    }
    elseif ($erro == 6)
    {
        $arquivoErro = "* Houve um erro ao tentar fazer o upload do arquivo. Tente novamente.";
    }

}

if (isset($_GET['sucesso']))
{
    $sucesso = $_GET['sucesso'];

    if ($sucesso == 1)
    {
        $arquivoErro = "O arquivo foi enviado. Analisaremos o seu currículo em breve.";
    }
}
?>  
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Trabalhe Conosco</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Caveat&family=Press+Start+2P&family=Sora:wght@600&display=swap" rel="stylesheet">
        
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

<button type='button' class='btn btn-dark' style='margin-top: 5px; margin-left: 5px'><a href='index.php' style='color: white'>Home</a></button>
<button type='button' class='btn btn-dark' style='margin-top: 5px; margin-left: 5px'><a href='newsletter.php' style='color: white'>Newsletter</a></button>
<button type='button' class='btn btn-dark' style='margin-top: 5px; margin-left: 5px'><a href='trabalheConosco.php' style='color: white'>Trabalhe Conosco</a></button>
    
        <div class="wrapper">
        <h2 style="margin-top: 50px; margin-left: 580px">Trabalhe Conosco</h2>
        <h4 style="margin-top: 40px; margin-left: 400px">Preencha com as suas informações e envie seu currículo.</h4>

            <form action="upload.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <h5 for="Email" style="margin-left: 515px; margin-top: 50px">Endereço de email:</h5>
                    <input type="email" class="form-control" aria-describedby="emailHelp" style="margin-left: 505px; width: 400px" name="email" placeholder="Seu email" required>
                    <small id="emailHelp" class="form-text text-muted" style="margin-left: 520px;">Nunca vamos compartilhar seu email, com ninguém.</small>
                </div>
                <div class="form-group">
                    <span class="erro">
                    <?php echo isset($emailErro) ? $emailErro : ''; ?>
                    </span><br>  
                </div> 
                <div class="form-group">
                    <h5 style="margin-left: 515px; margin-top: -40px">Nome Completo:</h5>
                    <input type="text" class="form-control" style="margin-left: 505px; width: 400px" name="nome" placeholder="Seu nome completo" required>
                </div>
                <div class="form-group">
                    <h5 style="margin-left: 515px; margin-top: 25px">Anexe o seu CV aqui:</h5>
                    <input type="file" style="margin-left: 520px" name="arquivoUpload" id="arquivoUpload" required>
                </div>
                <div class="form-group">
                <span class="erro">
                    <?php echo isset($arquivoErro) ? $arquivoErro : ''; ?>
                    </span><br>  
                </div> 
                <div class="form-group">
                    <button type="submit" class="btn btn-dark btnCad" style="margin-left: 585px; margin-top: -40px" value="Cadastrar">Cadastrar</button>
                    <button type="reset" class="btn btn-dark btnApagar" style="margin-left: 10px; margin-top: -40px" value="Cadastrar">Apagar Dados</button>
                </div>
            </form>
        </div> 
    </body>
</html>