<?php
session_start();
$nome = $_SESSION['nome'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Tecnologia e Mobilidade</title>
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
    echo '<button type="button" class="btn btn-dark" style="margin-top: 5px; margin-left: 5px"><a href="../admin.php" style="color: white">Área do Administrador</a></button>';
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
        <img src="../imageNoticias/carro.jpg" class="img-fluid rounded-start" style="margin-top: -16px; width: 800px; height: 400px;" alt="Carros Autônomos Ganham Popularidade com Novos Recursos de Segurança">
      <div class="col-md-12" style="text-align: justify; max-width: 800px;">
        <div class="card-body">
          <h1 class="card-title">Carros Autônomos Ganham Popularidade com Novos Recursos de Segurança</h1><br>
          <h4>Rumo à Condução Segura: Carros Autônomos Atraem Atenção com Inovações Significativas em Segurança</h4><br>
          <h6 class="card-title">Por Chat Openai, Repórter de Tecnologia e Mobilidade - 07/07/2007</h6><br><br>
          <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            À medida que avançamos no século 21, uma revolução silenciosa está ocorrendo nas estradas de 
            todo o mundo. Os carros autônomos, uma vez considerados uma promessa futurista, estão ganhando 
            popularidade graças a novos recursos de segurança que estão transformando a indústria automobilística.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Novos Avanços em Tecnologia de Condução Autônoma</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Carros autônomos, também conhecidos como veículos autônomos, agora estão equipados com sistemas de 
            segurança de última geração que os tornam mais seguros do que nunca. Os avanços incluem:</br></br>

            - Sensores de Alta Precisão: Os veículos autônomos são equipados com sensores de alta precisão, como 
            câmeras, radares e lidar, que permitem que eles detectem objetos e condições nas estradas com uma 
            precisão incomparável.

            - Sistemas de Monitoramento Contínuo: Os sistemas de monitoramento constantemente avaliam o ambiente 
            ao redor do veículo e tomam decisões em tempo real, como ajustar a velocidade, mudar de faixa ou 
            evitar obstáculos.

            - Comunicação Veículo a Veículo (V2V): Os carros autônomos podem se comunicar entre si, compartilhando 
            informações sobre velocidade, direção e condições das estradas, o que ajuda a evitar colisões.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Resultados Promissores em Segurança Rodoviária</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Os novos recursos de segurança têm produzido resultados promissores em termos de segurança rodoviária. 
            Acidentes relacionados à direção humana, como distração do motorista e excesso de velocidade, têm 
            diminuído significativamente com a introdução de carros autônomos. Essa tendência está incentivando uma 
            mudança na mentalidade em relação à tecnologia de condução autônoma.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Aceitação Crescente do Público</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            À medida que as preocupações iniciais sobre a segurança de carros autônomos diminuem, a aceitação do 
            público está crescendo. Muitos motoristas estão percebendo os benefícios de segurança e conveniência 
            que esses veículos podem oferecer.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Acessibilidade e Disponibilidade</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Carros autônomos também estão se tornando mais acessíveis e disponíveis para uma variedade de orçamentos. 
            A concorrência no mercado está estimulando a inovação e a redução de custos, tornando os veículos autônomos 
            uma opção realista para um número crescente de pessoas.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Impacto na Mobilidade Sustentável</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Além dos benefícios de segurança, os carros autônomos também têm o potencial de melhorar a mobilidade 
            sustentável. A otimização do tráfego, o uso eficiente de combustível e a redução das emissões de carbono 
            são vantagens adicionais associadas a essa tecnologia.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">Desafios a Serem Superados</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Embora os avanços sejam empolgantes, existem desafios a serem superados, como questões regulatórias, 
            problemas de responsabilidade e a necessidade de treinamento adequado para motoristas e equipes de manutenção.
            </p>
            </br></br></br>

            <h4 style="text-align: justify; max-width: 500px; margin-left: 60px;">O Futuro dos Carros Autônomos</h4></br>

            <p class="card-text" style="text-align: justify; max-width: 500px; margin-left: 60px;">
            Os carros autônomos estão rapidamente se tornando uma realidade, com um futuro promissor. Com a crescente 
            popularidade e os avanços em segurança, é provável que vejamos mais desses veículos nas estradas, 
            desempenhando um papel fundamental na transformação da mobilidade e na redução de acidentes rodoviários.

            Essa mudança para carros autônomos está definida para redefinir a maneira como nos movemos e, com o tempo, 
            espera-se que leve a um mundo com menos acidentes e uma maior ênfase na sustentabilidade e eficiência no 
            transporte.
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