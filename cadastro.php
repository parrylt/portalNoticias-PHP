<?php
session_start();

if (isset($_SESSION['email'])) {
    
    header("Location: index.php?erroLogin=1");
    exit;
}

$emailErro = $senhaErro = $senhaIgualErro = $usuarioErro = "";

if (isset($_GET['erro'])) {
    $erro = $_GET['erro'];

    if ($erro == 1)
    {
        $senhaErro = "* A senha deve conter pelo menos 8 caracteres.";
    }
    elseif ($erro == 2) 
    {
        $senhaErro = "* A senha deve conter pelo menos um número.";
    }
    elseif ($erro == 3)
    {
        $senhaErro = "* A senha deve conter pelo menos uma letra maiúscula e uma letra minúscula.";
    }
    elseif ($erro == 4)
    {
        $senhaErro = "* A senha deve conter pelo menos um caractere especial.";
    }
    elseif ($erro == 5)
    {
        $senhaIgualErro = "* As senhas não coincidem. Tente novamente.";
    }
    elseif ($erro == 6)
    {
        $emailErro = "* Este e-mail já está cadastrado. Escolha outro.";
    }
    elseif ($erro == 7)
    {
        $usuarioErro = "* Este usuário já existe. Escolha outro.";
    }
}   
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
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
    <button type="button" class="btn btn-dark btnAreaCadastro" style="margin-top: 5px; margin-left: 5px"><a href="cadastro.php" style="color: white">Cadastro</a></button>
    <button type="button" class="btn btn-dark btnAreaLogin" style="margin-top: 5px; margin-left: 5px"><a href="login.php" style="color: white">Login</a></button>
</div>

    <div class="wrapper">
        <h1 style="margin-top: 50px; margin-left: 580px;">Cadastre-se</h1>
        <h4 style="margin-top: 40px; margin-left: 400px;">Preencha com as suas informações para criar uma conta.</h4>
        <form action="autenticaCadastro.php" method="post">
        <div class="form-group">
                <h5 style="margin-top: 60px; margin-left: 450px;">Nome:</h5>
                <input type="text" class="form-control" style="margin-top: 20px; margin-left: 450px; width: 500px" name="nome">
            </div>
        <div class="form-group">
            <h5 style="margin-top: 40px; margin-left: 460px;">Gênero:</h5>
            <select style="margin-top: 10px; margin-left: 460px; width: 150px" name="genero" required>
                <option disabled selected value=""></option>
                <option value="Feminino">Feminino</option>
                <option value="Masculino">Masculino</option>
                <option value="Não-Binário">Não-Binário</option>
                <option value="Outro">Outro</option>
                <option value="Prefiro não falar">Prefiro não falar</option>
            </select>
        </div>
        <div class="form-group">
            <h5 style="margin-top: 40px; margin-left: 460px;">Estado:</h5> 
            <select name="uf" style="margin-top: 7.5px; margin-left: 460px; width: 150px" required>
                <option disabled selected value=""></option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espirito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MT">Mato Grosso</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
            </select>
        </div>
            <div class="form-group">
                <h5 style="margin-top: 40px; margin-left: 450px;">E-mail:</h5>
                <input type="email" class="form-control" name="email" style="margin-top: 10px; margin-left: 450px; width: 500px">
            </div>
            <div class="form-group">
            <span class="erro">
                <?php echo isset($emailErro) ? $emailErro : ''; ?>
                </span><br>  
            </div>  
            <div class="form-group">
                <h5 style="margin-top: -10px; margin-left: 450px;">Usuário</h5>
                <input type="text" class="form-control" name="usuario" style="margin-top: 10px; margin-left: 450px; width: 500px">
            </div>
            <div class="form-group">
            <span class="erro">
                <?php echo isset($usuarioErro) ? $usuarioErro : ''; ?>
                </span><br>  
            </div>
            <div class="form-group">
                <h5 style="margin-top: -10px; margin-left: 450px;">Senha</h5>
                <input type="password" class="form-control" name="senha" style="margin-top: 10px; margin-left: 450px; width: 500px">
            </div>
            <div class="form-group">
            <span class="erro">
                <?php echo isset($senhaErro) ? $senhaErro : ''; ?>
                </span><br>  
            </div>  
            <div class="form-group">
                <h5 style="margin-top: -10px; margin-left: 450px;">Confirme a Senha</h5>
                <input type="password" class="form-control" name="confirmar_senha" style="margin-top: 10px; margin-left: 450px; width: 500px">
            </div>
            <div class="form-group">
            <span class="erro">
                <?php echo isset($senhaIgualErro) ? $senhaIgualErro : ''; ?>
                </span><br>  
            </div>  
            <div class="form-group">
                <input type="submit" class="btn btn-dark btnCad" value="Cadastrar" style="margin-top: 20px; margin-bottom: 60px; margin-left: 570px;">
                <input type="reset" class="btn btn-dark btnApagar" value="Apagar Dados" style="margin-top: 20px; margin-bottom: 60px; margin-left: 30px;">
            </div>
            <p style="margin-top: 10px; margin-bottom: 50px; margin-left: 550px;">Você já tem uma conta? <a href="login.php">Faça o Login aqui</a></p>
        </form>
    </div> 

    <style>
        body{ 
            background-image: url('white.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }  

        h5{
            margin-left: 8%;
        }

        .btnCad{
            margin-left: 20%;
            margin-top: 1%;
        }

        .btnApagar{
            margin-left: 12%;
            margin-top: 5%;
        }
    </style>

</body>
</html>