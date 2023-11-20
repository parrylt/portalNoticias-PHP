<?php
session_start();
$nome = $_SESSION['nome'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Saúde</title>
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
    <img src="../imagePropaganda/propagandaNike.jpg" alt="Propaganda Nike">
  </div>

  <div class="card mb-3 shadow mb-5 bg-white rounded" style="margin-left: 980px; margin-top: 100px; max-width: 300px; max-height: 400px;">
    <img src="../imagePropaganda/propagandaBB.jpg" alt="Propaganda Banco do Brasil">
  </div>

  <div class="card mb-3 shadow mb-5 bg-white rounded" style="margin-left: 980px; margin-top: 75px; max-width: 300px; max-height: 400px;">
    <img src="../imagePropaganda/propagandaCinemark.jpg" alt="Propaganda Cinemark">
  </div>

<div>

  <div class="card mb-3 border border-dark shadow p-3 mb-5 bg-white rounded" style="margin-left: 140px; margin-top: -1200px; max-width: 700px; max-height: 3400px;">
    <div class="row g-0">
        <img src="../imageNoticias/diagnostico.jpg" class="img-fluid rounded-start" style="margin-top: -16px; width: 800px; height: 400px;" alt="Startup Revoluciona a Medicina com Dispositivo de Diagnóstico Instantâneo">
      <div class="col-md-12" style="text-align: justify; max-width: 800px;">
        <div class="card-body">
          <h1 class="card-title">Startup Revoluciona a Medicina com Dispositivo de Diagnóstico Instantâneo</h1><br>
          <h4>Transformando o Futuro da Saúde: Startup Inova com Dispositivo que Proporciona Diagnóstico Instantâneo na Medicina</h4><br>
          <h6 class="card-title">Por Chat Openai, Repórter de Saúde - 04/04/2004</h6><br><br>
          <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Uma notícia emocionante está abalando o mundo da medicina, à medida que uma startup inovadora 
            lança um dispositivo de diagnóstico instantâneo que promete revolucionar a forma como as doenças 
            são detectadas e tratadas. Essa inovação promete acelerar o diagnóstico e o tratamento médico, 
            economizando tempo e vidas.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Uma Abordagem Revolucionária</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            A startup, conhecida como "MediTech DiagnoScan", desenvolveu um dispositivo de diagnóstico que 
            utiliza tecnologia avançada para analisar amostras de sangue, urina e outros fluidos corporais 
            em questão de segundos. Em vez de esperar dias ou semanas por resultados de laboratório, os 
            médicos agora têm acesso a informações cruciais de forma praticamente instantânea.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Rápido e Preciso</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            O dispositivo "DiagnoScan" é projetado para ser portátil e fácil de usar, permitindo que seja 
            utilizado em hospitais, clínicas e até mesmo em consultas médicas de rotina. Ele fornece 
            resultados altamente precisos e imediatos, ajudando os médicos a tomar decisões informadas 
            em tempo real.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Impacto na Medicina de Emergência</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Uma das maiores vantagens desse dispositivo é seu potencial impacto na medicina de emergência. 
            Quando os minutos contam, o "DiagnoScan" pode auxiliar os profissionais de saúde a diagnosticar 
            rapidamente condições críticas, como ataques cardíacos, AVCs e envenenamento.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Redução de Custos e Recursos</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Além de salvar vidas, a tecnologia inovadora da "MediTech DiagnoScan" também promete reduzir os 
            custos e recursos envolvidos nos exames de laboratório tradicionais. Menos testes demorados e 
            repetidos podem economizar recursos hospitalares e reduzir o ônus financeiro para os pacientes.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Perspectivas Futuras</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Os fundadores da startup têm grandes esperanças de que essa tecnologia possa ser aprimorada e 
            expandida para cobrir uma variedade de condições médicas. Isso poderia incluir testes adicionais 
            para doenças infecciosas, câncer, doenças autoimunes e muito mais.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Entusiasmo na Comunidade Médica</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            A comunidade médica está entusiasmada com as possibilidades que o "DiagnoScan" oferece. Médicos, 
            enfermeiros e pesquisadores veem essa inovação como um avanço revolucionário na medicina, com o 
            potencial de melhorar significativamente a qualidade do atendimento ao paciente.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Regulamentação e Implementação</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Embora o dispositivo de diagnóstico instantâneo tenha um potencial incrível, ainda existem desafios 
            a serem superados, incluindo questões de regulamentação e integração com os sistemas de saúde 
            existentes. A startup está trabalhando em estreita colaboração com agências reguladoras e hospitais 
            para garantir a implementação segura e eficaz do "DiagnoScan".
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Um Novo Capítulo na Medicina</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            O "DiagnoScan" representa um novo capítulo na história da medicina, prometendo transformar a forma 
            como as doenças são diagnosticadas e tratadas. À medida que essa tecnologia inovadora se torna mais 
            amplamente disponível, a esperança é que ela possa desempenhar um papel fundamental na melhoria da 
            saúde e do bem-estar de pessoas em todo o mundo.
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