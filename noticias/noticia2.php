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
    <img src="../imagePropaganda/propagandaHavaianas.jpg" alt="Propaganda Havaianas">
  </div>

  <div class="card mb-3 shadow mb-5 bg-white rounded" style="margin-left: 980px; margin-top: 110px; max-width: 300px; max-height: 400px;">
    <img src="../imagePropaganda/propagandaDoritos.jpg" alt="Propaganda Doritos">
  </div>

  <div class="card mb-3 shadow mb-5 bg-white rounded" style="margin-left: 980px; margin-top: 50px; max-width: 300px; max-height: 400px;">
    <img src="../imagePropaganda/propagandaMultigrip.jpg" alt="Propaganda Multigrip">
  </div>

<div>

  <div class="card mb-3 border border-dark shadow p-3 mb-5 bg-white rounded" style="margin-left: 140px; margin-top: -1150px; max-width: 700px; max-height: 3400px;">
    <div class="row g-0">
        <img src="../imageNoticias/diabetes.jpg" class="img-fluid rounded-start" style="margin-top: -16px; width: 800px; height: 400px;" alt="Pesquisadores Descobrem Nova Terapia para Tratar Diabetes Tipo 2">
      <div class="col-md-12" style="text-align: justify; max-width: 800px;">
        <div class="card-body">
          <h1 class="card-title">Pesquisadores Descobrem Nova Terapia para Tratar Diabetes Tipo 2</h1><br>
          <h4>Avanço Científico Promissor: Terapia Inovadora Surge como Esperança no Combate à Diabetes Tipo 2</h4><br>
          <h6 class="card-title">Por Chat Openai, Repórter de Saúde 02/02/2002</h6><br><br>
          <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Uma notícia empolgante chega ao campo da saúde com a revelação de uma terapia inovadora que 
            pode oferecer esperança renovada para os milhões de pessoas que vivem com diabetes tipo 2. 
            Pesquisadores de renome internacional anunciaram uma descoberta que promete revolucionar o 
            tratamento da doença.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Uma abordagem revolucionária</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            A pesquisa, conduzida por uma equipe de cientistas dedicados, concentrou-se em uma abordagem 
            completamente nova para o tratamento do diabetes tipo 2. Em vez de depender apenas de medicamentos 
            para controlar os níveis de açúcar no sangue, a terapia se concentra na regeneração de células 
            pancreáticas disfuncionais.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Regeneração das Células Beta</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            No centro dessa descoberta está a regeneração das células beta no pâncreas, que são cruciais na 
            produção de insulina. Em indivíduos com diabetes tipo 2, essas células muitas vezes se tornam 
            disfuncionais e não conseguem produzir insulina de maneira eficaz. A nova terapia visa estimular 
            a regeneração dessas células, restaurando a capacidade do corpo de regular os níveis de glicose 
            no sangue.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Resultados Promissores em Estudos Preliminares</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Estudos preliminares da terapia mostraram resultados promissores. Pacientes que participaram dos 
            ensaios clínicos apresentaram melhorias significativas na regulação do açúcar no sangue, reduzindo 
            a dependência de insulina exógena e outros medicamentos. Além disso, muitos experimentaram uma 
            melhoria na qualidade de vida geral, com menos oscilações nos níveis de energia e humor.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Impacto Potencial no Tratamento do Diabetes</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Os pesquisadores estão entusiasmados com o potencial impacto dessa nova terapia no tratamento do 
            diabetes tipo 2. Se os resultados continuarem a ser positivos nos ensaios clínicos em larga escala, 
            a terapia poderá fornecer uma nova opção para aqueles que enfrentam essa condição crônica.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Próximos Passos e Esperança no Horizonte</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Embora ainda haja muito trabalho a ser feito antes que a terapia esteja disponível para o público 
            em geral, essa descoberta representa um passo promissor na busca por tratamentos mais eficazes e 
            menos invasivos para o diabetes tipo 2. A comunidade científica e médica está ansiosa para acompanhar 
            o progresso dessa pesquisa e espera que ela ofereça esperança renovada para aqueles que enfrentam 
            essa condição desafiadora.

            Essa descoberta reforça o poder da pesquisa e da inovação na área da saúde, à medida que os cientistas 
            continuam a buscar soluções para as doenças que afetam milhões de vidas em todo o mundo.
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