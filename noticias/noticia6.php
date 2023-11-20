<?php
session_start();
$nome = $_SESSION['nome'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Educação e Sustentabilidade</title>
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
        <img src="../imageNoticias/estudantes.jpg" class="img-fluid rounded-start" style="margin-top: -16px; width: 800px; height: 400px;" alt="Estudantes Colaboram em Projetos Globais de Sustentabilidade">
      <div class="col-md-12" style="text-align: justify; max-width: 800px;">
        <div class="card-body">
          <h1 class="card-title">Estudantes Colaboram em Projetos Globais de Sustentabilidade</h1><br>
          <h4>Engajamento Estudantil pelo Planeta: Colaboração Global em Projetos de Sustentabilidade</h4><br>
          <h6 class="card-title">Por Chat Openai, Repórter de Educação e Sustentabilidade - 06/06/2006</h6><br><br>
          <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Em um emocionante exemplo de engajamento estudantil e ação global em prol da sustentabilidade, 
            jovens de todo o mundo estão se unindo em projetos colaborativos para abordar os desafios ambientais 
            e sociais mais prementes de nosso tempo. Essa nova geração de estudantes está demonstrando seu 
            compromisso com um futuro mais sustentável por meio de projetos criativos e inspiradores.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Colaboração Global pela Sustentabilidade</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Em uma época em que as preocupações com o meio ambiente, as mudanças climáticas e a justiça social 
            se tornaram urgentes, os estudantes estão se mobilizando para fazer a diferença. Eles estão trabalhando 
            juntos em projetos que abordam questões globais complexas.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Projetos Interdisciplinares</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Os estudantes estão aproveitando uma abordagem interdisciplinar para encontrar soluções inovadoras para 
            os desafios que enfrentam. Projetos que combinam ciência, tecnologia, engenharia, arte e matemática 
            (STEAM) estão no centro dessas iniciativas de sustentabilidade.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Exemplos de Projetos</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            A criatividade e a paixão dos estudantes estão visíveis em uma variedade de projetos. Alguns exemplos incluem:</br></br>

            - Campanhas de Conscientização sobre Mudanças Climáticas: Estudantes estão organizando campanhas nas redes 
            sociais, marchas e eventos para conscientizar sobre as mudanças climáticas e pressionar por ações concretas.</br></br>

            - Projeto de Reciclagem de Plástico: Equipes de estudantes estão desenvolvendo máquinas de reciclagem de 
            plástico de baixo custo que podem ser implementadas em comunidades locais.</br></br>

            - Hortas Escolares Sustentáveis: Alunos estão criando hortas sustentáveis em suas escolas, promovendo a 
            agricultura urbana e a educação sobre alimentação saudável.</br></br>

            - Iniciativas de Energia Renovável: Estudantes estão projetando e construindo sistemas de energia solar e 
            eólica para comunidades com falta de acesso à eletricidade.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Impacto Positivo nas Comunidades Locais e Globais</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Esses projetos estão tendo um impacto significativo não apenas nas comunidades locais, mas também no 
            cenário global. Os estudantes estão demonstrando que são agentes de mudança que podem influenciar as 
            políticas e inspirar ações em prol da sustentabilidade.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Apoio da Comunidade e Educadores</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Educadores e a comunidade estão desempenhando um papel fundamental no apoio e orientação dos estudantes. 
            Eles estão incentivando a criatividade, a liderança e o pensamento crítico, permitindo que os jovens 
            enfrentem desafios complexos com confiança.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Uma Nova Geração Comprometida com o Futuro</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Essa nova geração de estudantes está se destacando como defensores apaixonados da sustentabilidade, 
            demonstrando que a colaboração global e a inovação podem levar a mudanças positivas. À medida que esses 
            jovens continuam a desenvolver projetos inspiradores, há esperança de que o futuro seja mais sustentável 
            e equitativo para todos.

            Essa colaboração global de estudantes em projetos de sustentabilidade serve como um lembrete inspirador 
            de que a mudança é possível quando as mentes jovens e comprometidas se unem para enfrentar os desafios 
            mais prementes de nosso tempo.
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