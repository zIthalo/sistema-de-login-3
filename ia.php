<?php
require 'verifica.php';
if(isset($_SESSION['id']) && !empty($_SESSION['id'])):// Se a sessão com o id existir e ela não estiver vazia

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Como surgiu o mascote do android?</title>

    <link rel="stylesheet" href="style/swiper-bundle.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">


    <link rel="stylesheet" href="style/ia.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary colorNav">
        <div class="container-fluid">
            <a class="navbar-brand linkNav" href="#">8-BITS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link linkNav" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle linkNav" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Curiosidades
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.php">Android</a></li>
                            <li><a class="dropdown-item" href="gpt.php">ChatGPT</a></li>
                            <li>
                            <li><a href="elon-musk.php" class="dropdown-item" target="_self">Elon Musk</a></li>
                            <li><a href="mark.php" class="dropdown-item" target="_self">Mark Zuckerberg</a></li>
                        </ul>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle linkNav" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Cadastro
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="form.php">Cadastre-se</a></li>
                            <li><a class="dropdown-item" href="login.php">Login</a></li>
                            <li>
                        </ul>
                </ul>
                <div class="form-inline my-2 my-lg-0">
                    <label class="mr-5" for="">
                        <?php echo "Olá, ".$nomeUser."!    ";#esse código foi criado para mostrar o nome do usuário que estiver logado no sistema aqui na barra de menu do meu site?></label>
                    <a class="btn btn-danger" href="logout.php">SAIR</a>
                </div>
            </div>
        </div>
    </nav>
    <main>
        <article>
            <!--Shift + tab para voltar a indentação-->
            <h1>O que é a Inteligência Artificial?</h1>

            <p>A Inteligência Artificial <strong>(IA)</strong> é um campo da ciência cujo propósito é estudar,
                desenvolver e empregar máquinas para realizarem atividades humanas de maneira autônoma. </p>

            <p>A <strong>IA</strong> envolve o agrupamento de várias tecnologias, como redes neurais artificiais,
                algoritmos, sistemas de aprendizado, entre outros que conseguem simular capacidades humanas ligadas ao
                aprendizado, solução de problemas, compreensão da linguagem e tomada de decisões.</p>

            <p>Também está ligada à robótica, ao Machine Learning (Aprendizagem de Máquina), ao reconhecimento de voz e
                de visão, entre outras tecnologias.</p>

            <p>Com maior desenvolvimento a partir da década de 1950, a inteligência artificial já faz parte da vida
                cotidiana das pessoas por meio dos assistentes de voz, dos mecanismos de pesquisa, dos carros autônomos
                e das redes sociais.</p>

            <p>Apesar de trazerem inúmeros benefícios e avanços importantes em diversas áreas, muito se debate a
                respeito dos limites éticos da inteligência artificial e do papel que elas desempenham na nossa
                sociedade atual.</p>



            <h2>Como funciona a inteligência artificial?
            </h2>

            <p>O funcionamento da inteligência artificial, de maneira simplificada, acontece por meio da coleta e da
                combinação de um grande volume de dados seguido da identificação de determinados padrões nesse conjunto
                de informações. Com esse processo, que geralmente se dá mediante a utilização de algoritmos
                pré-programados, o software consegue tomar decisões e realizar tarefas de maneira autônoma.
            </p>

            <picture class="ia">
                <source class="ia" media="(max-width: 668px)" srcset="img/ia-pq.jpg" type="image/jpg">
                <img src="img/ia.jpg" alt="imagem inteligência artificial">
            </picture>



            <h2 class="titulo2">Inteligência Artificial no Dia a Dia
            </h2>

            <p>A evolução tecnológica vivenciada pela humanidade nas últimas décadas proporcionou a incorporação cada
                vez maior da inteligência artificial na vida cotidiana. Veja, a seguir, alguns exemplos de como
                diferentes modelos de IA se fazem presentes.</p>


            <p><strong>Assistentes de voz:</strong> presentes em celulares e dispositivos como caixas de som
                inteligentes (smart speakers), os assistentes são um modelo de IA que reconhece e executa comandos
                feitos por meio da voz, como realizar ligações, programar alarmes, dar informações, tocar música e fazer
                pesquisas online. Os mais famosos assistentes de voz são o Google Assistente (integrado ao sistema
                Android); Siri, da Apple; e Alexa, da Amazon.</p>

            <p><strong>Reconhecimento facial:</strong> empregada na confirmação da identidade de uma pessoa ao acessar
                seus dispositivos pessoais, como smartphones, ou ainda em aplicativos financeiros, como os bancos
                virtuais. Mais recentemente, o reconhecimento facial tem sido aperfeiçoado para a sua adoção ampla em
                sistemas de segurança pública.</p>

            <p><strong>Redes sociais:</strong> os conteúdos das redes sociais que utilizamos todos os dias, como
                Instagram, Twitter e Facebook, não são apresentados da mesma maneira para todos os usuários. Isso porque
                existe um algoritmo que analisa os padrões da atividade dos indivíduos e personaliza qual tipo de
                postagem aparecerá para cada um, de acordo com os seus interesses.</p>




            <div class="video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/UhA_ZgI-otM"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>



            <p>Então é isso! Espero que você tenha gostado do nosso artigo com essa curiosidade sobre a inteligência
                artificial.</p>
            <p><strong>Este site foi apresentado aqui:</strong></p>
            <p class="map"><iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.405129022287!2d-34.9107968856167!3d-7.8525986943421175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab14d50f29c135%3A0xb7c10c823a37123b!2sEscola%20T%C3%A9cnica%20Estadual%20Jurandir%20Bezerra%20Lins!5e0!3m2!1spt-BR!2sbr!4v1669729072171!5m2!1spt-BR!2sbr"
                    width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe> </p>
        </article>
    </main>

    <footer>


        <!--O que eu mais errei aqui foi escrever uma classe de um jeito em html e de outro em css tipo: slide/slider-->
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="./img/ft1.png" alt="ft1" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">

                            <h2 class="name">Ithalo Willian</h2>

                            <p class="description">the Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia,
                                deleniti quas. Accusamus debitis quia iusto assumenda mollitia laudantium qui totam aut,
                                magni at iste temporibus illo! Commodi delectus natus qui?</p>

                            <button class="button"><a href="#">View More</a></button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="./img/ft2.jpg" alt="ft2" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">

                            <h2 class="name">Alysson Roberto</h2>

                            <p class="description">the Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia,
                                deleniti quas. Accusamus debitis quia iusto assumenda mollitia laudantium qui totam aut,
                                magni at iste temporibus illo! Commodi delectus natus qui?</p>

                            <button class="button"><a href="#">View More</a></button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="./img/ft3.png" alt="ft3" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">

                            <h2 class="name">Kaline Nascimento</h2>

                            <p class="description">the Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia,
                                deleniti quas. Accusamus debitis quia iusto assumenda mollitia laudantium qui totam aut,
                                magni at iste temporibus illo! Commodi delectus natus qui?</p>

                            <button class="button"><a href="#">View More</a></button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="./img/ft4.png" alt="ft4" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">

                            <h2 class="name">Matheus Henrique</h2>

                            <p class="description">the Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia,
                                deleniti quas. Accusamus debitis quia iusto assumenda mollitia laudantium qui totam aut,
                                magni at iste temporibus illo! Commodi delectus natus qui?</p>

                            <button class="button"><a href="#">View More</a></button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="./img/ft5.png" alt="ft5" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">

                            <h2 class="name">Nicolas Lima</h2>

                            <p class="description">the Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia,
                                deleniti quas. Accusamus debitis quia iusto assumenda mollitia laudantium qui totam aut,
                                magni at iste temporibus illo! Commodi delectus natus qui?</p>

                            <button class="button"><a href="#">View More</a></button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="./img/ft6.png" alt="ft6" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">

                            <h2 class="name">Tarciano Cruz</h2>

                            <p class="description">the Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia,
                                deleniti quas. Accusamus debitis quia iusto assumenda mollitia laudantium qui totam aut,
                                magni at iste temporibus illo! Commodi delectus natus qui?</p>

                            <button class="button"><a href="#">View More</a></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <!-- <div class="swiper-scrollbar"></div> -->
            <div class="swiper-pagination"></div>
        </div>


    </footer>
    <script src="./script/swiper-bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    <script src="script/app.js"></script>
</body>

</html>
<?php
else: header("Location: login.php"); endif; //se for diferente de tudo lá em cima mande de volta para o login.php
?>