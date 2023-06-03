<?php

class Usuario{//Esta classe aqui servirá para validar o usuario, dei o nome de usuário para ela.
    public function login($email, $senha){#criei uma função pública para o meu login e passei dois parâmetros que foram minhas variáveis email e senha
        

        
        global $pdo;# eu a criei dentro do conexao2.php


        #aqui estou fazendo uma consulta $sql que serve para saber se o usuário existe
        $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";#traduzindo: selecione tudo da tabela usuarios onde o email que está lá seja igual ao email digitado no campo email e a senha que está lá seja a mesma digitada no campo senha
        $sql= $pdo->prepare(($sql));//aqui a gente chama  a var $sql novamente e dentro dela a gente insere a var global pdo e que preparará a variável $sql para
        $sql->bindValue("email", $email);#vincular o email do BD na var email e a senha do BD na var senha
        $sql->bindValue("senha", $senha);
        $sql->execute(); #e agora para executar esta query fazemos $sql->execute();

        if($sql->rowCount() > 0){#depois de fazer todas essas consultas no meu banco de dados acima agora que minha var $sql já tem os dados vinculados do email e senha que eu quero farei o seguinte. Se as linhas/registros do meu banco de dados, que tem a tabela usuarios que está vinculada à minha variável $sql por causa da consulta que fiz acima, for maior que 0, ou seja, se tiver algo na minha tabela. Eu faço ↓
            #A criação de uma variável dado que pegará o único dado que eu quero que é o id
            $dado = $sql->fetch(); #então a minha variável dado aqui está pegando um dado que tem dentro da minha variável sql. Mas que dado é esse? ↓. Quando utilizamos a função fetch() ela cria um array que pega todos os dados da var sql que neste momento possui todos os dados da tabela usuarios do meu DB. Mas eu quero somente o dado principal que é o ID
            
            $_SESSION['id'] = $dado['id']; #o dado que eu quero é o id. Esse código serve para criar uma sessão de login atravéz do id do usuário por isso que minha var dado precisa pegar somente o id

            return true;
        }else{//Agora se não acontecer nada dissi acima retorne falso
            return false;
        }
        
    }
    //Nova função para buscar o usuario que está logado
    public function logged($id){#como parâmetro eu passo o ID do user logado
        
        global $pdo;#chamo a var $pdo para consultar meu banco de dados
        $array = array();// Aqui a gente vai armazenar todos os dados do BD nesta var
        
        $sql = "SELECT nome FROM usuarios WHERE id = :id";//Estamos fazendo a consulta do nome da tabela usuarios onde o ID seja igual ao ID logado. E por quê? Porque vamos mostrar este nome lá no nosso index.php
        $sql = $pdo->prepare($sql);//Vamos acessar nosso PDO e preparar essa consulta que deixei dentro da var $sql
        $sql->bindValue("id",$id); //Agora ligue o valor id do meu DB com a variável $id 
        $sql->execute();#Agora execute esta consulta/ todos os comandos acima

        if($sql->rowCount() > 0){ // Se a minha consulta tiver o número de registros maior que 0 faça:
            $array = $sql->fetch(); #faça a minha array receber os valores da minha var $sql. No caso se eu fosse pegar mais de um valor do meu DB eu teria que utilizar a função fetchAll()
        }
        return $array; #Retorne/mostre os dados da minha $array
        
    }
}
?>