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


    <link rel="stylesheet" href="style/style.css">
</head>

<body>

    <!-- <div id="log">

        <p id="l1"><a href="login.php" class="btn-log"><strong>Entre</strong></a></p>

        <p id="l2"><a href="formulario.php" class="btn-log"><strong>Cadastre-se</strong></a></p>

    </div> -->
    <!-- <header id="cabeçalho">
        <h1>Curiosidades de tecnologia</h1>
        <p>Tudo aquilo que você sempre quis saber sobre o mundo Tech em um único lugar</p>
    </header> -->

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
                            <li><a class="dropdown-item" href="ia.php" target="_self">Inteligência Artificial</a></li>
                            <li>
                            <li><a href="gpt.php" class="dropdown-item" target="_self">ChatGPT</a></li>
                            <li><a href="elon-musk.php" class="dropdown-item" target="_self">Elon Musk</a></li>
                            <li><a href="mark.php" class="dropdown-item" target="_self">Mark Zuckerberg</a></li>
                        </ul>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle linkNav" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Cadastro
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="formulario.php">Cadastre-se</a></li>
                            <li><a class="dropdown-item" href="login.php">Login</a></li>
                            <li>
                        </ul>
                </ul>
                <!-- <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->

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
            <h1>História do Mascote do Android</h1>

            <p>Provavelmente você sabe que o sistema operacional <strong>Android</strong>, mantido pelo
                <strong>Google</strong> é um dos mais utilizados para dispositivos móveis em todo o mundo. Mas tavez
                você não saiba que o seu simpático mascote tem um nome e uma história muito curiosa? Pois acompanhe esse
                artigo para aprender muita coisa sobre esse robozinho.
            </p>

            <h2>A primeira versão</h2>

            <p>A primeira tentativa de criar um mascote surgiu em 2007 e veio de um desenvolvedor chamado <a
                    class="externo"
                    href="https://androidcommunity.com/dan-morrill-shows-us-the-android-mascot-that-almost-was-20130103/"
                    target="_blank" rel="external">Dan Morrill</a>. Ele conta que abriu o <a class="externo"
                    href="https://inkscape.org/pt-br/" target="_blank">Inkscape</a> (software livre para vetorização de
                imagens) e criou sua própria versão de robô. O objetivo era apenas personificar o sistema apenas para a
                a sua equipe, não existia nenhuma solicitação da empresa para a criação de um mascote.</p>

            <picture>
                <source media="(max-width: 668px)" srcset="imagens/dan-droids-pq.png" type="image/png">
                <img src="img/dan-droids.png" alt="primeiro mascote do android">
            </picture>

            <p>Essa primeira versão bizarra até foi batizada em homenagem ao seu criador: seriam os
                <strong>Dandroids</strong>.
            </p>

            <h2>Surge um novo mascote</h2>

            <p>A ideia de ter um mascote foi amadurecendo e a missão foi passada para uma profissional da área. A
                ilustradora Russa <a class="externo" href="https://www.irinablok.com/android" target="_blank">Irina
                    Blok</a>, também funcionária do Google, ficou com a missão de representar o pequeno robô de uma
                maneira mais agradável.</p>

            <picture>
                <source class="irn" media="(max-width: 668px)" srcset="imagens/irina-blok-pq.jpg" type="image/jpg">
                <img class="irn" src="img/irina-blok.jpg" alt="irina blok criadora do Bugdroid">
            </picture>

            <p>A ideia principal da Irina era representar tudo graficamente com poucos traços e de forma mais chapada. O
                desenho também deveria gerar identificação rápida com quem o olha. Surgiu então o
                <strong>Bugdroid</strong>, o novo mascote do Android.
            </p>

            <img class="bug" src="img/bugdroid.png" alt="bugdroid">

            <p>A principal inspiração para os traços do novo <strong>Bugdroid</strong> veio daqueles bonequinhos que
                ilustram portas de banheiro para indicar o gênero de cada porta. Conta a lenda que a artista estava
                criando em sua mesa no escritório do <strong>Google</strong> e olhou para o lado dos banheiros e a
                identificação foi imediata: simples, limpo, objetivo.</p>

            <div class="video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/l2UDgpLz20M"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>

            <aside>
                <h3>Quer aprender mais?</h3>

                <p>Outro assunto curioso em relação ao <strong>Android</strong> é que cada versão sempre foi nomeada em
                    homenagem a um doce, em ordem alfabética a partir da versão 1.5 até a 9.0.</p>

                <ul id="lista-android">
                    <li class="item-droid">
                        1.5 - <abbr title="Bolo de bacia">Cupcake</abbr>
                    </li>
                    <li class="item-droid">
                        1.6 - <abbr title="Rosquinha">Donut</abbr>
                    </li>
                    <li class="item-droid">
                        3.0 - <abbr title="Bomba">Eclair</abbr>
                    </li>
                    <li class="item-droid">
                        2.2 - <abbr title="Iogurte congelado">Froyo</abbr>
                    </li>
                    <li class="item-droid">
                        2.3 - <abbr title="Biscoito de gengibre">Gingerbread</abbr>
                    </li>
                    <li class="item-droid">
                        3.0 - <abbr title="Favo de mel">Honeycomb</abbr>
                    </li>
                    <li class="item-droid">
                        4.0 - <abbr title="Sanduiche de sorvete">Ice Cream Sandwich</abbr>
                    </li>
                    <li class="item-droid">
                        4.1 - <abbr title="Jujuba">Jelly Bean</abbr>
                    </li>
                    <li class="item-droid">
                        4.4 - <abbr title="kitkat">KitKat</abbr>
                    </li>
                    <li class="item-droid">
                        5.0 - <abbr title="Pirulito">Lolipop</abbr>
                    </li>
                    <li class="item-droid">
                        6.0 - <abbr title="Marshmallow">Marshmallow</abbr>
                    </li>
                    <li class="item-droid">
                        7.0 - <abbr title="Torrone">Nougat</abbr>
                    </li>
                    <li class="item-droid">
                        8.0 - <abbr title="Biscoito Oreo">Oreo</abbr>
                    </li>
                    <li class="item-droid">
                        9.0 - <abbr title="Torta">Pie</abbr>
                    </li>
                </ul>
                <p>
                    Infelizmente, o <strong>Android Q</strong> não existiu, pois o Google resolveu pôr fim a essa
                    divertida prática e começou a usar numerações, o que deu origem ao Android 10.
                    Acesse aqui o site <a class="externo" href="https://www.android.com/intl/pt_pt/history/"
                        target="_blank">Android History</a> para conhecer a sequência das versões "adocicadas" e o que
                    cada uma trouxe para o sistema Android.
                </p>
            </aside>


            <p>Então é isso! Espero que você tenha gostado do nosso artigo com essa curiosidade sobre o sistema Android
                e seu simpático mascote.</p>
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

        <!-- <p class="dev"> <a href="https://github.com/zIthalo" target="_blank">Ithalo Willian</a></p>
        
            <p class="dev"><a href="https://github.com/Alyssonx18" target="_blank">Alysson Roberto</a></p>
    
            <p class="dev"><a href="https://github.com/Matheushennrique" target="_blank">Matheus Henrique</a></p>
    
            <p class="dev"><a href="#">Tarciano Cruz</a></p>
        
            <p class="dev"><a href="https://instagram.com/nicolas_lima04?igshid=ZmRlMzRkMDU=" target="_blank">Nicolas Lima</a></p> -->
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