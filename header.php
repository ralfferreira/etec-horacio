<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Estude em uma das melhores escolas públicas de São Paulo. #VemProHAS">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etec HAS</title>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/splide/splide-core.min.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
    <?php wp_head();?>
</head>
<body>
    <div class="content">
        <div class="home-landing">
            <header class="header">
                <a href="<?php bloginfo('url');?>"><img class="header-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_horizontal_positivo.webp"></a>
                <!-- Links -->
                    <ul class="header-list">
                    <div class="hamburger">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                        <li><a href="<?php bloginfo('url');?>">Início</a></li>
                        <li><a href="cursos">Cursos</a></li>
                        <li><a href="extensoes">Extensões</a></li>
                        <!-- <li><a href="#"></a>Escola</li> 
                            <li><a href="#"></a>Instiucional</li> -->
                        <li><a href="contato">Contato</a></li>
                    </ul>
            </header>
            <script src="<?php echo get_template_directory_uri(); ?>/assets/js/menu.js"></script>
            