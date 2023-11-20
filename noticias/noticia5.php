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
        <img src="../imageNoticias/parqueEolico.jpg" class="img-fluid rounded-start" style="margin-top: -16px; width: 800px; height: 400px;" alt="Parque Eólico Flutuante Inaugurado para Gerar Energia Limpa no Oceano">
      <div class="col-md-12" style="text-align: justify; max-width: 800px;">
        <div class="card-body">
          <h1 class="card-title">Parque Eólico Flutuante Inaugurado para Gerar Energia Limpa no Oceano</h1><br>
          <h4>Sustentabilidade em Alto Mar: Inauguração de Parque Eólico Flutuante Avança na Geração de Energia Limpa nos Oceanos</h4><br>
          <h6 class="card-title">Por Chat Openai, Repórter de Energia Sustentável - 05/05/2005</h6><br><br>
          <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Um marco histórico na produção de energia limpa foi alcançado com a inauguração do primeiro 
            parque eólico flutuante em alto-mar. Este projeto visionário, conhecido como "EólicoMar," 
            está prestes a revolucionar a forma como o mundo gera energia a partir dos ventos do oceano.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Gerando Energia nos Mares</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">

            O "EólicoMar" é uma maravilha da engenharia sustentável que consiste em uma série de turbinas 
            eólicas flutuantes que são ancoradas no oceano, aproveitando os ventos constantes do mar. 
            Essas turbinas são projetadas para resistir às condições marítimas mais desafiadoras e são 
            capazes de gerar eletricidade limpa de forma contínua.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Solução para Espaços Limitados em Terra</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">

            Uma das maiores vantagens desse parque eólico flutuante é a solução que oferece para a escassez 
            de espaço em terra. Em muitas áreas densamente povoadas, a construção de parques eólicos terrestres 
            é limitada por restrições de espaço. Com "EólicoMar," essa limitação não é mais um obstáculo, já 
            que as turbinas podem ser implantadas em águas profundas, afastadas da costa.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Potencial de Energia Limpa</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">

            Com uma capacidade de gerar eletricidade suficiente para abastecer uma cidade de médio porte, o 
            "EólicoMar" tem o potencial de reduzir significativamente a dependência de combustíveis fósseis 
            e, assim, contribuir para a redução das emissões de carbono.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Impacto Ambiental Positivo</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">

            Além de gerar energia limpa, o projeto "EólicoMar" também possui um impacto ambiental positivo. 
            A instalação flutuante é projetada para minimizar o impacto sobre a vida marinha e ecossistemas 
            costeiros, enquanto contribui para a conservação do ambiente marinho.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Cooperação Internacional</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">

            O projeto é resultado da cooperação internacional entre especialistas em energia sustentável, 
            engenheiros marítimos e governos comprometidos com a transição para fontes de energia limpa. 
            A parceria entre nações demonstra o poder da colaboração global na busca por soluções sustentáveis.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Empregos e Desenvolvimento Econômico</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">

            Além dos benefícios ambientais, o "EólicoMar" também traz oportunidades econômicas para a região 
            em que está localizado. A construção e manutenção do parque eólico flutuante geram empregos locais 
            e estimulam o desenvolvimento econômico.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Um Futuro Sustentável</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">

            O "EólicoMar" representa um passo significativo em direção a um futuro mais sustentável e 
            energeticamente independente. À medida que a tecnologia e as capacidades de parques eólicos 
            flutuantes continuam a avançar, a esperança é que essa inovação se expanda para mais áreas 
            costeiras e oceânicas, ajudando a mitigar as mudanças climáticas e preservar nosso planeta 
            para as futuras gerações.

            Essa inauguração é um exemplo impressionante de como a tecnologia e a engenharia sustentável 
            podem abrir novos horizontes na busca por fontes de energia limpa e renovável.
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