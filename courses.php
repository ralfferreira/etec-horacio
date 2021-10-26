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
                                        <div tabindex="1" class="course-item gallery-cell" onclick="opening('<?php $new_str=str_replace(' ', '_', $x); echo $new_str?>')">
                                            <img class="course-item-icon" src="<?php echo $field['icone_do_curso']?>" alt="">
                                            <p><?php echo $field['titulo_do_curso']; ?></p>
                                        </div>
                                    </li>
                                    <?php }?>
                                    <script>

                                    function closeAll(idd){
                                            <?php
                                                $close = CFS()->get( 'card_do_curso' );
                                                foreach( $close as $target){
                                                    $z = $target['titulo_do_curso'];
                                                    $z =str_replace(' ', '_', $target['titulo_do_curso']);
                                            ?>
                                                if(<?php echo $z?> != idd){
                                                    <?php echo $z?>.style.display = "none";
                                                }
                                            <?php }?>
                                        }

                                    function opening(id){
                                        console.log(id)
                                        var idd = document.getElementById(id);
                                        console.log(idd)
                                        closeAll(idd);
                                        if(idd.style.display === "flex"){
                                                idd.style.display="none";
                                        } else{
                                                idd.style.display="flex";
                                        }
                                    }
                                    </script>
                        </ul>
                        </div>
                    </div>
                    
                <!-- fim mobile -->
                <div class="courses-container">
                    <script type="text/javascript">

                    <?php 
                        $fields = CFS()->get( 'conteudo' );
                        foreach ( $fields as $field ) { ?>
                            // console.log(a)
                        <?php }?>
                    // function closeAll(idd){
                    //     if(a != idd){
                    //         a.style.display="none";
                    //     }
                    // }
                    // function opening(id){
                    //     var idd = document.getElementById(id);
                    //     closeAll(idd);
                    //     if(idd.style.display === "flex"){
                    //         idd.style.display="none";
                    //     } else{
                    //         idd.style.display="flex";
                    //     }
                    // }
                    </script>
                    <?php
                        $fields = CFS()->get( 'conteudo' );
                        foreach ( $fields as $field ) { ?>
                        

                    <div class="course-content" id="<?php $new_str=str_replace(' ', '_', $field['titulo_do_curso']); echo $new_str?>">
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