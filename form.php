<?php
    //esse if serve para verificar se minhas infos foram submitadas para o meu DB
    if(isset($_POST['submit'])){ //is set* se existir a variável submit faça
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Tel: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('Sexo: ' . $_POST['genero']);
        // print_r('<br>');
        // print_r('Nascimento: ' . $_POST['dataNasc']);
        // print_r('<br>');
        // print_r('Cidade: ' . $_POST['cidade']);
        // print_r('<br>');
        // print_r('Estado: ' . $_POST['estado']);
        // print_r('<br>');
        // print_r('Endereço: ' . $_POST['endereco']);
        //Cada um destes prints r serve para mostrar os conteúdos que eu inseri em cada variável de acordo com meu formulário. Para ficar mais claro é assim: escreva(postando['o conteúdo inserido no campo name em html'])
        include_once ('config.php'); //aqui eu incluo minhas configs do php
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $dataNasc = $_POST['datanasc'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];
        $senha = $_POST['senha'];
        //  //A diferença do código acima para este aqui é que neste trecho eu tô pegando as informações de cada name em html através do $_POST['nome'], por exemplo e colocando-as dentro de uma variável ali acima tendeu?

        //Agora vou fazer minhas queries ↓↓
        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, senha, email, telefone, sexo, datanasc, cidade, estado, endereco) VALUES ('{$nome}','{$senha}', '{$email}', '{$telefone}','{$sexo}','{$dataNasc}','{$cidade}','{$estado}','{$endereco}')");// antes, nesse código, eu tinha feito os nomes das variáveis sem as aspas e as chaves. Deu errado. Veja o config.php para saber outros erros
        header('Location: login.php');
    } 
    //nessa query eu chamo a minha conexão que faz contato com minha db (se quser saber mais vá no código conexao.php) agora eu insiro na minha tabela usuarios, nos campos nome, email,telefone,sexo,data_nasc,cidade,estado,endereco, os valores das minhas variáveis $nome, $email, $telefone,$sexo,$dataNasc,$cidade,$estado,$endereco
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form-16</title>
    <style>
    :root {

        --cor0: #c5ebd6;
        --cor1: #83e1ad;
        --cor2: #3ddc84;
        --cor3: #2fa866;
        --cor4: #1a5c37;
        --cor5: #063d1e;

        --fonte-padrao: Arial, Verdana, Helvetica, sans-serif;
        --fonte-destaque: 'Bebas Neue', cursive;
        --fonte-android: 'Android', cursive;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(to right, var(--cor4), var(--cor5));
    }

    .box {
        color: white;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 0, 0, 0.6);
        padding: 15px;
        border-radius: 15px;
        max-width: 360px;
        min-width: 300px;
    }

    fieldset {
        border: 3px solid #00FF88;
    }

    legend {
        border: 1px solid #00FF88;
        padding: 10px;
        text-align: center;
        background-color: #00FF88;
        border-radius: 8px;
        color: black;
    }

    .inputBox {
        position: relative;
    }

    .inputUser {
        background: none;
        border: none;
        border-bottom: 1px solid white;
        outline: none;
        color: white;
        font-size: 15px;
        width: 100%;
        letter-spacing: 2px;
    }

    .labelInput {
        position: absolute;
        top: 0px;
        left: 0px;
        pointer-events: none;
        transition: .5s;
    }

    .inputUser:focus~.labelInput,
    .inputUser:valid~.labelInput {
        top: -20px;
        font-size: 12px;
        color: #00FF88;
    }

    #datanasc {
        border: none;
        padding: 8px;
        border-radius: 10px;
        outline: none;
        font-size: 15px;
    }

    #submit {
        background-color: #00FF88;
        color: black;
        font-weight: bold;
        width: 100%;
        border: none;
        padding: 15px;
        font-size: 15px;
        cursor: pointer;
        border-radius: 10px;
        transition: .3s;
    }

    #submit:hover {
        background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
        color: white;
    }
    </style>
</head>

<body>
    <div class="box">
        <form action="form.php" method="POST">
            <fieldset>
                <legend><b>Cadastre-se</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="datanasc"><b>Data de Nascimento:</b></label>
                <input type="date" name="datanasc" id="datanasc" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit" value="Enviar">

            </fieldset>
        </form>

    </div>
</body>

</html>