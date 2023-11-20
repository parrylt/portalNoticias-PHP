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
        <img src="../imageNoticias/serieFantasia.jpg" class="img-fluid rounded-start" style="margin-top: -16px; width: 800px; height: 400px;" alt="Série de Fantasia 'Reinos Encantados' Cativa Fãs com Seu Mundo Mágico">
      <div class="col-md-12" style="text-align: justify; max-width: 800px;">
        <div class="card-body">
          <h1 class="card-title">Série de Fantasia 'Reinos Encantados' Cativa Fãs com Seu Mundo Mágico</h1><br>
          <h4>Encantando Corações: 'Reinos Encantados' Transporta Fãs para um Mundo Mágico e Irresistível</h4><br>
          <h6 class="card-title">Por Chat Openai, Repórter de Entretenimento - 09/09/2009</h6><br><br>
          <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Em um mundo repleto de magia e mistério, a série de fantasia "Reinos Encantados" tem 
            cativado fãs de todas as idades com seu enredo envolvente, personagens memoráveis e um 
            mundo mágico que desperta a imaginação. A série se tornou um fenômeno cultural, atraindo 
            uma base de fãs dedicada e ávida por explorar os segredos de seus reinos encantados.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">A Magia do Mundo de 'Reinos Encantados'</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            "Reinos Encantados" transporta os telespectadores para um mundo de magia, onde elfos, dragões, 
            feiticeiros e criaturas místicas coexistem em uma trama rica em detalhes e profundidade. Os 
            reinos mágicos e as paisagens deslumbrantes criam um cenário que é ao mesmo tempo exuberante 
            e perigoso.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Personagens Carismáticos e Complexos</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Um dos maiores atrativos da série são os personagens carismáticos e complexos. Os telespectadores 
            se identificam com heróis relutantes, anti-heróis imperfeitos e vilões intrigantes, todos com 
            seus próprios segredos e motivações. O desenvolvimento desses personagens ao longo da série é 
            um dos pontos fortes da narrativa.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Narrativa Cativante e Reviravoltas Surpreendentes</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            A série "Reinos Encantados" é conhecida por sua narrativa cativante, cheia de reviravoltas 
            surpreendentes. Conforme os personagens enfrentam desafios e descobrem segredos ocultos, os 
            telespectadores são mantidos à beira de seus assentos, ansiosos para descobrir o que acontecerá 
            em seguida.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Efeitos Visuais de Primeira Linha</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Os efeitos visuais impressionantes de "Reinos Encantados" trazem à vida a magia e as criaturas 
            fantásticas do mundo da série. Cada cena é uma obra de arte visual que transporta os telespectadores 
            para um universo mágico repleto de detalhes incríveis.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Engajamento nas Redes Sociais e Comunidade de Fãs</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            A série tem uma comunidade de fãs dedicada que se reúne nas redes sociais para debater teorias, 
            compartilhar fanart e discutir os episódios mais recentes. A interação entre os fãs e a produção 
            da série tem alimentado ainda mais o entusiasmo em torno de "Reinos Encantados."
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Impacto na Cultura Pop</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            "Reinos Encantados" transcendeu o entretenimento e deixou uma marca na cultura pop. Os elementos da série, 
            como feitiçaria, espadas mágicas e batalhas épicas, inspiraram jogos, livros e até mesmo linhas de produtos.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Expectativas para Futuras Temporadas</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Com a empolgação contínua dos fãs e a promessa de novos mistérios a serem desvendados, as expectativas 
            para futuras temporadas de "Reinos Encantados" estão mais altas do que nunca. Os criadores prometem 
            levar os telespectadores a lugares ainda mais incríveis e surpreendentes à medida que a série continua 
            a desvendar os segredos de seus reinos mágicos.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Uma Viagem Inesquecível</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            "Reinos Encantados" é uma série que transporta os telespectadores para um mundo de maravilhas e perigos, 
            onde a magia é real e as aventuras nunca terminam. Com uma base de fãs crescente e uma narrativa envolvente, 
            a série é uma jornada inesquecível pelo reino da fantasia.
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