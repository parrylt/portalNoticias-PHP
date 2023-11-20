<?php
session_start();

if (isset($_SESSION['usuario'])) {
    
    header("Location: index.php?erroLogin=1");
    exit;
}


$mensagemErro = '';

if (isset($_GET['erro'])) 
{
        $erro = $_GET['erro'];

    if ($erro == 1) {
        $mensagemErro = '<h3 style="text-align: center; margin-top: 5%">Erro: Credenciais de login incorretas ou o administrador não liberou o seu cadastro. 
        Tente novamente ou comunique o administrador.</h3>';

    }
    elseif ($erro == 2)
    {
        $mensagemErro = "<h3 style='text-align: center>A sessão expirou ou você não se conectou. Faça o login nesta página.</h3>";
    }
    elseif ($erro == 3)
    {
        $mensagemErro = "<h3 style='text-align: center>Acesso não permitido. Faça o login para prosseguir.</h3>";
    }
    elseif ($erro == 4)
    {
        $mensagemErro = "<h3 style='text-align: center'>A senha ou o usuário ou os dois estão incorretos.</h3>";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Caveat&family=Press+Start+2P&family=Sora:wght@600&display=swap" rel="stylesheet">
        <style>
        body {
            background-image: url('white.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
            
      .login{
        position: absolute; 
        top: 10%; 
        right: 35%;
        transform: translate (-50%, -50%);
      }

      .btn{
        margin-left: 75px;
        margin-top: 2px;
      }

      .erro{
        position: flex; 
        margin-top: 1%; 
        margin-left: 25%;
        margin-right: 20%;
        transform: translate (-50%, -50%);
      }
    </style>

</head>
<body>


<div>
    <button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 5px"><a href="index.php" style="color: white">Home</a></button>
    <button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 5px"><a href="newsletter.php" style="color: white">Newsletter</a></button>
    <button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 5px"><a href="trabalheConosco.php" style="color: white">Trabalhe Conosco</a></button>
    <button type="button" class="btn btn-dark btnAreaCadastro" style="margin-top: 5px; margin-left: 5px"><a href="cadastro.php" style="color: white">Cadastro</a></button>
    <button type="button" class="btn btn-dark btnAreaLogin" style="margin-top: 5px; margin-left: 5px"><a href="login.php" style="color: white">Login</a></button>
</div>

<div class="erro">
<span>              
      <?php echo isset($mensagemErro) ? $mensagemErro : ''; ?>
    </span><br>
</div>
<div class="login">
    <h1 style="margin-top: 120px; margin-left: 640px">Login</h1><br><br><br><br>
    <form action="autenticaLogin.php" method="post">
        <h5 style="margin-left: 515px; margin-top: -40px">E-mail: </h5>
        <input type="text" name="email" aria-describedby="emailHelp" style="margin-left: 505px; width: 400px" required>
        <small id="emailHelp" class="form-text text-muted" style="margin-left: 520px;">Nunca vamos compartilhar seu email, com ninguém.</small>
            <br><br>
        <h5 style="margin-left: 515px; margin-top: -40px">Senha: </h5>
        <input type="password" name="senha" style="margin-left: 505px; width: 400px" required><br><br>  
        <input class="btn btn-dark btnEnt" style="margin-left: 665px; margin-top: 10px"  type="submit" value="Entrar">
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>