<?php
require 'conexao2.php';
//Esse programa, como o nome já diz é para verificar se o usuário continua ou está logado.
if(isset($_SESSION['id']) && !empty($_SESSION['id'])){#Se a sessão existir com o id atual e este id não estiver vazio
    require_once 'Usuario.class.php';#chame a classe usuario. O require once tem o objetivo de só chamar algo apenas uma vez(once) para não ficar repetindo o requerimento.
    $u = new Usuario(); //a var U receberá o objeto Usuario. Instanciando a var $u

    $listLogged = $u->logged($_SESSION['id']); //Aqui eu crio uma var para pegar a sessão do id logado, esta função logged() foi a função que eu criei lá na classe Usuario.class.php. Para adicionar o valor ao parâmetro dessa sessão eu coloquei $_SESSION['id'] para receber o valor do id da sessão

    $nomeUser = $listLogged['nome'];// E pegando o id eu descubro o nome da pessoa que eu quero que apareça lá no meu login
}else{
    header("Location: login.php");#Se nada acima acontecer mande o user para a página login.php
}
?>