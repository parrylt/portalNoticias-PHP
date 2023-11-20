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
      echo '<button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 5px"><a href="../logout.php" style="color: white">Sair</a></button>';
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

  <div class="card mb-3 border border-dark shadow p-3 mb-5 bg-white rounded" style="margin-left: 140px; margin-top: -1200px; max-width: 700px; max-height: 3400px;">
    <div class="row g-0">
        <img src="../imageNoticias/novelaPaixaoNoSertao.jpg" class="img-fluid rounded-start" style="margin-top: -16px; width: 800px; height: 400px;" alt="Novela 'Paixão no Sertão' Bate Recorde de Audiência com Cenas de Ação Eletrizantes">
      <div class="col-md-12" style="text-align: justify; max-width: 800px;">
        <div class="card-body">
          <h1 class="card-title">Novela 'Paixão no Sertão' Bate Recorde de Audiência com Cenas de Ação Eletrizantes</h1><br>
          <h4>Emoções à Flor da Pele: 'Paixão no Sertão' Cativa Telespectadores com Sequências de Ação que Quebram Recordes de Audiência</h4><br>
          <h6 class="card-title">Por Chat Openai, Repórter de Entretenimento - 08/08/2008</h6><br><br>
          <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Uma reviravolta emocionante está agitando o mundo da televisão brasileira, à medida que a novela 
            "Paixão no Sertão" se torna um fenômeno de audiência, batendo recordes com suas cenas de ação 
            eletrizantes. A trama, que tem conquistado o coração do público com seus personagens cativantes e 
            enredos envolventes, agora está sendo aclamada por suas sequências repletas de adrenalina.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Enredo e Personagens Inesquecíveis</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            "Paixão no Sertão" narra a história de amor e coragem em meio às paisagens áridas do sertão nordestino. 
            Os telespectadores se envolveram profundamente com os personagens e suas jornadas, o que tem sido um 
            dos principais motivos do sucesso da novela.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Cenas de Ação Espetaculares</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            O que torna "Paixão no Sertão" ainda mais marcante são suas cenas de ação espetaculares. A produção da 
            novela investiu em sequências cinematográficas de alta qualidade que impressionam o público com 
            perseguições a cavalo, tiroteios emocionantes e confrontos dramáticos.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Recorde de Audiência</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            A combinação de uma trama emocionante com sequências de ação de tirar o fôlego cativou o público brasileiro. 
            A novela bateu recordes de audiência, atraindo telespectadores de todas as idades e de todas as regiões do país.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Elenco Talentoso</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            O elenco talentoso, composto por atores experientes e jovens promessas, desempenha um papel fundamental no 
            sucesso da novela. A química entre os protagonistas e a interpretação convincente dos vilões criam uma 
            experiência visual rica e envolvente.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Impacto nas Redes Sociais</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            A novela também está causando sensação nas redes sociais, com fãs compartilhando entusiasticamente suas 
            cenas favoritas, teorias sobre o enredo e discussões sobre o destino dos personagens. O engajamento nas 
            redes sociais tem ajudado a criar uma comunidade dedicada de telespectadores.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Um Novo Paradigma na Teledramaturgia Brasileira</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            A novela "Paixão no Sertão" representa um novo paradigma na teledramaturgia brasileira, combinando uma 
            história de amor com elementos de ação que atraem tanto os amantes do romance quanto os fãs de aventura. 
            Essa abordagem inovadora tem mostrado que a televisão brasileira é capaz de competir com produções 
            internacionais em termos de qualidade e entretenimento.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Expectativas para o Desfecho</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Com o aumento contínuo da audiência, as expectativas para o desfecho da novela estão altas. Os fãs 
            esperam reviravoltas emocionantes e desfechos surpreendentes para os personagens que conquistaram 
            seus corações.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Um Sucesso Inesquecível</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            "Paixão no Sertão" é um sucesso inesquecível na televisão brasileira, com uma combinação única de 
            romance, ação e atuações cativantes. À medida que a trama se desenrola, o público está ansioso para 
            descobrir como os destinos dos personagens se entrelaçarão no desfecho final desta novela épica.
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