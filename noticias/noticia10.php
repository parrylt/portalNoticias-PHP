<?php
session_start();
$nome = $_SESSION['nome'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Entretenimento</title>
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
      echo '<button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 9.5px; margin-left: 5px"><a href="../logout.php" style="color: white">Sair</a></button>';
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
    <img src="../imagePropaganda/propagandaNike.jpg" alt="Propaganda Nike">
  </div>

  <div class="card mb-3 shadow mb-5 bg-white rounded" style="margin-left: 980px; margin-top: 100px; max-width: 300px; max-height: 400px;">
    <img src="../imagePropaganda/propagandaBB.jpg" alt="Propaganda Banco do Brasil">
  </div>

  <div class="card mb-3 shadow mb-5 bg-white rounded" style="margin-left: 980px; margin-top: 75px; max-width: 300px; max-height: 400px;">
    <img src="../imagePropaganda/propagandaCinemark.jpg" alt="Propaganda Cinemark">
  </div>

<div>

  <div class="card mb-3 border border-dark shadow p-3 mb-5 bg-white rounded" style="margin-left: 140px; margin-top: -1150px; max-width: 700px; max-height: 3400px;">
    <div class="row g-0">
        <img src="../imageNoticias/serieTerror.jpg" class="img-fluid rounded-start" style="margin-top: -16px; width: 800px; height: 400px;" alt="Série de Terror 'Pesadelos Profundos' Recebe Elogios por Assustar Até os Corajosos">
      <div class="col-md-12" style="text-align: justify; max-width: 800px;">
        <div class="card-body">
          <h1 class="card-title">Série de Terror 'Pesadelos Profundos' Recebe Elogios por Assustar Até os Corajosos</h1><br>
          <h4>Arrepios de Admiração: 'Pesadelos Profundos' Recebe Elogios por Desafiar a Coragem dos Telespectadores</h4><br>
          <h6 class="card-title">Por Chat Openai, Repórter de Entretenimento - 10/10/2010</h6><br><br>
          <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Uma série de terror está aterrorizando telespectadores e recebendo elogios da crítica por seu 
            poder de assustar até mesmo os mais corajosos. "Pesadelos Profundos" é a nova sensação no mundo 
            do entretenimento de horror, oferecendo uma experiência intensa que está conquistando fãs do gênero.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Horror Psicológico de Alto Nível</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            "Pesadelos Profundos" é um exemplo notável de horror psicológico de alto nível. A série se 
            concentra em mergulhar os telespectadores em um universo de pesadelos e horrores que desafiam 
            a lógica e mexem com a mente.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Personagens Complexos e Emoções Intensas</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Os personagens de "Pesadelos Profundos" são complexos e vulneráveis, o que permite que o público 
            se conecte emocionalmente com eles. Conforme os horrores se desenrolam, os telespectadores são 
            levados a uma jornada de emoções intensas, que incluem medo, ansiedade e desespero.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Atuações Memoráveis</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            O elenco da série entrega atuações memoráveis que dão vida aos personagens aterrorizados. Os 
            talentos de atuação são um dos destaques da produção, criando um ambiente de horror crível e 
            arrepiante.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Sustos Inesperados e Atmosfera Tensa</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            "Pesadelos Profundos" é conhecida por seus sustos inesperados e pela criação de uma atmosfera 
            tensa que mantém o público à beira do assento. A série não tem medo de desafiar as convenções 
            do gênero de terror, surpreendendo os telespectadores a cada episódio.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Reações nas Redes Sociais</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;"> 
            As redes sociais têm sido inundadas com reações dos fãs que compartilham suas experiências 
            aterrorizantes com a série. Hashtags relacionadas a "Pesadelos Profundos" estão se tornando 
            tendência à medida que os telespectadores expressam seu medo e fascinação com a série.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Impacto na Cultura do Terror</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            "Pesadelos Profundos" está deixando uma marca profunda na cultura do terror. Fãs do gênero 
            estão debatendo teorias, comparando as cenas mais assustadoras e criando uma comunidade 
            online dedicada a explorar os mistérios da série.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Expectativas para a Continuação</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Com o sucesso estrondoso da primeira temporada, as expectativas para a continuação de 
            "Pesadelos Profundos" estão mais altas do que nunca. Os criadores da série prometem mais 
            sustos, mistérios e pesadelos perturbadores à medida que a história se desenrola.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Um Marco no Terror Televisivo</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            "Pesadelos Profundos" está se destacando como um marco no terror televisivo, cativando o 
            público com sua narrativa envolvente e assustadora. A série prova que o gênero do terror 
            continua a evoluir e a surpreender os fãs, mesmo os mais corajosos, e está destinada a se 
            tornar uma referência no mundo do horror televisivo.
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