<?php
session_start();
$nome = $_SESSION['nome'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Tecnologia</title>
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

  <div class="card mb-3 border border-dark shadow p-3 mb-5 bg-white rounded" style="margin-left: 140px; margin-top: -1136px; max-width: 700px; max-height: 3400px;">
    <div class="row g-0">
        <img src="../imageNoticias/petTech.jpg" class="img-fluid rounded-start" style="margin-top: -16px; width: 800px; height: 400px;" alt="Pet Tech: Novo Dispositivo Traduz Latidos e Miados em Linguagem Humana">
      <div class="col-md-12" style="text-align: justify; max-width: 800px;">
        <div class="card-body">
          <h1 class="card-title">Pet Tech: Novo Dispositivo Traduz Latidos e Miados em Linguagem Humana</h1><br>
          <h4>Comunicação Inovadora: Dispositivo Pet Tech Traduz as Vozes dos Animais de Estimação para a Linguagem Humana</h4><br>
          <h6 class="card-title">Por Chat Openai, Repórter de Tecnologia - 11/11/2011</h6><br><br>
          <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Para os amantes de animais de estimação em todo o mundo, uma inovação tecnológica emocionante 
            está prestes a aproximar ainda mais os humanos de seus queridos animais de quatro patas. Uma 
            startup revolucionária lançou um dispositivo inovador que promete traduzir os latidos e miados 
            de cães e gatos em linguagem humana, abrindo uma nova era de comunicação entre as espécies.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">A Revolução da Comunicação com Animais de Estimação</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            O dispositivo, conhecido como "PetTalk," foi desenvolvido por uma equipe de cientistas e 
            engenheiros dedicados a melhorar a relação entre humanos e seus animais de estimação. A 
            ideia por trás do "PetTalk" é permitir que os proprietários de animais de estimação 
            compreendam melhor as necessidades, emoções e desejos de seus cães e gatos.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Como Funciona o "PetTalk"</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            O "PetTalk" é um pequeno dispositivo que pode ser preso à coleira de um cão ou ao colar 
            de um gato. Ele utiliza avançados algoritmos de reconhecimento de padrões e inteligência 
            artificial para analisar os sons e vocalizações de animais de estimação.

            Quando um animal faz um som, como um latido ou miado, o dispositivo captura o som e o 
            traduz instantaneamente em palavras ou frases compreensíveis em um aplicativo para 
            smartphone. Isso permite que os proprietários de animais de estimação entendam o que 
            seus companheiros peludos estão tentando comunicar.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Um Salto na Compreensão dos Animais de Estimação</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            O "PetTalk" promete ser um salto significativo na compreensão dos animais de estimação. 
            Não apenas os proprietários poderão satisfazer as necessidades de seus animais de estimação 
            de forma mais eficaz, mas também poderão fortalecer os laços emocionais com seus companheiros 
            peludos.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Feedback Positivo dos Testes</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            O dispositivo passou por testes rigorosos com cães e gatos de diferentes raças e idades, e 
            o feedback tem sido extremamente positivo. Os proprietários que participaram dos testes 
            relataram uma melhor comunicação com seus animais de estimação e uma sensação mais profunda 
            de conexão.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Perspectivas Futuras para o "PetTalk"</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            A startup por trás do "PetTalk" tem grandes planos para o futuro. Eles estão trabalhando 
            em atualizações para o dispositivo que permitirão uma comunicação bidirecional, onde os 
            animais de estimação também possam entender comandos e mensagens dos humanos.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Preocupações Éticas e de Privacidade</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            No entanto, a tecnologia do "PetTalk" também levanta preocupações éticas e de privacidade. 
            Há discussões em andamento sobre o consentimento e a privacidade dos animais de estimação, 
            e sobre como os dados coletados pelo dispositivo serão usados.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Um Novo Capítulo na Relação com Animais de Estimação</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            O "PetTalk" representa um novo capítulo na relação entre humanos e animais de estimação. 
            À medida que a tecnologia evolui para nos aproximar de nossos companheiros peludos, a 
            esperança é que essa inovação melhore a qualidade de vida dos animais de estimação e a 
            compreensão entre espécies, fortalecendo os laços que nos unem.
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