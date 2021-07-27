<?php get_header(); ?>
            
            <div class="home-landing-content">
                <div class="home-landing-text">
                    <h3 class="home-landing-text-hashtag">#VemProHAS</h3>
                    <h1 class="home-landing-text-title">Estude em uma das melhores <span class="home-landing-text-title-span">escolas públicas</span> de São Paulo</h1>
                    <div class="home-landing-links">
                        <a class="home-landing-button-link" href="#">Quero saber mais!</a>
                        <a class="home-landing-text-link" href="https://bit.ly/vestibulinho_etechas" target="_blank">Ir para o site do vestibulinho</a>
                    </div>
                </div>
                
                <div class="home-landing-carousel">
                    <img class="home-landing-carousel-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/teste.webp" alt="Etec Horácio">
                    <!-- <img class="home-landing-carousel-img-button" src="assets/img/only-left.svg" alt="Exemplo"> -->
                </div>
            </div>
        </div>
    </div>

        <div class="about">
            <div class="about-text">
                <h2 class="about-text-title-content">Sobre nós</h2>
                <p class="about-text-paragraph-content">Nosso papel é oferecer ensino gratuito e de qualidade para todos.</p>
                <p class="about-text-paragraph-content">Estamos desde 1956 trabalhando para ser uma escola cada vez melhor.</p>
            </div>
            <div class="about-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/school.svg" alt="Escola">
                <h3>+ de 65 anos</h3>
                <p>Formando excelentes profissionais</p>
            </div>
            <div class="about-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/peoples.svg" alt="Pessoas">
                <h3>+ de 900 alunos</h3>
                <p>Frequentam nossa escola todos os dias</p>
            </div>
            <div class="about-card ">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/smiling-face.svg" alt="Alunos">
                <h3>+ de 100 funcionários</h3>
                <p>Formando excelentes profissionais</p>
            </div>
        </div>

        
        <div class="test-etec"> <!-- Vestibulinho -->
            <div class="test-etec-info">
                <span>#VemProHAS</span>
                <h2>Vestibulinho das Etecs</h2>
                <div class="test-etec-info-text">
                    <p>O vestibulinho é o processo seletivo que seleciona candidatos para as Escolas Técnicas Estaduais (Etecs).</p>
                    <p>Qualquer pessoa que esteja entrando no ensino médio ou queira fazer um ensino técnico, pode se inscrever 😉</p>
                </div>
                <a href="https://bit.ly/vestibulinho_etechas" target="_blank"><button class="test-etec-signup" >Quero me inscrever</button></a>
            </div>
            <div class="test-etec-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testbackground.webp">   
            </div>
        </div>
        <div class="modality">
            <div class="modality-text">
                <h2 class="modality-text-title-content">Modalidades</h2>
                <p class="modality-text-paragraph-content">O HAS, entende que cada pessoa tem sua individualidade.</p>
                <p class="modality-text-paragraph-content">Por isso aqui dentro temos varias modalidades de ensino para todo mundo se adaptar.</p>
                <a href="" class="modality-text-link-content">Quero ver todos os cursos</a>
            </div>
            <div class="modality-cards">
                <div class="modality-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ensino-medio.svg" alt="Ensino Médio">
                    <div class="modality-card-text">
                        <p class="modality-card-title">Ensino Médio</p>
                        <p class="modality-card-content">Não tem interesse em nenhum curso técnico? Sem problemas.</p>
                    </div>
                </div>
                <div class="modality-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/m-tec.svg" alt="M-TEC">
                    <div class="modality-card-info">
                        <p class="modality-card-title">M-TEC</p>
                        <p class="modality-card-content">Com menos carga horária, você faz o médio e se profissionaliza.</p>
                    </div>
                </div>
                <div class="modality-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ensino-tecnico.svg" alt="Ensino Técnico">
                    <div>
                        <p class="modality-card-title">Ensino Técnico</p>
                        <p class="modality-card-content">Também temos a opção fazer um curso técnico individual.</p>
                    </div>
                </div>
            </div>
        </div>

        <!--Noticias-->
        <div class="news">
            <div class="news-text">
                <span class="news-text-hashtag">Fique por dentro</span>
                <h2 class="news-text-title">Notícias e comunicados</h2>
            </div>
            <div class="news-content">
                <?php query_posts('posts_per_page=4'); ?>
                <?php while(have_posts()):the_post(); ?>
                
                    <article class="news-content-post">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testbackground.webp">
                        <div class="post-text">
                            <h2><?php the_title();?></h2>
                            <p>Postado por <?php the_author();?></p>
                        <div>
                    </article>
                <?php endwhile; ?>
                <article class="news-content-post">
                    <a href="blog"><h2>Ver todos +</h2></a>
                </article>
            </div>
        </div>



        <div class="faq">
            <h2 class="faq-title">Perguntas frequentes</h2>
            <div class="faq-cards">
                <div>
                <div class="faq-card">
                    <div class="question">
                        <p>Como faço para estudar na escola?</p>

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/caret-down.svg" alt="">

                    </div>
                    <div class="answer">
                            <p>
                                A ETEC é uma escola pública, por conta disso é 100% gratuita
                            </p>
                    </div>
                </div>
                <div class="faq-card">
                    <div class="question">
                        <p>Como faço para estudar na escola?</p>

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/caret-down.svg" alt="">

                    </div>
                    <div class="answer">
                            <p>
                                A ETEC é uma escola pública, por conta disso é 100% gratuita
                            </p>
                    </div>

                </div>
                <div class="faq-card">
                    <div class="question">
                        <p>Como faço para estudar na escola?</p>

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/caret-down.svg" alt="">

                    </div>
                    <div class="answer">
                            <p>
                                A ETEC é uma escola pública, por conta disso é 100% gratuita
                            </p>
                    </div>

                </div>
                </div>
                <div>
                <div class="faq-card">
                    <div class="question">
                        <p>Como faço para estudar na escola?</p>

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/caret-down.svg" alt="">

                    </div>
                    <div class="answer">
                            <p>
                                A ETEC é uma escola pública, por conta disso é 100% gratuita
                            </p>
                    </div>

                </div>
                <div class="faq-card">
                    <div class="question">
                        <p>Como faço para estudar na escola?</p>

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/caret-down.svg" alt="">

                    </div>
                    <div class="answer">
                            <p>
                                A ETEC é uma escola pública, por conta disso é 100% gratuita
                            </p>
                    </div>

                </div>
                <div class="faq-card">
                    <div class="question">
                        <p>Como faço para estudar na escola?</p>

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/caret-down.svg" alt="">

                    </div>
                    <div class="answer">
                            <p>
                                A ETEC é uma escola pública, por conta disso é 100% gratuita
                            </p>
                    </div>

                </div>
                </div>
            </div>
                <!-- <div class="faq-card">
                    <a class="faq-card-title">Como faço para estudar na escola?
                        <img class="faq-card-icon-down" src="<?php echo get_template_directory_uri(); ?>/assets/img/caret-down.svg">
                    </a>
                    <div class="faq-card-content">
                        <p>
                            A ETEC é uma escola pública, por conta disso é 100% gratuita
                        </p>
                    </div>
                </div>
                <div class="faq-card">
                    <a class="faq-card-title" href="#faq-card2">Como faço para estudar na escola?
                        <img class="faq-card-icon-down" src="<?php echo get_template_directory_uri(); ?>/assets/img/caret-down.svg">

                    </a>
                    <div class="faq-card-content">
                        <p>
                            A ETEC é uma escola pública, por conta disso é 100% gratuita
                        </p>
                    </div>
                </div>
                <div class="faq-card">
                    <a class="faq-card-title" href="#faq-card3">Como faço para estudar na escola?
                        <img class="faq-card-icon-down" src="<?php echo get_template_directory_uri(); ?>/assets/img/caret-down.svg">
                    </a>
                    <div class="faq-card-content">
                        <p>
                            A ETEC é uma escola pública, por conta disso é 100% gratuita
                        </p>
                    </div>
                </div>
                <div class="faq-card">
                    <a class="faq-card-title" href="#faq-card4">Como faço para estudar na escola?
                        <img class="faq-card-icon-down" src="<?php echo get_template_directory_uri(); ?>/assets/img/caret-down.svg">
                    </a>
                    <div class="faq-card-content">
                        <p>
                            A ETEC é uma escola pública, por conta disso é 100% gratuita
                        </p>
                    </div>
                </div>
                <div class="faq-card">
                    <a class="faq-card-title" href="#faq-card5">Como faço para estudar na escola?
                        <img class="faq-card-icon-down" src="<?php echo get_template_directory_uri(); ?>/assets/img/caret-down.svg">
                    </a>
                    <div class="faq-card-content">
                        <p>
                            A ETEC é uma escola pública, por conta disso é 100% gratuita
                        </p>
                    </div>
                </div>
                <div class="faq-card">
                    <a class="faq-card-title" href="#faq-card6">Como faço para estudar na escola?
                        <img class="faq-card-icon-down" src="<?php echo get_template_directory_uri(); ?>/assets/img/caret-down.svg">
                    </a>
                    <div class="faq-card-content">
                        <p>
                            A ETEC é uma escola pública, por conta disso é 100% gratuita
                        </p>
                    </div>
                </div> -->
        </div>
<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/menu.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/faq.js"></script>