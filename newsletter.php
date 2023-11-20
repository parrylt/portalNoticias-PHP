<?php
session_start();
$nome = $_SESSION['nome'];

if (isset($_GET['sucessoCad']) && $_GET['sucessoCad'] == 1) {
    echo "<div style='color: black; text-align: center; justify-content: center; z-Index: 5; 
    display: flex; align-items: center'> <h5 class='CadSucesso'>Cadastro realizado com sucesso! Em breve, você receberá nossas newsletters.</h5></div>";
  }  

if (isset($_SESSION['email']))
{
    $email = $_SESSION['email'];

    if (isset($_SESSION['Admin']) && $_SESSION['Admin'] === true) 
    {
      echo "<h5 class='boasVindas' style='color: black; text-align: center; justify-content: center; z-Index: 5; 
      display: flex; align-items: center'>Boas-vindas, <br/>" . $nome ."</h5>";
      echo '<button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 9.5px"><a href="colunista.php" style="color: white">Área do Colunista</a></button>';
      echo '<button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 9.5px"><a href="admin.php" style="color: white">Área do Administrador</a></button>';
   }
    if (isset($_SESSION['Colunista']) && $_SESSION['Colunista'] === true) 
    {

      echo "<h5 class='boasVindas' style='color: black; text-align: center; justify-content: center; z-Index: 5; display: flex; align-items: center'>Boas-vindas, <br/>" . $nome ."</h5>
      <a href='colunista.php'><button type='button' class='btn btn-dark btnAreaColun'>Área do Colunista</button></a><br>
      <a href='logout.php'><button type='button' class='btn btn-dark btnAreaSair'>Sair</button></a></div>";
    }
    
} 
else 
{
  echo '<div><button type="button" class="btn btn-dark" btnAreaCadastro style="margin-top: 5px; margin-left: 5px"><a href="cadastro.php" style="color: white">Cadastro</a></button>
  <button type="button" class="btn btn-dark" btnAreaLogin style="margin-top: 5px; margin-left: 5px"><a href="login.php" style="color: white">Login</a></button></div>';
}

    $emailErro = "";

if (isset($_GET['erro']))
{
    $erro = $_GET['erro'];

    if ($erro == 1)
    {
        $emailErro = "* Este e-mail já está cadastrado. Escolha outro.";
    }
}
?>
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Newsletter - Increva-se para Receber</title>
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
      <button type='button' class='btn btn-dark' style='margin-top: 5px; margin-left: 9.5px'><a href='newsletter.php' style='color: white'>Newsletter</a></button>
      <button type='button' class='btn btn-dark' style='margin-top: 5px; margin-left: 9.5px'><a href='trabalheConosco.php' style='color: white'>Trabalhe Conosco</a></button>
    
        <div class="wrapper">
            <h2 style="margin-top: 50px; margin-left: 380px">Cadastre-se para receber a nossa newsletter</h2>
            <h4 style="margin-top: 40px; margin-left: 415px">Preencha com as suas informações para inscrever-se.</h4>
            <form action="autenticaNewsletter.php" method="post">
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
                    <span class="erro"><br>  
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-dark btnCad" style="margin-left: 585px; margin-top: -40px" value="Cadastrar">Cadastrar</button>
                <button type="reset" class="btn btn-dark btnApagar" style="margin-left: 10px; margin-top: -40px" value="Cadastrar">Apagar Dados</button>
                </div>            
            </form>
        </div> 
    
    </body>
</html>