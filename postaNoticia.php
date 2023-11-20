<?php
session_start();

if ((isset($_SESSION['Colunista']) && $_SESSION['Colunista'] == true) || (isset($_SESSION['Admin']) && $_SESSION['Admin'] == true))
    {
     
    }
    else 
    {
        header("Location: login.php?erro=3");
        exit;
    }

$target_dir = "imageNoticias/";
$target_file = $target_dir . basename($_FILES["arquivoUpload"]["name"]);
$uploadOk = 1;
$arquivoTipo = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$host  = "localhost:3306";
$user  = "root";
$pass  = "";
$base  = "portal_noticias";

$con = mysqli_connect ($host, $user, $pass, $base);


$nome = $_SESSION['nome'];
$titulo = $_POST["titulo"];
$subtitulo = $_POST["subtitulo"];
$texto = $_POST["noticia"];


if (mysqli_connect_error()) {
  die("Falha na conexão: " . mysqli_connect_error());
}

if ($_FILES["arquivoUpload"]["size"] > 5000000)
{
    $uploadOk = 0;
    header("Location: colunista.php?erro=1");
    exit;  
}

if (is_file($target_file))
{
  $uploadOk = 0;
  header("Location: colunista.php?erro=2");
  exit;  
}

$extensoes_validas = array("jpeg", "jpg", "png");
if (!in_array($arquivoTipo, $extensoes_validas))
{
  $uploadOk = 0;
  header("Location: colunista.php?erro=3");
  exit;  
}

