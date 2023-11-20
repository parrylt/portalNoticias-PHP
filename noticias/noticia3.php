<?php
session_start();
$nome = $_SESSION['nome'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Meio Ambiente</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
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

<button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 5px"><a href='../index.php' style="color: white">Home</a></button>
<button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 5px"><a href='../newsletter.php' style="color: white">Newsletter</a></button>
<button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 5px"><a href='../trabalheConosco.php' style="color: white">Trabalhe Conosco</a></button>

<?php

if (isset($_SESSION['Colunista']) && $_SESSION['Colunista'] == true || isset($_SESSION['Admin']) && $_SESSION['Admin'] == true)
{

  if (isset($_SESSION['Colunista']) && $_SESSION['Colunista'] == true){
    echo "<h5 class='boasVindas' style='color: black; text-align: center; justify-content: center; z-Index: 5; display: flex; align-items: center'>Boas-vindas, <br/>" . $nome ."</h5>";
      echo '<button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 5px"><a href="../colunista.php" style="color: white">Área do Colunista</a></button>';
      echo '<button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 9.5px"><a href="../logout.php" style="color: white">Sair</a></button>';
  }
  elseif (isset($_SESSION['Admin']) && $_SESSION['Admin'] == true){
    echo "<h5 class='boasVindas' style='color: black; text-align: center; justify-content: center; z-Index: 5; display: flex; align-items: center'>Boas-vindas, <br/>" . $nome ."</h5>";
    echo '<button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 5px"><a href="../colunista.php" style="color: white">Área do Colunista</a></button>';
    echo '<button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 9.5px"><a href="../admin.php" style="color: white">Área do Administrador</a></button>';
    echo '<button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 9.5px"><a href="../logout.php" style="color: white">Sair</a></button>';
  }
}
elseif (isset($_SESSION['Colunista']) && $_SESSION['Colunista'] == false || isset($_SESSION['Admin']) && $_SESSION['Admin'] == false){
  
}
else {
  echo "<button type='button' class='btn btn-dark' style='margin-top: 5px; margin-left: 5px'><a href='../login.php' style='color: white'>Login</a></button>";
  echo "<button type='button' class='btn btn-dark' style='margin-top: 5px; margin-left: 9.5px'><a href='../cadastro.php' style='color: white'>Cadastro</a></button>";
 }

?>


  <div class="card mb-3 shadow mb-5 bg-white rounded" style="margin-left: 980px; margin-top: 20px; max-width: 300px; max-height: 400px;">
    <img src="../imagePropaganda/propagandaMC.jpg" alt="Propaganda Mc Donald's">
  </div>

  <div class="card mb-3 shadow mb-5 bg-white rounded" style="margin-left: 980px; margin-top: 50px; max-width: 300px; max-height: 400px;">
    <img src="../imagePropaganda/propagandaBis.jpg" alt="Propaganda Bis">
  </div>

  <div class="card mb-3 shadow mb-5 bg-white rounded" style="margin-left: 980px; margin-top: 75px; max-width: 300px; max-height: 400px;">
    <img src="../imagePropaganda/propagandaPedigree.jpg" alt="Propaganda Pedigree">
  </div>

<div>

  <div class="card mb-3 border border-dark shadow p-3 mb-5 bg-white rounded" style="margin-left: 140px; margin-top: -1210px; max-width: 700px; max-height: 3400px;">
    <div class="row g-0">
        <img src="../imageNoticias/orquidiaAmazonia.jpg" class="img-fluid rounded-start" style="margin-top: -16px; width: 800px; height: 400px;" alt="Cientistas Anunciam Descoberta de Nova Espécie de Orquídea na Amazônia">
      <div class="col-md-12" style="text-align: justify; max-width: 800px;">
        <div class="card-body">
          <h1 class="card-title">Cientistas Anunciam Descoberta de Nova Espécie de Orquídea na Amazônia</h1><br>
          <h4>Beleza Revelada na Selva: Cientistas Desvendam Encanto de uma Nova Espécie de Orquídea na Amazônia</h4><br>
          <h6 class="card-title">Por Chat Openai, Repórter de Meio Ambiente - 03/03/2003</h6><br><br>
          <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Em um emocionante desenvolvimento para a biodiversidade e a botânica, cientistas anunciaram 
            a descoberta de uma nova espécie de orquídea na vasta e exuberante floresta amazônica. A 
            descoberta ocorreu após extensas expedições de pesquisa na região, revelando mais um tesouro 
            da rica diversidade da Amazônia.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Uma Jornada de Descoberta</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            A busca pela nova espécie de orquídea começou há anos, quando um grupo de pesquisadores, 
            botânicos e entusiastas da flora embarcou em uma série de expedições na densa floresta 
            amazônica. Equipados com equipamentos de coleta, câmeras e microscópios, eles exploraram 
            áreas remotas, desafiando as condições adversas da selva tropical.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">A Orquídea "Amazonia Splendora"</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Os esforços valeram a pena quando a equipe de pesquisadores finalmente encontrou a nova 
            orquídea, que foi batizada de "Amazonia Splendora". A orquídea revelou características 
            únicas, incluindo pétalas escuras e uma fragrância doce que atraiu a atenção dos pesquisadores.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Importância para a Conservação</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            A descoberta da "Amazonia Splendora" é importante por várias razões. Primeiramente, destaca 
            a importância contínua da conservação da floresta amazônica, que abriga uma quantidade 
            incomparável de biodiversidade. Cada nova espécie descoberta na região é um lembrete da 
            necessidade de preservar este ecossistema vital.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Impacto na Pesquisa Botânica</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Além disso, a nova orquídea fornece uma oportunidade única para os botânicos estudarem sua 
            biologia e ecologia. A pesquisa subsequente ajudará a expandir nosso conhecimento sobre 
            orquídeas e ecossistemas amazônicos.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Celebrando a Descoberta</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            A comunidade científica está celebrando a descoberta da "Amazonia Splendora" como um triunfo 
            da pesquisa e exploração. Espera-se que essa nova espécie seja amplamente estudada e possa, 
            eventualmente, ser usada na criação de estratégias de conservação e educação ambiental.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Um Lembrete da Importância da Amazônia</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            A descoberta da "Amazonia Splendora" reforça a ideia de que a Amazônia continua a surpreender 
            o mundo com sua diversidade ecológica. Ao mesmo tempo, também serve como um lembrete da 
            importância da preservação desta floresta tropical única para o bem-estar de nosso planeta e 
            das futuras gerações.

            Assim, a "Amazonia Splendora" é mais do que apenas uma nova espécie de orquídea; é um símbolo 
            do compromisso contínuo de proteger e entender o incrível tesouro natural que é a floresta 
            amazônica.
            </p>
            </br></br></br>
          
        </div>
      </div>
    </div>
  </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>