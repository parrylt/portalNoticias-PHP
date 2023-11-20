<?php
session_start();
$nome = $_SESSION['nome'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Educação</title>
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
<button type="button" class="btn btn-dark" style="margin-top: 5px"><a href='../newsletter.php' style="color: white">Newsletter</a></button>
<button type="button" class="btn btn-dark" style="margin-top: 5px"><a href='../trabalheConosco.php' style="color: white">Trabalhe Conosco</a></button>

<?php

if (isset($_SESSION['Colunista']) && $_SESSION['Colunista'] == true || isset($_SESSION['Admin']) && $_SESSION['Admin'] == true)
{

  if (isset($_SESSION['Colunista']) && $_SESSION['Colunista'] == true){
    echo "<h5 class='boasVindas' style='color: black; text-align: center; justify-content: center; z-Index: 5; display: flex; align-items: center'>Boas-vindas, <br/>" . $nome ."</h5>";
      echo '<button type="button" class="btn btn-dark" style="margin-top: 5px"><a href="../colunista.php" style="color: white">Área do Colunista</a></button>';
      echo '<button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 5px"><a href="../logout.php" style="color: white">Sair</a></button>';
  }
  elseif (isset($_SESSION['Admin']) && $_SESSION['Admin'] == true){
    echo "<h5 class='boasVindas' style='color: black; text-align: center; justify-content: center; z-Index: 5; display: flex; align-items: center'>Boas-vindas, <br/>" . $nome ."</h5>";
    echo '<button type="button" class="btn btn-dark" style="margin-top: 5px"><a href="../colunista.php" style="color: white">Área do Colunista</a></button>';
    echo '<button type="button" class="btn btn-dark" style="margin-top: 5px"><a href="../admin.php" style="color: white">Área do Administrador</a></button>';
    echo '<button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 5px"><a href="../logout.php" style="color: white">Sair</a></button>';
  }
}
elseif (isset($_SESSION['Colunista']) && $_SESSION['Colunista'] == false || isset($_SESSION['Admin']) && $_SESSION['Admin'] == false){
  
}
else {
  echo "<button type='button' class='btn btn-dark' style='margin-top: 5px'><a href='../login.php' style='color: white'>Login</a></button>";
  echo "<button type='button' class='btn btn-dark' style='margin-top: 5px'><a href='../cadastro.php' style='color: white'>Cadastro</a></button>";
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

  <div class="card mb-3 border border-dark shadow p-3 mb-5 bg-white rounded" style="margin-left: 140px; margin-top: -1200px; max-width: 700px; max-height: 3000px;">
    <div class="row g-0">
        <img src="../imageNoticias/bolsaDeEstudos.jpg" class="img-fluid rounded-start" style="margin-top: -16px; width: 800px; height: 400px;" alt="Iniciativa de Bolsas de Estudo Torna o Ensino Superior Mais Acessível">
      <div class="col-md-12" style="text-align: justify; max-width: 800px;">
        <div class="card-body">
          <h1 class="card-title">Iniciativa de Bolsas de Estudo Torna o Ensino Superior Mais Acessível</h1><br>
          <h4>Transformando Sonhos em Realidade: Programa de Bolsas de Estudo Amplia Horizontes no Ensino Superior</h4><br>
          <h6 class="card-title">Por Chat Openai, Repórter de Educação - 01/01/2001</h6><br><br>
          <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Em uma reviravolta positiva para a educação superior, uma nova iniciativa ousada foi lançada com o 
            objetivo de tornar o ensino superior mais acessível a estudantes de todos os níveis socioeconômicos. 
            A iniciativa "Educação para Todos" visa eliminar barreiras financeiras que muitos enfrentam ao buscar 
            um diploma universitário.

            A iniciativa "Educação para Todos" foi desenvolvida em colaboração entre o governo, instituições de 
            ensino e setor privado, com o objetivo de democratizar o acesso ao ensino superior e reduzir a disparidade 
            educacional.
          </p>
          </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Bolsas de Estudo Generosas</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Uma das pedras angulares desta iniciativa são as bolsas de estudo generosas disponíveis para estudantes 
            de graduação. As bolsas variam em tamanho, dependendo da necessidade financeira do aluno, bem como seu 
            mérito acadêmico. Isso significa que os estudantes talentosos e dedicados, independentemente de sua 
            capacidade de pagamento, têm a oportunidade de conquistar um diploma universitário.
            </p>
            </br></br></br>

            <h4 class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">Ampliação da Educação Online</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            A "Educação para Todos" também abraça a educação online como uma maneira de ampliar o acesso à educação 
            superior. Instituições de ensino em todo o país estão expandindo suas ofertas de cursos online, 
            permitindo que estudantes de qualquer lugar possam acessar conteúdo de alta qualidade sem precisar 
            se mudar para grandes centros urbanos.
            </p>  
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Assistência Financeira Adicional</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Além das bolsas de estudo, a iniciativa oferece assistência financeira adicional, como empréstimos 
            estudantis de baixo custo e programas de pagamento flexíveis. Isso visa aliviar a carga financeira 
            que muitos estudantes carregam após a formatura.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Reação Positiva da Comunidade Acadêmica</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            A comunidade acadêmica tem reagido positivamente à iniciativa "Educação para Todos". Professores, 
            reitores e estudantes destacam o impacto positivo que essa abordagem inovadora terá na sociedade, 
            ao criar oportunidades iguais para todos os cidadãos.
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Desafios a Superar</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Embora a iniciativa seja altamente elogiada, enfrenta desafios significativos, incluindo a alocação 
            de recursos e a adaptação das instituições de ensino. No entanto, os defensores da "Educação para 
            Todos" estão determinados a superar esses obstáculos em busca de um sistema de ensino superior 
            verdadeiramente inclusivo.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Impacto Futuro</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            A iniciativa "Educação para Todos" levanta esperanças de que, no futuro, mais estudantes terão a 
            oportunidade de realizar seus sonhos educacionais, independentemente de sua situação financeira. 
            A expectativa é que isso conduza a uma sociedade mais equitativa e capacitada, preparando os 
            cidadãos para enfrentar os desafios do século 21.

            Esta iniciativa é um exemplo de como a educação pode ser uma ferramenta poderosa para a transformação 
            social, e seu impacto positivo é aguardado com grande expectativa pela comunidade educacional e pela 
            sociedade em geral.
            
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