<?php
session_start();
include_once('conn.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Laineg - Tente Uma Nova Perspectiva | Carrinho </title>

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
                    <li class="active"><a href="carrinho.php" class="cart-nav"><img src="images/core-img/cart.png" alt=""> Carrinho</a>
                    <li>
                    <li><a href="#" class="search-nav"><img src="images/core-img/search.png" alt=""> Pesquisa</a>
                    <li>
                </ul>
            </nav>
            <!-- Button Group -->
            <div class="login-cad mt-30 mb-100">
                <a href="login.php" class="btn-padrao">Login</a>
                <a href="cadastro.php" class="btn-padrao-x">Cadastro</a>
            </div>
            <!-- Social Button -->
            <div class="social-info d-flex justify-content-between">
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/laineg.corp/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="https://twitter.com/LainegCorp"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </header>
        <!-- Header Area End -->

        <div style="padding-top: 50px; padding-bottom: 30px;" class="cart-table-area">
            <div class="">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="cart-title mt-15">
                            <h1 style="font-size: 80px; font-family:'Molliquam', serif">Carrinho</h1>
                        </div>

                        <div class="cart-table clearfix">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th style="margin-left: 3%; font-size: 100%;">Nome</th>
                                        <th style="font-size: 100%;">Quantidade</th>
                                        <th style="margin-left: 2%; font-size: 100%;">Preço</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sessao = $_SESSION['pedido'];
                                    $verificar = $pdo->prepare("SELECT * FROM carrinho_temporario WHERE temporario_sessao =:ses");
                                    $verificar->bindValue(':ses', $sessao);
                                    $verificar->execute();

                                    $total = 0;
                                    $linha = $verificar->rowCount();
                                    foreach ($verificar as $aparecer) :
                                        $total += $aparecer['temporario_preco'];

                                        $prod = $aparecer['temporario_produto'];
                                        $verificacao = $pdo->prepare("SELECT * FROM carrinho_produtos WHERE produto_id =:prod");
                                        $verificacao->bindValue(':prod', $prod);
                                        $verificacao->execute();
                                        foreach ($verificacao as $mostre) :
                                            $produtos = $mostre['produto_nome'];
                                            ?>
                                            <tr>
                                                <td style="text-align: center">
                                                    <p class="text-center p-no-carrinho"><?= $produtos; ?></p>
                                                    <input type="text" name="produto" value="<?= $produtos ?>" style="display:none">
                                                </td>
                                                <form method="post">
                                                    <td>
                                                        <p class="text-rigth color-dark-full font-text-light">
                                                            <input type="text" value="<?= $mostre['produto_quantidade'] ?>" name="1" id="estoque" style="display:none;">
                                                            <input type="text" value="<?= $mostre['produto_preco']; ?>" name="preco" id="estoque" style="display:none;">
                                                            <input type="number" name="id" value="<?= $aparecer['temporario_id'] ?>" style="display:none;">
                                                            <input type="number" name="quantidade" value="<?= $aparecer['temporario_quantidade'] ?>" class="text-center" style="width: 50%; height:34px; border: none; background-color:#f5f7fa;" id="qtd" onchange="acrescentar()"><b><span id="resultado"></span></b><button style="width: 50%; height:35px; background-color:#f5f7fa; border: none; " class="btn-auterar-carrinho" name="alterar" value="Alterar"> Alterar</button></p>
                                                        <script type="text/javascript">
                                                            var myVar = setInterval(acrescentar, 1000);

                                                            function acrescentar() {
                                                                var qtd = document.getElementById('qtd');
                                                                var estoque = document.getElementById('estoque');
                                                                var resultado = document.getElementById('resultado');

                                                                var valor_qtd = qtd.value;
                                                                var valor_est = parseInt(estoque.value);


                                                                if (valor_qtd <= valor_est && valor_qtd >= 0) {
                                                                    document.getElementById("resultado").innerHTML = "";

                                                                } else if (valor_qtd < 0) {
                                                                    document.getElementById("resultado").innerHTML = "Estoque Inexistente";
                                                                } else {
                                                                    document.getElementById("resultado").innerHTML = "Estoque Insuficiente só possuimos : " + valor_est + "produtos";
                                                                }

                                                            }
                                                        </script>
                                                        <?php
                                                                if (isset($_POST['alterar'])) :
                                                                    $qtde = filter_input(INPUT_POST, 'quantidade');
                                                                    $id = filter_input(INPUT_POST, 'id');
                                                                    $preco = filter_input(INPUT_POST, 'preco');

                                                                    echo '<script>window.location="alterar.php?qtd=' . $qtde . '&preco=' . $preco . '&ref=' . $id . '"</script>';
                                                                endif;
                                                                ?>
                                                    </td>

                                                    <td style="text-align: center">
                                                        <p class="text-center color-dark-full font-text-light">R$ <?= number_format($aparecer['temporario_preco'], 2, ',', '.'); ?></p>
                                                    </td>
                                                    <input type="text" name="preco" value="<?= $aparecer['temporario_preco'] ?>" style="display:none">
                                                </form>

                                                <td style="text-align: center">
                                                    <p><a style="font-size: 40px;" href="excluir-produto.php?ref=<?= $aparecer['temporario_id'] ?>"><img src="images/lixo.png" href="excluir-produto.php?ref=<?= $aparecer['temporario_id'] ?>" style="width: 35px; height: auto; color: #AA002F; border: none; border-radius: 5px; padding: 0 7px; font-size: 20px; line-height: 20px; font-weight: 400; text-align: center;"></a></p>
                                                </td>
                                            </tr>
                                    <?php endforeach;
                                    endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div style="text-align: center;" class="cart-summary">
                            <ul>
                                <a style="font-size: 170%;">Total da Compra</a>
                                <br>
                                <div style="margin-left: 30px; margin-top: 30px; text-align: left;">
                                    <a style="font-size: 110%;">Subtotal: R$ <?= number_format($total, 2, ',', '.'); ?></a>
                                    <br>
                                    <a style="font-size: 110%;">Frete: Free</a>
                                    <br>
                                    <a style="font-size: 110%;">Total: R$ <?= number_format($total, 2, ',', '.'); ?></a>
                                </div>
                            </ul>
                            <div style="text-align: center;" class="cart-btn mt-15">
                                <a style="display: inline-block; min-width: 200px; height: 55px; color: #ffffff; border: none; border-radius: 10px; padding: 0 7px; font-size: 20px; line-height: 56px; background-color: #AA002F; font-weight: 400; text-align: center;" href="finalizar-pedido.php?total=<?= $total; ?>">Finalizar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

    <!-- ##### Newsletter Area Start ##### -->
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
                            <a href="index.php"><img src="images/core-img/logo2.png" alt=""></a>
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