<?php get_header(); ?>
<!-- /* 
    Template Name: Courses
*/ -->
                <div class="courses-landing-content">
                    <div class="courses-landing-text">
                        <h3 class="courses-landing-text-hashtag">#VemProHAS</h3>
                        <h1 class="courses-landing-text-title">Informação, Comunicação, Industria & Negócios</h1>
                    </div>
                    
                </div>
            </div>

            <div class="courses">
                <div class="our-courses">
                    <h2 class="courses-title">Nossos Cursos</h2>
                </div>
                <!-- mobile -->
                <div id="card-slider" class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php
                                $fields = CFS()->get( 'card_do_curso' );
                                foreach ( $fields as $field ) { 
                                    $x = $field['titulo_do_curso'];
                                    ?>
                                    <li class="splide__slide">
                                        <div tabindex="1" class="course-item gallery-cell" onclick="opening(<?php echo $x ?>)">
                                            <img class="course-item-icon" src="<?php echo $field['icone_do_curso']?>" alt="">
                                            <p><?php echo $field['titulo_do_curso']; ?></p>
                                        </div>
                                    </li>
                                <?php }?>
                        </ul>
                        </div>
                    </div>
                <!-- fim mobile -->
                <div class="courses-container">
                    <?php
                        $fields = CFS()->get( 'conteudo' );
                        foreach ( $fields as $field ) { ?>
                        
                        <script type="text/javascript">
                        var y = "<?php echo $x?>";
                        // function closeAll(idd){
                        //     if(x != idd){
                        //         x.style.display="none";
                        //     }
                        // }

                        // function opening(<?php echo $field['titulo_do_curso'] ?>){
                        //     var idd = document.getElementById(<?php echo $field['titulo_do_curso'] ?>);
                        //     closeAll(idd);
                        //     if(idd.style.display === "flex"){
                        //         idd.style.display="none";
                        //     } else{
                        //         idd.style.display="flex";
                        //     }
                        // }
                        function opening(y){
                            var idd = y;
                            if(idd.style.display === "flex"){
                                idd.style.display="none";
                            } else{
                                idd.style.display="flex";
                            }
                        }
                        </script>
                    <div class="course-content" id="<?php echo $field['titulo_do_curso'] ?>">
                        <div class="course-content-name">
                            <img src="<?php echo $field['icone_do_curso']?>" alt="">
                            <div>
                                <h3><?php echo $field['titulo_do_curso']?></h3>
                                <p><?php echo $field['eixo_tecnologico']?></p>
                            </div>
                        </div>
                        <div class="course-content-description">
                            <p>Descrição:</p>
                            <h5><?php echo $field['descricao']?></h5>
                        </div>
                        <div class="course-content-modality">
                            <p>Modalidades</p>
                            <p>Carga Horária</p>
                            <h5><?php echo $field['modalidades']?></h5>
                            <h5><?php echo $field['carga_horaria']?></p>
                        </div>
                        <div class="course-content-labor-market">
                            <p>Mercado de trabalho</p>
                            <h5><?php echo $field['mercado_de_trabalho']?></h5>
                        </div>
                    </div>            
                    <?php } ?>
                    
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/courses.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/splide.min.js"></script>