<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["arquivoUpload"]["name"]);
$uploadOk = 1;
$arquivoTipo = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $host  = "localhost:3306";
    $user  = "root";
    $pass  = "";
    $base  = "portal_noticias";

    $con = mysqli_connect ($host, $user, $pass, $base);

    $nome = $_POST['nome'];
    $email = $_POST['email'];


if ($_FILES["arquivoUpload"]["size"] > 500000)
{
    $uploadOk = 0;
    header("Location: trabalheConosco.php?erro=2");
    exit;  
}

if (file_exists($target_file))
{
  $uploadOk = 0;
  header("Location: trabalheConosco.php?erro=3");
  exit;  
}


if($arquivoTipo != "pdf" && $arquivoTipo != "docx" && $arquivoTipo != "jpeg" && $arquivoTipo != "jpg" && $arquivoTipo != "png" )
{
  $uploadOk = 0;
  header("Location: trabalheConosco.php?erro=4");
  exit;  
}


if ($uploadOk == 0)
{
    header("Location: trabalheConosco.php?erro=5");
    exit; 
}
else
{
  if (move_uploaded_file($_FILES["arquivoUpload"]["tmp_name"], $target_file)) 
  {
    $caminho = 'C:/xampp/htdocs/ '. $target_file;

    $emailExistente = "SELECT tc_id FROM trabalhe_conosco WHERE tc_email = '$email'";
    $result = $con->query($emailExistente);

    if ($result->num_rows > 0)
        {
            header("Location: trabalheConosco.php?erro=1");
            exit;  
        }
        else
        {
            $cadastro = $con->prepare("INSERT INTO trabalhe_conosco (tc_nome, tc_email, arquivo) VALUES (?, ?, ?)");
            $cadastro->bind_param("sss",$nome,$email,$caminho);

            if ($cadastro->execute())
            {
                header("Location: trabalheConosco.php?sucesso=1");
                exit; 
            } else {
                header("Location: trabalheConosco.php?erro=6");
                exit; 
            }    
        }
    
  }
  else
  {
    header("Location: trabalheConosco.php?erro=6");
    exit; 
  }
}
$con->close();
?>