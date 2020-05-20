<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/carrosel.css">
    <link rel="shortcut icon" href="favicon.ico" />
    <title>Home</title>
</head>

<body>
    <?php require_once 'config.php'; ?>
    <?php require_once DBAPI; ?>
    <?php include(HEADER_TEMPLATE); ?>
    <?php $db = open_database(); ?>

    <main role="main">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators text-primary">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">

                    <img class="bd-placeholder-img"
                        src="https://www.elsafernandes.com/wp-content/uploads/2018/01/bancos_imagens_gratuitos_1100x620.jpg"
                        alt="" width="100%">
                    <div class="container">
                        <div class="carousel-caption text-left bg-black text-white">
                            <h1 class="ml-3">Example headline.</h1>
                            <p class="ml-3">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit
                                non mi porta
                                gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p>
                                <a class="btn btn-lg btn-info ml-3" href="#" role="button">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img class="bd-placeholder-img"
                        src="https://www.jornalcruzeiro.com.br/wp-content/uploads/2019/11/banco_imagens_gratuitas_fotos_Crux-980x551.jpg"
                        alt="">
                    <div class="container">
                        <div class="carousel-caption text-white bg-black">
                            <h1 class="text-white">Another example headline.</h1>
                            <p class="text-white">
                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id
                                elit non mi porta
                                gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                            </p>
                            <p>
                                <a class="btn btn-lg btn-info  mr-3" href="#" role="button">Learn more</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="bd-placeholder-img"
                        src="https://www.publicitarioscriativos.com/wp-content/uploads/2019/08/novo-buscador-reune-todos-os-banco-de-imagens-gratuitos-em-uma-so-pesquisa.png"
                        alt="">
                    <div class="container">
                        <div class="carousel-caption text-right text-white  bg-black">
                            <h1 class="mr-3">One more for good measure.</h1>
                            <p class="mr-3">
                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                                gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                            </p>
                            <p>
                                <a class="btn btn-lg btn-info mr-3 " href="#" role="button">Browse gallery</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev text-dark" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only text-dark">Anterior</span>
            </a>
            <a class="carousel-control-next text-dark" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only  ">Proximo</span>
            </a>
        </div>


        <!-- Marketing messaging and featurettes
  ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4 border-black ">


                    <img class="bd-placeholder-img rounded-circle mt-2"
                        src="https://acifi.org.br/wp-content/uploads/2020/03/TXT1-500x500.png" alt="" width="140"
                        height="140">

                    <h2>Controle</h2>
                    <p>
                        Ter visibilidade diária do fluxo de Caixa, utilizando dashboards, scorecards e KPIs em tempo
                        real
                    </p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 bg-dark">
                    <img class="bd-placeholder-img rounded-circle  mt-2"
                        src="https://regdoc.ufms.br/img/search-document.png" alt="" width="140" height="140">

                    <div class="text-white">
                        <h2>Procesos</h2>
                        <p>Reduzir os processos manuais e controle através de planilhas, em até 70%, utilizando um
                            sistema
                            de back office que inclue finanças, fullfilment, inventário e vendas.
                        </p>
                    </div>
                    <p>
                        <a class="btn btn-secondary" href="#" role="button">
                            View details &raquo;
                        </a>
                    </p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 border-black">
                    <img class="bd-placeholder-img rounded-circle mt-2"
                        src="https://cdn2.iconfinder.com/data/icons/circle-icons-1/64/computer-512.png" alt=""
                        width="140" height="140">
                    <h2>Economia</h2>
                    <p>Economizar 93% de custos em TI associados com suporte, manutenção, integração e atualização
                        de
                        aplicativos independentes.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">First featurette heading. <span class="text-warning">It’ll blow
                            your
                            mind.</span></h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta
                        felis
                        euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce
                        dapibus,
                        tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5">
                    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500"
                        src="data:image/jpeg;base64,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"
                        alt="">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette bg-dark">
                <div class="col-md-7 order-md-2 text-white">
                    <h2 class="featurette-heading">Oh yeah, it’s that good.
                        <span class="text-warning">See for yourself.</span>
                    </h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta
                        felis
                        euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce
                        dapibus,
                        tellus ac cursus commodo.
                    </p>
                </div>
                <div class="col-md-5 order-md-1 ">

                    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500"
                        src="https://www.agenciapublicart.com.br/wp-content/uploads/2018/02/seven-desenvolvimento-de-sites-1.jpg"
                        alt="">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">And lastly, this one. <span class="text-warning">Checkmate.</span>
                    </h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta
                        felis
                        euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce
                        dapibus,
                        tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5">
                    <img src="https://www.criaare.com.br/wp-content/uploads/2017/08/desenvolvimento-site-tanacaracv.jpg"
                        alt="" srcset=""
                        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">

                </div>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->

        <?php include('./customers/modal.php'); ?>

        <!--Footer-->
        <?php include(FOOTER_TEMPLATE); ?>
    </main>
</body>

</html>