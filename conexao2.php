<?php

session_start();#como estamos trabalhando com sessões devemos iniciar a sessão também aqui na nossa conexao2.php usando este comando ←


//Em toda conexão php você terá que iniciar com variáveis que recebam o host, o user, a senha, e o nome do BD
$localhost = "localhost";
$user = "root";
$pass = "Mor190916.";
$banco = "loja";

#por que usar o pdo para conexões? Porque ele serve para conectar meu sistema a vários outros. Lá na frente eu posso conectar minha biblioteca com vários outros softwares

//Aqui eu crio uma variável e um objeto chamado PDO(tem que ser em maiúsculas), depos disso eu digito o mysql:dbname= como pode-se ver vou digitar logo após o nome do meu banco de dados, mas como já salvei em uma variável eu digito o nome da var, neste caso, .$banco. os pontos são para concatenar; depois eu digito o host= e depois dele, usando um ponto para concatenar eu coloco as variáves separadas por vírgula contendo o local host, usuario do sistema de banco de dados e a senha do sgbd.
$pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost,$user,$pass);


//isso aqui é uma função do PDO, são padões da conexão com banco de dados, são obrigatórias e você tem que colocar em toda conexão com BD, que use PDO
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

#esse comando abaixo serve para saber se minha conexão com o BD funcionou, é uma consulta/query.
// $sql = $pdo->query("SELECT * FROM usuarios");
// $sql -> execute(); #aqui eu tô fazendo a execução do comando acima na minha variável

// echo $sql->rowCount(); # e aqui em baixo é o mesmo comando que eu utilizei na conexão 1 para mostrar a quantidade de registros ou linhas que eu tenho no meu DB

global $pdo;#Esta variável $pdo precisa ser global para que eu use em qualquer parte do meu sistema php,  acabei chamando ela lá na minha classe/objeto Usuario quando eu chamo ela ela faz todos os comandos que tem aqui onde ela estiver.

 try { #este trycatch é o seguinte se na minha conexão não houver nenhum erro ele executará esta linha abaixo
    $pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 } catch (PDOException $e) { //agora se der erro aí ele fará o seguinte ele vai chamar PDOExeption que é um método do pdoPhp, que indicará um erro, nisso o erro será salvo na minha var $e
     echo "ERRO: ".$e->getMessage(); #aqui abaixo a minha variável e irá receber a função getMessage() que dirá qual foi o erro encontrado na minha variavel e
     exit; 
 }
?>