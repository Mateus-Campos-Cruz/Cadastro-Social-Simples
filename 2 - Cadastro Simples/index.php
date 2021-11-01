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
    
<div id="container">    
    
    <div class="cadastro">    <h1>Cadastro Social</h1>    </div>

    <div class="formulario">

        <div class="header">
            <h3>Preencha com suas informações pessoais</h3>
        </div>

        <form action="salvarDados.php" method="POST">
        <label for="">Nome: </label> 
        <input class="form-control" id="nome" type="text" name="nome" placeholder="Nome" aria-label="default input example" required>

            <div id="part2">
                <div id="cpf">
                <label for="">CPF: </label>
                <input class="form-control"  type="text" data-mask="000.000.000-00" name="cpf" placeholder="CPF" aria-label="default input example" required>
                </div>
                <div id="dataNasc">
                <label for="">Data de Nascimento: </label>
                <input class="form-control" type="date" name="dataNasc" placeholder="DataNasc" aria-label="default input example" required>
                </div>
                <div id="sexo"> 
                <label for="">Sexo: </label> <br>                
                    <select class="form-select" name="sexo" aria-label="Default select example" required>
                        <option selected>--Sexo--</option>
                        <option value="Masculino"> Masculino </option>
                        <option value="Feminino"> Feminino </option>
                    </select>
                </div>
            </div>

                <div id="part3">
                    <div id="estadoCivil">
                    <label for="">Estado Civil: </label>
                    <select class="form-select" name="estadoCivil" aria-label="Default select example" required>
                    <option selected>--Estado civil--</option>
                    <option value="Solteiro(a)">Solteiro(a)</option>
                    <option value="Casado(a)">Casado(a)</option>
                    <option value="Divorciado(a)">Divorciado(a)</option>                    
                    </select>
                    </div>
                    <div id="renda">
                    <label for="">Renda Mensal: </label>
                    <input class="form-control" type="number" name="renda" placeholder="R$" aria-label="default input example" required>
                    </div>
                </div>
            <hr>
                   
                        <label class="end">Endereço</label><br>

                        <div id="parte4">
                        <div id="rua"> 
                        <label for="">Rua:</label>
                        <input class="form-control" name="rua" type="text" placeholder="Rua" aria-label="default input example" required>
                        </div>
                        <div id="numero"> 
                        <label for="">Número:</label>
                        <input class="form-control" name="numero" type="number" placeholder="Número" aria-label="default input example" required>
                        </div>
                        <div id="complemento">
                        <label for="">Complemento:</label>
                        <input class="form-control" type="text" name="complemento" placeholder="Complemento" aria-label="default input example" required>
                        </div>
                        </div>

        <div id="part5">
            <div id="cidade">
                <label for="">Cidade:</label>
                <input class="form-control" type="text" name="cidade" placeholder="Cidade" aria-label="default input example" required>
            </div>

        <div id="estado">
            <label for="">Estado: </label>
            <select class="form-select" name="estado" aria-label="Default select example" required>
            <option selected>--Estado--</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
            <option value="EX">Estrangeiro</option>
            </select>
        </div>

        </div>

        <br>  <br>
        <div id="div-sub"> 
        <button type="submit" id="sub" class="btn btn-outline-success">Enviar</button>

        <div id="pesquisar">        
        <a href="pesquisar.php"><div id="pesquisar2">Pesquisar</div></a>
        </div>
        </div>
        
        <br>
        <br>       

        </form>

        
        

    </div>
    <br><br>
    <footer>&copy Mateus Felipe Campos da Cruz - Todos os direitos reservados</footer> 
    <br><br>
</div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js" ></script>
</body>
</html>