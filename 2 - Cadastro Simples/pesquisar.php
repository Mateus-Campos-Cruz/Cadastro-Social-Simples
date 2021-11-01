<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Simples</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

    <div class="cadastro">    <h1>Dados Cadastrados</h1>    </div>

    
<?php
    
    if(isset($_POST['busca'])){

        $pesquisa = $_POST['busca'];
    }else{
        $pesquisa = '';
    }

    include "conexao.php";

    $sql = "SELECT * FROM pessoa";

    $dados = mysqli_query($con, $sql);
    

    ?>   

    <div id="container1">
            
            <div id="formulario1">                   
                      
                            <table class="table" id="tabela">
                                    <tr>                                        
                                        <th>Nome</th>
                                        <th>CPF</th>
                                        <th>Data de Nascimento</th>
                                        <th>Sexo</th>
                                        <th>Estado Civil</th> 
                                        <th>Renda</th> 
                                        <th>Rua</th> 
                                        <th>Nº</th>   
                                        <th>Complemento</th>                                     
                                        <th>Cidade</th>
                                        <th>UF</th>
                                        
                                    </tr>

                                    <?php

                                        while ($linha = mysqli_fetch_assoc($dados) ){
                                          
                                            $id = $linha['id'];
                                            $nome = $linha['nome'];
                                            $cpf = $linha['cpf'];                                            
                                            $dataNasc = $linha['dataNasc'];
                                            $sexo = $linha['sexo'];
                                            $estadoCivil = $linha['estadoCivil'];
                                            $renda = $linha['renda'];
                                            $rua = $linha['rua'];
                                            $numero = $linha['numero'];
                                            $complemento = $linha['complemento'];
                                            $cidade = $linha['cidade'];
                                            $estado = $linha['estado'];
                                            
                                        
                                        
                            
                                            echo "<tr>                                                                                                     
                                                    <td>$nome</td>
                                                    <td>$cpf</td>  
                                                    <td>$dataNasc</td>
                                                    <td>$sexo</td>
                                                    <td>$estadoCivil</td>
                                                    <td>R$ $renda</td>
                                                    <td>$rua</td>
                                                    <td>$complemento</td>
                                                    <td>$numero</td>
                                                    <td>$cidade</td>
                                                    <td>$estado</td>                                                                                                     

                                                </tr>";
                                            }
                                            ?>

                            </table>
            </div>

            <div id="voltar">        
            <a href="index.php"><div id="voltar2">Voltar</div></a>
            </div>
    </div>            
        
    
    <br><br>
    <footer>&copy Mateus Felipe Campos da Cruz - Todos os direitos reservados</footer> 
    <br><br>


   
</body>
</html>