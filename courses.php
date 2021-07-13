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
                <h2 class="courses-title">Nossos Cursos</h2>
                <!-- mobile -->
                <div id="card-slider" class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div tabindex="1" class="course-item gallery-cell" onclick="opening('adminOpen')">
                                    <img class="course-item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/necktie.svg" alt="">
                                    <p>Administração</p>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div tabindex="1" class="course-item gallery-cell" onclick="opening('accountingOpen')">
                                    <img class="course-item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/calculator.svg" alt="">
                                    <p>Contabilidade</p>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div tabindex="1" class="course-item gallery-cell" onclick="opening('systemDevelopmentOpen')">
                                    <img class="course-item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/instruction.svg" alt="">
                                    <p>Desenvolvimento de Sistemas</p>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div tabindex="1" class="course-item gallery-cell" onclick="opening('eletronicOpen')">
                                    <img class="course-item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/lightning.svg" alt="">
                                    <p>Eletrônica</p>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div tabindex="1" class="course-item gallery-cell" onclick="opening('electrotechnicalOpen')">
                                    <img class="course-item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/plug.svg" alt="">
                                    <p>Eletrotécnica</p>
                                </div>
                            </li> 
                            <li class="splide__slide">
                                <div tabindex="1" class="course-item gallery-cell" onclick="opening('highSchoolOpen')">
                                    <img class="course-item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/notebook-one.svg" alt="">
                                    <p>Ensino Médio</p>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div tabindex="1" class="course-item gallery-cell" onclick="opening('logisticsOpen')" id="delivery" >
                                    <img class="course-item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/delivery.svg" alt="">
                                    <p>Logística</p>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div tabindex="1" class="course-item gallery-cell" onclick="opening('mechanicOpen')">
                                    <img class="course-item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/factory-building.svg" alt="">
                                    <p>Mecânica</p>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div tabindex="1" class="course-item gallery-cell" onclick="opening('mechatronicOpen')">
                                    <img class="course-item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/robot-one.svg" alt="">
                                    <p>Mecatrônica</p>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div tabindex="1" class="course-item gallery-cell" onclick="opening('networkOpen')">
                                    <img class="course-item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/server.svg" alt="">
                                    <p>Redes de Computadores</p>
                                </div>
                            </li>
                        </ul>
                        </div>
                    </div>
                <!-- fim mobile -->
                <div class="courses-container">
                    <div class="courses-list">
                        <div tabindex="1" class="course-item gallery-cell" onclick="opening('adminOpen')">
                            <img class="course-item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/necktie.svg" alt="">
                            <p>Administração</p>
                        </div>
                        <div tabindex="1" class="course-item gallery-cell" onclick="opening('accountingOpen')">
                            <img class="course-item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/calculator.svg" alt="">
                            <p>Contabilidade</p>
                        </div>
                        <div tabindex="1" class="course-item gallery-cell" onclick="opening('systemDevelopmentOpen')">
                            <img class="course-item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/instruction.svg" alt="">
                            <p>Desenvolvimento de Sistemas</p>
                        </div>
                        <div tabindex="1" class="course-item gallery-cell" onclick="opening('eletronicOpen')">
                            <img class="course-item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/lightning.svg" alt="">
                            <p>Eletrônica</p>
                        </div>
                        <div tabindex="1" class="course-item gallery-cell" onclick="opening('electrotechnicalOpen')">
                            <img class="course-item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/plug.svg" alt="">
                            <p>Eletrotécnica</p>
                        </div>
                        <div tabindex="1" class="course-item gallery-cell" onclick="opening('highSchoolOpen')">
                            <img class="course-item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/notebook-one.svg" alt="">
                            <p>Ensino Médio</p>
                        </div>
                        <div tabindex="1" class="course-item gallery-cell" onclick="opening('logisticsOpen')" id="delivery" >
                            <img class="course-item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/delivery.svg" alt="">
                            <p>Logística</p>
                        </div>
                        <div tabindex="1" class="course-item gallery-cell" onclick="opening('mechanicOpen')">
                            <img class="course-item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/factory-building.svg" alt="">
                            <p>Mecânica</p>
                        </div>
                        <div tabindex="1" class="course-item gallery-cell" onclick="opening('mechatronicOpen')">
                            <img class="course-item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/robot-one.svg" alt="">
                            <p>Mecatrônica</p>
                        </div>
                        <div tabindex="1" class="course-item gallery-cell" onclick="opening('networkOpen')">
                            <img class="course-item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/server.svg" alt="">
                            <p>Redes de Computadores</p>
                        </div>
                    </div>


                    <div class="course-content" id="adminOpen">
                        <div class="course-content-name">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/necktie.svg" alt="">
                            <div>
                                <h3>Administração</h3>
                                <p>Gestão e negócios</p>
                            </div>

                        </div>

                        <div class="course-content-description">
                            <p>Descrição:</p>
                            <h5>O técnico em administração é o profissional que participa da gestão dos recursos mercadológicos, humanos, financeiros, materiais e produtivos. Executa as rotinas administrativas, controla materiais, acompanha níveis de eficiência e produtividade e presta atendimento a clientes.</h5>
                        </div>
                        <div class="course-content-modality">
                            <p>Modalidades</p>
                            <p class="course-content-modality-align">Carga Horária</p>
                            <h5>Ensino técnico, M-TEC e ETIM</h5>
                            <h5 class="course-content-modality-align">1600 horas</p>
                        </div>
                        <div class="course-content-labor-market">
                            <p>Mercado de trabalho</p>
                            <h5>Instituições públicas, privadas e do terceiro setor. Podendo também, empreender ou trabalhar como autônomo.</h5>
                        </div>
                    </div>
                    <div class="course-content" id="accountingOpen">
                        <div class="course-content-name">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/calculator.svg" alt="">
                            <div>
                                <h3>Contabilidade</h3>
                                <p>Gestão e negócios</p>
                            </div>

                        </div>

                        <div class="course-content-description">
                            <p>Descrição:</p>
                            <h5>O técnico em administração é o profissional que participa da gestão dos recursos mercadológicos, humanos, financeiros, materiais e produtivos. Executa as rotinas administrativas, controla materiais, acompanha níveis de eficiência e produtividade e presta atendimento a clientes.</h5>
                        </div>
                        <div class="course-content-modality">
                            <p>Modalidades</p>
                            <p class="course-content-modality-align">Carga Horária</p>
                            <h5>Ensino técnico, M-TEC e ETIM</h5>
                            <h5 class="course-content-modality-align">1600 horas</p>
                        </div>
                        <div class="course-content-labor-market">
                            <p>Mercado de trabalho</p>
                            <h5>Instituições públicas, privadas e do terceiro setor. Podendo também, empreender ou trabalhar como autônomo.</h5>
                        </div>
                    </div>
                    <div class="course-content" id="systemDevelopmentOpen">
                        <div class="course-content-name">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instruction.svg" alt="">
                            <div>
                                <h3>Desenvolvimento de Sistemas</h3>
                                <p>Gestão e negócios</p>
                            </div>

                        </div>

                        <div class="course-content-description">
                            <p>Descrição:</p>
                            <h5>O técnico em administração é o profissional que participa da gestão dos recursos mercadológicos, humanos, financeiros, materiais e produtivos. Executa as rotinas administrativas, controla materiais, acompanha níveis de eficiência e produtividade e presta atendimento a clientes.</h5>
                        </div>
                        <div class="course-content-modality">
                            <p>Modalidades</p>
                            <p class="course-content-modality-align">Carga Horária</p>
                            <h5>Ensino técnico, M-TEC e ETIM</h5>
                            <h5 class="course-content-modality-align">1600 horas</p>
                        </div>
                        <div class="course-content-labor-market">
                            <p>Mercado de trabalho</p>
                            <h5>Instituições públicas, privadas e do terceiro setor. Podendo também, empreender ou trabalhar como autônomo.</h5>
                        </div>
                    </div>
                    <div class="course-content" id="eletronicOpen">
                        <div class="course-content-name">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lightning.svg" alt="">
                            <div>
                                <h3>Eletrônica</h3>
                                <p>Gestão e negócios</p>
                            </div>

                        </div>

                        <div class="course-content-description">
                            <p>Descrição:</p>
                            <h5>O técnico em administração é o profissional que participa da gestão dos recursos mercadológicos, humanos, financeiros, materiais e produtivos. Executa as rotinas administrativas, controla materiais, acompanha níveis de eficiência e produtividade e presta atendimento a clientes.</h5>
                        </div>
                        <div class="course-content-modality">
                            <p>Modalidades</p>
                            <p class="course-content-modality-align">Carga Horária</p>
                            <h5>Ensino técnico, M-TEC e ETIM</h5>
                            <h5 class="course-content-modality-align">1600 horas</p>
                        </div>
                        <div class="course-content-labor-market">
                            <p>Mercado de trabalho</p>
                            <h5>Instituições públicas, privadas e do terceiro setor. Podendo também, empreender ou trabalhar como autônomo.</h5>
                        </div>
                    </div>
                    <div class="course-content" id="electrotechnicalOpen">
                        <div class="course-content-name">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plug.svg" alt="">
                            <div>
                                <h3>Eletrotécnica</h3>
                                <p>Gestão e negócios</p>
                            </div>

                        </div>

                        <div class="course-content-description">
                            <p>Descrição:</p>
                            <h5>O técnico em administração é o profissional que participa da gestão dos recursos mercadológicos, humanos, financeiros, materiais e produtivos. Executa as rotinas administrativas, controla materiais, acompanha níveis de eficiência e produtividade e presta atendimento a clientes.</h5>
                        </div>
                        <div class="course-content-modality">
                            <p>Modalidades</p>
                            <p class="course-content-modality-align">Carga Horária</p>
                            <h5>Ensino técnico, M-TEC e ETIM</h5>
                            <h5 class="course-content-modality-align">1600 horas</p>
                        </div>
                        <div class="course-content-labor-market">
                            <p>Mercado de trabalho</p>
                            <h5>Instituições públicas, privadas e do terceiro setor. Podendo também, empreender ou trabalhar como autônomo.</h5>
                        </div>
                    </div>
                    <div class="course-content" id="highSchoolOpen">
                        <div class="course-content-name">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/notebook-one.svg" alt="">
                            <div>
                                <h3>Ensino Médio</h3>
                                <p>Gestão e negócios</p>
                            </div>

                        </div>

                        <div class="course-content-description">
                            <p>Descrição:</p>
                            <h5>O técnico em administração é o profissional que participa da gestão dos recursos mercadológicos, humanos, financeiros, materiais e produtivos. Executa as rotinas administrativas, controla materiais, acompanha níveis de eficiência e produtividade e presta atendimento a clientes.</h5>
                        </div>
                        <div class="course-content-modality">
                            <p>Modalidades</p>
                            <p class="course-content-modality-align">Carga Horária</p>
                            <h5>Ensino técnico, M-TEC e ETIM</h5>
                            <h5 class="course-content-modality-align">1600 horas</p>
                        </div>
                        <div class="course-content-labor-market">
                            <p>Mercado de trabalho</p>
                            <h5>Instituições públicas, privadas e do terceiro setor. Podendo também, empreender ou trabalhar como autônomo.</h5>
                        </div>
                    </div>
                    <div class="course-content" id="logisticsOpen">
                        <div class="course-content-name">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/delivery.svg" alt="">
                            <div>
                                <h3>Logística</h3>
                                <p>Gestão e negócios</p>
                            </div>

                        </div>

                        <div class="course-content-description">
                            <p>Descrição:</p>
                            <h5>O técnico em administração é o profissional que participa da gestão dos recursos mercadológicos, humanos, financeiros, materiais e produtivos. Executa as rotinas administrativas, controla materiais, acompanha níveis de eficiência e produtividade e presta atendimento a clientes.</h5>
                        </div>
                        <div class="course-content-modality">
                            <p>Modalidades</p>
                            <p class="course-content-modality-align">Carga Horária</p>
                            <h5>Ensino técnico, M-TEC e ETIM</h5>
                            <h5 class="course-content-modality-align">1600 horas</p>
                        </div>
                        <div class="course-content-labor-market">
                            <p>Mercado de trabalho</p>
                            <h5>Instituições públicas, privadas e do terceiro setor. Podendo também, empreender ou trabalhar como autônomo.</h5>
                        </div>
                    </div>
                    <div class="course-content" id="mechanicOpen">
                        <div class="course-content-name">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/factory-building.svg" alt="">
                            <div>
                                <h3>Mecânica</h3>
                                <p>Gestão e negócios</p>
                            </div>

                        </div>

                        <div class="course-content-description">
                            <p>Descrição:</p>
                            <h5>O técnico em administração é o profissional que participa da gestão dos recursos mercadológicos, humanos, financeiros, materiais e produtivos. Executa as rotinas administrativas, controla materiais, acompanha níveis de eficiência e produtividade e presta atendimento a clientes.</h5>
                        </div>
                        <div class="course-content-modality">
                            <p>Modalidades</p>
                            <p class="course-content-modality-align">Carga Horária</p>
                            <h5>Ensino técnico, M-TEC e ETIM</h5>
                            <h5 class="course-content-modality-align">1600 horas</p>
                        </div>
                        <div class="course-content-labor-market">
                            <p>Mercado de trabalho</p>
                            <h5>Instituições públicas, privadas e do terceiro setor. Podendo também, empreender ou trabalhar como autônomo.</h5>
                        </div>
                    </div>
                    <div class="course-content" id="mechatronicOpen">
                        <div class="course-content-name">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/robot-one.svg" alt="">
                            <div>
                                <h3>Mecatrônica</h3>
                                <p>Gestão e negócios</p>
                            </div>

                        </div>

                        <div class="course-content-description">
                            <p>Descrição:</p>
                            <h5>O técnico em administração é o profissional que participa da gestão dos recursos mercadológicos, humanos, financeiros, materiais e produtivos. Executa as rotinas administrativas, controla materiais, acompanha níveis de eficiência e produtividade e presta atendimento a clientes.</h5>
                        </div>
                        <div class="course-content-modality">
                            <p>Modalidades</p>
                            <p class="course-content-modality-align">Carga Horária</p>
                            <h5>Ensino técnico, M-TEC e ETIM</h5>
                            <h5 class="course-content-modality-align">1600 horas</p>
                        </div>
                        <div class="course-content-labor-market">
                            <p>Mercado de trabalho</p>
                            <h5>Instituições públicas, privadas e do terceiro setor. Podendo também, empreender ou trabalhar como autônomo.</h5>
                        </div>
                    </div>
                    <div class="course-content" id="networkOpen">
                        <div class="course-content-name">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/server.svg" alt="">
                            <div>
                                <h3>Redes de Computadores</h3>
                                <p>Gestão e negócios</p>
                            </div>

                        </div>

                        <div class="course-content-description">
                            <p>Descrição:</p>
                            <h5>O técnico em administração é o profissional que participa da gestão dos recursos mercadológicos, humanos, financeiros, materiais e produtivos. Executa as rotinas administrativas, controla materiais, acompanha níveis de eficiência e produtividade e presta atendimento a clientes.</h5>
                        </div>
                        <div class="course-content-modality">
                            <p>Modalidades</p>
                            <p class="course-content-modality-align">Carga Horária</p>
                            <h5>Ensino técnico, M-TEC e ETIM</h5>
                            <h5 class="course-content-modality-align">1600 horas</p>
                        </div>
                        <div class="course-content-labor-market">
                            <p>Mercado de trabalho</p>
                            <h5>Instituições públicas, privadas e do terceiro setor. Podendo também, empreender ou trabalhar como autônomo.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/courses.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/splide.min.js"></script>








