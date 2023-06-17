<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/login.css">
    <title>Login</title>
</head>

<body>

    <div class="main-login">

        <div class="left-login">

            <h1>Faça login<br></h1>
            <!-- <a href="index.php">Voltar</a> -->

            <img src="bjj.svg" class="left-login-image" alt="bjj animação">

        </div>

        <div class="right-login">

            <div class="card-login">

                <h1>LOGIN</h1>

                <!--As actions de um form são para onde os dados de um form irão neste caso aqui eu estou mandando esses dados para uma configuração que batizei de logar.php. O método POST serve para mandar as informações de forma oculta para o meu DB-->
                <form class="form" action="logar.php" method="post">
                    <div class="textfield">
                        <label for="email">Email</label>
                        <input type="text" name="email" placeholder="Email"></input>
                    </div>

                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Senha"></input>
                    </div>

                    <button class="btn-login">Login</button>
                    <p><a href="formulario.php" target="_self" class="cadastro">Não possui conta? Cadastre-se</a></p>
                </form>

            </div>

        </div>

    </div>

</body>


</html>