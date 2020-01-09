<?php
session_start();
include 'conn.php';
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Laineg - Login</title>

    <!-- Favicon  -->
    <link rel="icon" href="images/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">

</head>

<body>
    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="conteiner">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Digite sua palavra-chave...">
                            <button type="submit"><img src="images/core-img/search.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="index.php"><img src="images/core-img/logo.png" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <a href="index.php"><img src="images/core-img/logo.png" alt=""></a>
            </div>
            <!-- Amado Nav -->
            <nav class="amado-nav mb-50">
            <ul>
                    <li><a href="index.php"><img src="images/inicio.png" alt=""> Início</a></li>
                    <li><a href="shop.php"><img src="images/loja.png" alt=""> Shop</a></li>
                    <li><a href="servicos.php"><img src="images/core-img/favorites.png" alt=""> Serviços</a></li>
                    <li><a href="carrinho.php" class="cart-nav"><img src="images/core-img/cart.png" alt=""> Carrinho</a>
                    <li>
                    <li><a href="#" class="search-nav"><img src="images/core-img/search.png" alt=""> Pesquisa</a>
                    <li>
                </ul>
            </nav>
            <!-- Social Button -->
            <div class="social-info d-flex justify-content-between">
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/laineg.corp/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="https://twitter.com/LainegCorp"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </header>
        <section style="background-color: #f5f7fa" class="cart-table-area section-padding-100-2">
            <div class="conteiner-ajuste">
                <header class="cart-title mt-50">
                    <h1 style="font-size: 80px; font-family:'Molliquam', serif">Login</h1>
                </header>
                <div class="row">
                    <div>
                        <div>
                            <?php
                            if (isset($_SESSION['nao_autenticado'])) :
                                ?>
                                <div class="notification is-danger">
                                    <p>ERROR: Usuário ou senha inválidos.</p>
                                </div>
                            <?php
                            endif;
                            unset($_SESSION['nao_autenticado']);
                            ?>
                            <div>
                                <form action="loginn.php" method="POST">
                                    <div>
                                        <div class="col-12 mb-3">
                                            <input class="form-control" name="usuario" name="text" placeholder="Seu usuário" autofocus="">
                                        </div>
                                    </div>

                                    <div>
                                        <div class="col-12 mb-3">
                                            <input class="form-control" name="senha" type="password" placeholder="Sua senha">
                                        </div>
                                    </div>

                                    <button href="cadastro.php" class="btn-cad"><a style="color:#f5f7fa" href="cadastro.php">Cadastro</a></button>
                                    <button type="submit" class="btn-log">Entrar</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="newsletter-area section-padding-100-0">
        <div class="conteiner">
            <div class="row align-items-center">
                <!-- Newsletter Text -->
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="newsletter-text mb-100">
                        <h2>Se inscreva <span>agora!</span></h2>
                        <p>Assim vai poder receber as novidades de produtos novos e descontos perfeitos para você, alem de estar por dentro de como estamos montando estrategias para nossos contratantes.</p>
                    </div>
                </div>
                <!-- Newsletter Form -->
                <div class="col-12 col-lg-6 col-xl-5">
                    <div class="newsletter-form mb-100">
                        <form action="#" method="post">
                            <input type="email" name="email" class="nl-email" placeholder="Seu E-mail">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Newsletter Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="conteiner">
            <div class="row align-items-center">
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-4">
                    <div class="single_widget_area">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="index.php"><img class="img-logomarca" src="images/core-img/logo2.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-8">
                    <div class="single_widget_area">
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <nav class="navbar navbar-expand-lg justify-content-end">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#footerNavContent" aria-controls="footerNavContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                                <div class="collapse navbar-collapse" id="footerNavContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="index.php">Início</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="shop.php">Shop</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="servicos.php">Serviços</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="carrinho.php">Carrinho</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>