if ($uploadOk == 0)
{
    header("Location: colunista.php?erro=4");
    exit; 
}
else
{
  if (move_uploaded_file($_FILES["arquivoUpload"]["tmp_name"], $target_file)) 
  {
    $caminho = '../' . $target_file;

    $result = $con->query("SELECT MAX(id_materia) AS max_id FROM materia;");
    $row = $result->fetch_assoc();
    $ultimo_id = $row["max_id"];

    $dataAtual = date('d/m/Y H:i:s');

    $conteudo = "<?php

    session_start();
    \$nome = \$_SESSION['nome'];
    ?>
    <!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <title>{$titulo}</title>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'> 
</head>

<body>

<style>
    body {
        background-image: url('../white.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
</style>

<div>

<button type='button' class='btn btn-dark' style='margin-top: 5px; margin-left: 5px'><a href='../index.php' style='color: white'>Home</a></button>
<button type='button' class='btn btn-dark' style='margin-top: 5px'><a href='../newsletter.php' style='color: white'>Newsletter</a></button>
<button type='button' class='btn btn-dark' style='margin-top: 5px'><a href='../colunista.php' style='color: white'>Trabalhe Conosco</a></button>

<?php

if (isset(\$_SESSION['Colunista']) && \$_SESSION['Colunista'] == true || isset(\$_SESSION['Admin']) && \$_SESSION['Admin'] == true)
{

    if (isset(\$_SESSION['Colunista']) && \$_SESSION['Colunista'] == true){
      echo '<h5 class='boasVindas' style='color: black; text-align: center; justify-content: center; z-Index: 5; display: flex; align-items: center'>Boas-vindas, <br/>' . \$nome .'</h5>';
      echo '<button type=\'button\' class=\'btn btn-dark\' style=\'margin-top: 5px\'><a href=\'../colunista.php\' style=\'color: white\'>Área do Colunista</a></button>';
      echo '<button type=\'button\' class=\'btn btn-dark\' style=\'margin-top: 5px; margin-left: 5px\'><a href=\'../logout.php\' style=\'color: white\'>Sair</a></button>';
    }
    elseif (isset(\$_SESSION['Admin']) && \$_SESSION['Admin'] == true){
      echo '<h5 class='boasVindas' style='color: black; text-align: center; justify-content: center; z-Index: 5; display: flex; align-items: center'>Boas-vindas, <br/>' . \$nome .'</h5>';
      echo '<button type=\'button\' class=\'btn btn-dark\' style=\'margin-top: 5px\'><a href=\'../colunista.php\' style=\'color: white\'>Área do Colunista</a></button>';
      echo '<button type=\'button\' class=\'btn btn-dark\' style=\'margin-top: 5px\'><a href=\'../admin.php\' style=\'color: white\'>Área do Administrador</a></button>';
      echo '<button type=\'button\' class=\'btn btn-dark\' style=\'margin-top: 5px; margin-left: 5px\'><a href=\'../logout.php\' style=\'color: white\'>Sair</a></button>';
    }
}
elseif (isset(\$_SESSION['Colunista']) && \$_SESSION['Colunista'] == false || isset(\$_SESSION['Admin']) && \$_SESSION['Admin'] == false){

}
else {
  echo '<button type=\'button\' class=\'btn btn-dark\' style=\'margin-top: 5px\'><a href=\'../login.php\' style=\'color: white\'>Login</a></button>';
  echo '<button type=\'button\' class=\'btn btn-dark\' style=\'margin-top: 5px\'><a href=\'../cadastro.php\' style=\'color: white\'>Cadastro</a></button>';
}

?>

<div class='card mb-3 shadow mb-5 bg-white rounded' style='margin-left: 980px; margin-top: 20px; max-width: 300px; max-height: 400px;'>
    <img src='../imagePropaganda/propagandaNike.jpg' alt='Propaganda Nike'>
</div>

<div class='card mb-3 shadow mb-5 bg-white rounded' style='margin-left: 980px; margin-top: 100px; max-width: 300px; max-height: 400px;'>
    <img src='../imagePropaganda/propagandaBB.jpg' alt='Propaganda Banco do Brasil'>
</div>

<div class='card mb-3 shadow mb-5 bg-white rounded' style='margin-left: 980px; margin-top: 75px; max-width: 300px; max-height: 400px;'>
    <img src='../imagePropaganda/propagandaCinemark.jpg' alt='Propaganda Cinemark'>
</div>

<div>

<div class='card mb-3 border border-dark shadow p-3 mb-5 bg-white rounded' style='margin-left: 140px; margin-top: -1200px; max-width: 700px; max-height: 3000px;'>
    <div class='row g-0'>
        <img src='{$caminho}' class='img-fluid rounded-start' style='margin-top: -16px; width: 800px; height: 400px;'>
        <div class='col-md-12' style='text-align: justify; max-width: 800px;'>
            <div class='card-body'>
                <h1 class='card-title'>{$titulo}</h1><br>
                <h4>{$subtitulo}</h4><br>
                <h6 class='card-title'>Por {$nome} - {$dataAtual}</h6><br><br>
                <p class='card-text' style='text-align: justify; max-width: 500px; margin-left: 60px;'>
                {$texto} 
                </p>
                </br></br></br>
            </div>
        </div>
    </div>
</div>
</div>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js' integrity='sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL' crossorigin='anonymous'></script>
</body>
</html>";

    $pasta_destino = "./noticias/"; 

            if (!is_dir($pasta_destino)) 
            {
                mkdir($pasta_destino, 0755, true);
            }

            $novo_id = $ultimo_id + 1;
            $nome_arquivo = "$pasta_destino" . "noticia" . $novo_id . ".php";



    file_put_contents($nome_arquivo, $conteudo);


            $cadastro = $con->prepare("INSERT INTO materia (pk_autor_nome, titulo, imagem, subtitulo, texto, arquivo) VALUES (?, ?, ?, ?, ?, ?)");
            $cadastro->bind_param("ssssss",$nome,$titulo,$caminho,$subtitulo,$texto,$nome_arquivo);

            if ($cadastro->execute())
            {
                header("Location: colunista.php?sucesso=1");
                exit; 
            }
            else 
            {
                header("Location: colunista.php?erro=6");
                exit; 
            }    
  }
  else
  {
    header("Location: colunista.php?erro=6");
    exit; 
  }
}
$con->close();
?>