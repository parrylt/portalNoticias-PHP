<?php

session_start();

if (isset($_SESSION['nome']))
{
  $nome = $_SESSION['nome'];
  $email = $_SESSION['email'];
  echo '<h5 style="color: black; text-align: center; justify-content: center; z-Index: 5; display: flex; 
  align-items: center" class="boasVindas">Boas-vindas, <br/>' . $nome .'</h5>';
}

if (isset($_GET['sucessoCad']) && $_GET['sucessoCad'] == 1) {
  echo "<div style='color: black; text-align: center; justify-content: center; z-Index: 5; 
  display: flex; align-items: center'> <h5 class='CadSucesso;'>Cadastro realizado com sucesso! <br>
  Agora, é só o administrador validar o seu cadastro.</h5></div>";
}  

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
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

<div>

<button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 5px"><a href='index.php' style="color: white">Home</a></button>
<button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 5px"><a href='newsletter.php' style="color: white">Newsletter</a></button>
<button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 5px"><a href='trabalheConosco.php' style="color: white">Trabalhe Conosco</a></button>

<?php

if (isset($_SESSION['Colunista']) && $_SESSION['Colunista'] == true || isset($_SESSION['Admin']) && $_SESSION['Admin'] == true)
{

  if (isset($_SESSION['Colunista']) && $_SESSION['Colunista'] == true){
      echo '<button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 5px"><a href="colunista.php" style="color: white">Área do Colunista</a></button>';
      echo '<button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 9.5px"><a href="logout.php" style="color: white">Sair</a></button>';
  }
  elseif (isset($_SESSION['Admin']) && $_SESSION['Admin'] == true){
    echo '<button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 5px"><a href="colunista.php" style="color: white">Área do Colunista</a></button>';
    echo '<button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 9.5px"><a href="admin.php" style="color: white">Área do Administrador</a></button>';
    echo '<button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 9.5px"><a href="logout.php" style="color: white">Sair</a></button>';
  }
}
elseif (isset($_SESSION['Colunista']) && $_SESSION['Colunista'] == false || isset($_SESSION['Admin']) && $_SESSION['Admin'] == false){
  
}
else {
  echo "<button type='button' class='btn btn-dark' style='margin-top: 5px; margin-left: 5px'><a href='cadastro.php' style='color: white'>Cadastro</a></button>";
  echo "<button type='button' class='btn btn-dark' style='margin-top: 5px; margin-left: 9.5px'><a href='login.php' style='color: white'>Login</a></button>";
 }

?>

  <div class="card mb-3 shadow mb-5 bg-white rounded" style="margin-left: 980px; margin-top: 20px; max-width: 300px; max-height: 400px;">
    <img src="imagePropaganda/propagandaNike.jpg" alt="Propaganda Nike">
  </div>

  <div class="card mb-3 shadow mb-5 bg-white rounded" style="margin-left: 980px; margin-top: 100px; max-width: 300px; max-height: 400px;">
    <img src="imagePropaganda/propagandaBB.jpg" alt="Propaganda Banco do Brasil">
  </div>

  <div class="card mb-3 shadow mb-5 bg-white rounded" style="margin-left: 980px; margin-top: 75px; max-width: 300px; max-height: 400px;">
    <img src="imagePropaganda/propagandaCinemark.jpg" alt="Propaganda Cinemark">
  </div>



  <?php
  
  if (isset($_GET['erroLogin']) && $_GET['erroLogin'] == 1) {
      echo "<script> alert ('Erro: Você já está logad@.');";
  }
  if (isset($_GET['erroAdmin']) && $_GET['erroAdmin'] == 1) {
    echo "<script> alert ('Acesso não permitido.');";
  }
  


  $host  = "localhost:3306";
  $user  = "root";
  $pass  = "";
  $base  = "portal_noticias";

  $con = mysqli_connect ($host, $user, $pass, $base);


if ($con->connect_error) {
  die("A conexão falhou: " . $con->connect_error);
}

$sql = "SELECT * FROM materia WHERE valida = 1;";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  echo '<div style="margin-top: -1200px;" class="noticias-container">';
  while ($row = $result->fetch_assoc()) {
      echo '<div class="card mb-3 border border-dark shadow p-3 mb-5 bg-white rounded" style="margin-left: 140px; max-width: 700px; max-height: 280px;">
              <div class="row g-0">
                  <div class="col-md-4">
                      <a href="' . $row["arquivo"] . '">
                          <img src="' . $row["imagem"] . '" class="img-fluid rounded-start" alt="' . $row["titulo"] . '">
                      </a>
                  </div>
                  <div class="col-md-8">
                      <div class="card-body">
                          <a href="' . $row["arquivo"] . '" style="color: black;"><h5 class="card-title">' . $row["titulo"] . '</h5></a>
                          <p class="card-text">' . $row["subtitulo"] . '</p>
                      </div>
                  </div>
              </div>
          </div>';
  }
  echo '</div>';
} else {
  echo '<div class="card mb-3 border border-dark shadow p-3 mb-5 bg-white rounded" style="margin-left: 140px; margin-top: -1200px; max-width: 700px; max-height: 280px;">Nenhuma matéria encontrada.</div>';
}

$con->close();

  ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>