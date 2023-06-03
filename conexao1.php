<?php
//Em toda conexão php você terá que iniciar com variáveis que recebam o host, o user, a senha, e o nome do BD
$localhost = "localhost";
$user = "root";
$pass = "Mor190916.";
$banco = "loja";
    
    #depois você criará uma variável para conectar o php com o mysql. O nome da variável é conecta e a conexão sempre será mysqli_connect(dentro daqui vão as variáveis que você criou rebebendo o host, o user, a senha, e o nome do BD)
    $conecta = mysqli_connect($localhost,$user,$pass,$banco); #assim está feita a conexão.
    
    #Aqui é uma consulta SQL. Como fazer? você cria uma variável depois digita || mysqli_query(usa a variável de conexão, põe a vígula e seleciona tudo o que estiver dentro da tabela usuarios, ou seja, todos os dados de uma tabela do seu banco de dados) [essa explicação ao lado é a tradução do código abaixo antes do echo]
    $sql = mysqli_query($conecta, "SELECT * FROM usuarios");
    
    #Este echo serve para mostrar quantos registros eu tenho dentro do meu banco de dados, registros são cada id cadastrado no meu DB. Lembrando que eu só falei id porque a cada registro de uma pessoa com nome, email, senha, telefone, etc cria-se um novo id para aquela pessoa ↓
    echo "Quantidade de registros no DB: ".mysqli_num_rows($sql);

?>