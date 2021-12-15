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
                    <div id="image-slider" class="splide">
                        <div class="splide__track">
                                <ul class="splide__list">
                                    <?php 
                                        $fields = CFS()->get( 'imagens_do_carrossel' );
                                        foreach ( $fields as $field ) { 
                                        ?>
                                        <li class="splide__slide">
                                            <div>
                                                <a target="_blank" href="<?php echo $field['link_da_imagem']; ?>">
                                                    <img class="home-landing-carousel-img" src="<?php echo $field['imagem_escolhida']; ?>" alt="Etec Horácio">
                                                </a>
                                            </div>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="splide__progress">
                                <div class="splide__progress__bar"></div>
                            </div>
                    </div>
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
                <h3>+ de 2300 alunos</h3>
                <p>Frequentam nossa escola todos os dias</p>
            </div>
            <div class="about-card ">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/smiling-face.svg" alt="Alunos">
                <h3>+ de 140 funcionários</h3>
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
                        <a href="<?php the_permalink()?>">
                            <?php
                                if(has_post_thumbnail()){
                                    the_post_thumbnail();
                                }
                                else{
                                ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testbackground.webp">
                                <?
                                }
                            ?>
                        </a>
                        <div class="post-text">
                            <?php add_filter( 'the_title', 'max_title_length'); ?>
                            <h2><a class="post-link" href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                            <p>Postado por <?php the_author();?></p>
                        <div>
                    </article>
                <?php endwhile; ?>
                <article class="news-content-post">
                    <a class="see-all" href="blog"><h2>Ver todos +</h2></a>
                </article>
            </div>
        </div>



        <div class="faq">
            <h2 class="faq-title">Perguntas frequentes</h2>
            <div class="faq-cards">
                <div>
                <div class="faq-card">
                    <div class="question">
                        <p>Quanto custa?</p>

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/caret-down.svg" alt="">

                    </div>
                    <div class="answer">
                            <p>
                            Os cursos oferecidos pelas Etecs do CEETEPS são gratuitos, exige-se somente o recolhimento da taxa de inscrição, compra dos materiais, no decorrer do curso e contribuições voluntárias à APM da unidade.
                            </p>
                    </div>
                </div>
                <div class="faq-card">
                    <div class="question">
                        <p>Quanto tempo dura o curso?</p>

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/caret-down.svg" alt="">

                    </div>
                    <div class="answer">
                            <p>
                            Os cursos técnicos têm duração que variam de acordo com o segmento e com sua respectiva matriz curricular (componentes curriculares ou disciplinas), geralmente duram entre 18 e 24 meses. Exceções para os cursos técnicos integrados ao médio (ETIMs, M-TECs, entre outras nomenclaturas), nos quais as matérias técnicas são atreladas às do ensino médio, durante as 3 séries (3 anos ou 36 meses).
                            </p>
                    </div>

                </div>
                <div class="faq-card">
                    <div class="question">
                        <p>Tenho direito aos benefícios de estudante (passe, meia entrada etc.) fazendo o curso técnico?</p>

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/caret-down.svg" alt="">

                    </div>
                    <div class="answer">
                            <p>
                            Sim, os benefícios são concedidos aos matriculados. Os cadastros são feitos automaticamente aos que, no ato da matrícula, apresentem cópia válida e legível do documento de identidade. Para comprovação de escolaridade nossa unidade oferece, de forma gratuita, declaração com duração de 30 (trinta) dias.
                            </p>
                    </div>

                </div>
                </div>
                <div>
                <div class="faq-card">
                    <div class="question">
                        <p>Qual o horário de aula?</p>

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/caret-down.svg" alt="">

                    </div>
                    <div class="answer">
                            <p>
                            Oferecemos cursos no período matutino, vespertino e noturno (manhã, tarde e noite). Os cursos no período da manhã, em geral, são integrados ao ensino médio (pegam uma parte do período da tarde, pois a carga horária é maior) e o ensino médio. No período da tarde oferecemos cursos integrados ao médio, e Técnicos. Já no período noturno somente os cursos Técnicos.
                            </p>
                    </div>

                </div>
                <div class="faq-card">
                    <div class="question">
                        <p>Tem limite de idade? Quais os requisitos?</p>

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/caret-down.svg" alt="">

                    </div>
                    <div class="answer">
                            <p>
                            Para ingresso nos cursos técnicos o candidato deve estar regularmente matriculado a partir da segunda série do ensino médio, ou ter concluído o Ensino médio (segundo grau). Não existe requisito de idade, mas por ser uma certificação de nível médio, exige-se a conclusão deste para conclusão do técnico (para o ingresso não é necessário ter concluído, mas sim estar cursando a partir da segunda série). Já para os cursos integrados ou somente o ensino médio, é necessário estar concluindo a oitava série ou nono ano.
                            </p>
                    </div>

                </div>
                <div class="faq-card">
                    <div class="question">
                        <p>Tenho direito a diploma?</p>

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/caret-down.svg" alt="">

                    </div>
                    <div class="answer">
                            <p>
                            Aos concluintes dos cursos Técnicos e Integrados é fornecido, em via única, diploma e certificado, dando direito ao registro no órgão de classe responsável e ao exercício profissional reconhecido.
                            </p>
                    </div>

                </div>
                </div>
            </div>
        </div>
<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/menu.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/faq.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/carousel-index.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/splide.min.js"></script>