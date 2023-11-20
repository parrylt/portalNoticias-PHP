<?php
session_start();
$nome = $_SESSION['nome'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Política</title>
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
<button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 5px"><a href='../index.php' style="color: white">Home</a></button>
<button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 5px"><a href='../newsletter.php' style="color: white">Newsletter</a></button>
<button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 5px"><a href='../trabalheConosco.php' style="color: white">Trabalhe Conosco</a></button>


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

  <div class="card mb-3 border border-dark shadow p-3 mb-5 bg-white rounded" style="margin-left: 140px; margin-top: -1200px; max-width: 700px; max-height: 3400px;">
    <div class="row g-0">
        <img src="../imageNoticias/reformaAposentadoria.jpg" class="img-fluid rounded-start" style="margin-top: -16px; width: 800px; height: 400px;" alt="Governo Anuncia Proposta de Reforma na Lei de Aposentadoria">
      <div class="col-md-12" style="text-align: justify; max-width: 800px;">
        <div class="card-body">
          <h1 class="card-title">Governo Anuncia Proposta de Reforma na Lei de Aposentadoria</h1><br>
          <h4>Mudanças no Horizonte: Governo Apresenta Proposta Abrangente para Reforma na Lei de Aposentadoria</h4><br>
          <h6 class="card-title">Por Chat Openai, Repórter de Política - 12/12/2012</h6><br><br>
          <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Em um anúncio surpresa, o governo anunciou uma proposta abrangente de reforma na lei de 
            aposentadoria, com o objetivo de enfrentar desafios econômicos e demográficos e garantir 
            a sustentabilidade do sistema previdenciário. A proposta, que envolve mudanças significativas 
            nas regras de aposentadoria, está destinada a desencadear um intenso debate nacional.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Motivações para a Reforma</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            O governo argumenta que a reforma na lei de aposentadoria é necessária devido a uma série 
            de fatores, incluindo o envelhecimento da população, o aumento dos custos com a previdência 
            social e a necessidade de garantir que o sistema seja sustentável a longo prazo.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Principais Pontos da Proposta</h4></br>
            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">

            A proposta inclui os seguintes pontos-chave:</br></br>

            - Idade Mínima de Aposentadoria: A idade mínima para a aposentadoria será aumentada 
            progressivamente ao longo dos anos, com o objetivo de refletir a expectativa de vida 
            crescente da população.

            - Tempo de Contribuição: Serão necessários mais anos de contribuição para se qualificar 
            para uma aposentadoria integral.

            - Regras de Transição: Serão estabelecidas regras de transição para suavizar o impacto das 
            mudanças nas regras para aqueles que estão mais próximos de se aposentar.

            - Aposentadoria Especial: As regras para aposentadoria especial serão revisadas, e a elegibilidade 
            será restrita a ocupações de alto risco.

            - Benefícios e Pensões: A reforma também abordará questões relacionadas a benefícios e pensões, 
            com possíveis ajustes nos valores e nas regras de concessão.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Reações Divergentes</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            A proposta de reforma gerou reações divergentes na sociedade. Defensores argumentam que as 
            mudanças são necessárias para garantir a sustentabilidade do sistema previdenciário e a 
            estabilidade econômica a longo prazo. No entanto, críticos alegam que as mudanças podem ser 
            prejudiciais para os trabalhadores, especialmente aqueles em ocupações de risco e trabalhadores 
            de baixa renda.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Debate Político e Consulta Pública</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            A proposta de reforma na lei de aposentadoria está gerando um intenso debate político. Partidos 
            de oposição expressaram preocupações e prometem analisar a proposta detalhadamente. O governo 
            está disposto a realizar uma consulta pública e ouvir a opinião dos cidadãos antes de implementar 
            as mudanças.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Desafios à Frente</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            À medida que a reforma na lei de aposentadoria avança, enfrentará desafios consideráveis, 
            incluindo resistência de sindicatos e grupos de interesse. O governo está ciente de que a 
            proposta exigirá negociação e diálogo para alcançar um consenso nacional.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;"> O Futuro da Previdência Social</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            A reforma na lei de aposentadoria representa uma parte fundamental da discussão sobre o futuro 
            da previdência social. O resultado desse processo terá um impacto significativo nas vidas dos 
            trabalhadores e na economia do país. A sociedade agora se prepara para um período de debates 
            intensos e decisões cruciais em relação à reforma na previdência social.
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