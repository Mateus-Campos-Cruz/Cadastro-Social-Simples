<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php    
        
        include "conexao.php";

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $dataNasc = $_POST['dataNasc'];
        $sexo = $_POST['sexo'];
        $estadoCivil = $_POST['estadoCivil'];
        $renda = $_POST['renda'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];
        $complemento = $_POST['complemento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];

        $sql = "INSERT INTO `pessoa` VALUES (null,'$nome','$cpf',' $dataNasc', '$sexo','$estadoCivil', '$renda','$rua','$numero','$complemento','$cidade','$estado')";
           
        mysqli_query($con, $sql);  

        if(! mysqli_connect_error()){
            if (isset($_SERVER["HTTP_REFERER"])) {
                header("Location: " . $_SERVER["HTTP_REFERER"]);
            }    
        }else{
            echo "Erro!";
        }       



        ?>
</body>
</html>