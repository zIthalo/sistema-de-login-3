<?php

#A tradução para isso = $_POST['email']: é o seguinte o $_post pode ser interpretado como algo que pega e recebe dados, vamos lá. O $_POST['email'] é mais ou menos isso: quero receber o que foi digitado no campo email no formulário. E este email digitado dentro das aspas refere-se ao campo email do meu formuláro onde o name é email. só posso colocar dentro das aspas do meu post o que eu digitei como name do meu input no html. Resumindo este comando serve para receber dados digitados em um input de html


//Se o meu email esistir e for diferente de vazio, ou seja, se ele não estiver vazio e existir uma senha e esta senha não estiver vazia
if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){
    #esses requires se chamam importações estou importando esses algorítmos que criei
    require 'conexao2.php'; //chame a conexão dois.php
    require 'Usuario.class.php';#chame a classe usuario que serve para validar o usuário


    //Aqui eu criei esta variável para chamar a classe usuário criada e toda vez que eu chamar essa variável ela irá chamar o objeto Usuario que eu criei
    $u = new Usuario();# a variável u se torna um novo usuario
    
    $email = addslashes($_POST['email']);//Estes add slashes serve para não deixar usuarios mal intencionados manipular os dados
    $senha = addslashes($_POST['senha']);

    //Essa var u que se tornou um objeto está chamando a função login que eu criei dentro da Usuario.class.php, e nisso passei os dois parametros email e senha. quando eu faço isso eu estou executando o método login que criei 
    if($u->login($email, $senha) == true){ //este if está querendo saber se esse meu método, oiu seja, se quem ta tentando se logar existe, ou seja se o email e senha digitados no login forem verdadeiros faça essa outra condição
        
        if(isset($_SESSION['id'])){//Se a sessão referente ao id do usuario existir mande o usuario para página principal
            header("Location: index.php");
            
        }else{
            
            header("Location: login.php"); #se não existir mande para a tela de login
        }

    }else{
        
        header("Location: login.php");#mesma coisa do código de cima e de baixo aqui↓↑
        
    }
    
}else{# se o email e senha digitados forem falsos mandarei retornar para página de login novamente

    header("Location: login.php");
}

?>