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
                            <h5>O técnico em Administração pode trabalhar em vários depar-tamentos. No setor de compras, por exemplo, pode elaborar pedidos de compra de produtos, cadastrar fornecedores e conferir a entrega das mercadorias adquiridas. Na área de produção, pode fazer planilhas de controle de processos e produtos. No departa-mento de vendas, também pode elaborar planilhas para acompa-nhar o desempenho, cadastrar clientes, preencher notas fiscais e gerar boletos bancários. No setor de Recursos Humanos, o técnico pode calcular salários e benefícios dos funcionários, auxiliando nos processos de contratação e demissão de pessoal. Em qualquer área, pode atender clientes e fornecedores e redigir documentos, como e-mails, memorandos e atas.</h5>
                        </div>
                        <div class="course-content-modality">
                            <p>Modalidades</p>
                            <p class="course-content-modality-align">Carga Horária</p>
                            <h5>Ensino técnico e Novotec</h5>
                            <h5 class="course-content-modality-align">1600 horas</p>
                        </div>
                        <div class="course-content-labor-market">
                            <p>Mercado de trabalho</p>
                            <h5>Empresas privadas, seja de comércio, serviço ou indústria, órgãos públicos (prefeituras, secretarias de governo, ministérios do governo federal etc.) e ONGs.</h5>
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
                            <h5>Ajuda na preparação dos documentos necessários para a abertura ou o encerramento de uma empresa. Calcula os tributos (impostos, taxas e contribuições) que uma empresa deve pagar ao governo. Emite notas fiscais, gera boletos bancários e guias para o pagamento dos tributos. Registra os bens comprados e vendidos pela empresa. Elabora planilhas de controle de bens ou de estoque de mercadorias e produtos. Organiza e arquiva documentos. Auxilia na produção de relatórios diversos referentes às contas da empresa, ao cálculo do lucro ou prejuízo, do desempenho de vendas, das dívidas e dos demais demonstrativos de resultados.</h5>
                        </div>
                        <div class="course-content-modality">
                            <p>Modalidades</p>
                            <p class="course-content-modality-align">Carga Horária</p>
                            <h5>Ensino técnico e Novotec</h5>
                            <h5 class="course-content-modality-align">1600 horas</p>
                        </div>
                        <div class="course-content-labor-market">
                            <p>Mercado de trabalho</p>
                            <h5>No setor de Contabilidade de qualquer tipo de empresa e em escritórios de Contabilidade.</h5>
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
                            <h5>É o profissional que analisa e projeta sistemas. Desenvolve, documenta, realiza testes e mantém sistemas de informação. Utiliza ambientes de desenvolvimento e linguagens de programação espe-cífica. Modela, implementa e mantém bancos de dados.</h5>
                        </div>
                        <div class="course-content-modality">
                            <p>Modalidades</p>
                            <p class="course-content-modality-align">Carga Horária</p>
                            <h5>Ensino técnico e Novotec</h5>
                            <h5 class="course-content-modality-align">1600 horas</p>
                        </div>
                        <div class="course-content-labor-market">
                            <p>Mercado de trabalho</p>
                            <h5>Em departamentos de desenvolvimento de sistemas de empresas, instituições públicas, entidades setoriais e organizações não governamentais. O técnico em Desenvolvimento de Sistemas atua também como profissional autônomo.</h5>
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
                            <h5>Executa projetos eletrônicos, atua em linhas de produção automatizadas, a que o mercado chama de Indústria 4.0, e montagem de equipamentos, com manutenção de computadores industriais e máquinas eletrônicas, coordenando equipes e reali-zando instalações.</h5>
                        </div>
                        <div class="course-content-modality">
                            <p>Modalidades</p>
                            <p class="course-content-modality-align">Carga Horária</p>
                            <h5>Ensino técnico e Novotec</h5>
                            <h5 class="course-content-modality-align">1600 horas</p>
                        </div>
                        <div class="course-content-labor-market">
                            <p>Mercado de trabalho</p>
                            <h5>Na fabricação de produtos eletrônicos, empresas de tele-comunicações, como emissoras de rádio e TV, empresas de segurança, informática, escritórios, como prestador de serviço especializado ou autônomo. </h5>
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
                            <h5>Projetos em eletrônica, instalações e manutenções elétricas em casas e indústrias. Pode atuar como assistente ou técnico em processos que envolvem componentes elétricos e eletrônicos e automatizados.</h5>
                        </div>
                        <div class="course-content-modality">
                            <p>Modalidades</p>
                            <p class="course-content-modality-align">Carga Horária</p>
                            <h5>Ensino técnico e Novotec</h5>
                            <h5 class="course-content-modality-align">1600 horas</p>
                        </div>
                        <div class="course-content-labor-market">
                            <p>Mercado de trabalho</p>
                            <h5>Em concessionárias de energia ou como eletricista na indús-tria ou empresas prestadoras de serviço. O técnico também pode trabalhar como autônomo.  </h5>
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
                            <h5>Ensino médio</h5>
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
                            <h5>Pesquisa preços com fornecedores para elaborar orçamentos de compra de produtos e de transporte de mercadorias; controla a entrada e a saída de mercadorias do estoque; confere os produtos recebidos de acordo com a nota fiscal, verificando defeitos, prazos de validade, além de resolver os procedimentos para a devolução dos itens com problema; separa no estoque as mercadorias que foram compradas para serem despachadas; dimensiona as quantidades de cargas e de produtos que cabem em cada tipo de transporte e local de estoque; pesquisa e sugere opções de trans-porte e rotas conforme a carga; rastreia o produto ou mercadoria que está sendo transportado e acompanha o fluxo de entrega para alimentar os bancos de dados da empresa.</h5>
                        </div>
                        <div class="course-content-modality">
                            <p>Modalidades</p>
                            <p class="course-content-modality-align">Carga Horária</p>
                            <h5>Ensino técnico e Novotec</h5>
                            <h5 class="course-content-modality-align">1600 horas</p>
                        </div>
                        <div class="course-content-labor-market">
                            <p>Mercado de trabalho</p>
                            <h5>Indústrias, comércios, empresas de transporte, empresas de e-commerce, empresas de serviços de logística e centros de distribuição.</h5>
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
                            <h5>Lidera os processos produtivos caracterizados por movimento, realiza fiscalizações e controle de qualidade, regula máquinas e projeta equipamentos. </h5>
                        </div>
                        <div class="course-content-modality">
                            <p>Modalidades</p>
                            <p class="course-content-modality-align">Carga Horária</p>
                            <h5>Ensino técnico e Novotec</h5>
                            <h5 class="course-content-modality-align">1600 horas</p>
                        </div>
                        <div class="course-content-labor-market">
                            <p>Mercado de trabalho</p>
                            <h5>Em qualquer setor da indústria, em empresas que prestam serviços de manutenção e consultoria técnica, nas áreas de vendas, comercial, de metrologia e instrumentação. </h5>
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
                            <h5>Desenvolve produtos e processos de fabricação, programa máquinas, desenvolve robôs industriais, faz manutenção e opera máquinas, lidera e treina equipes nas linhas de produção. </h5>
                        </div>
                        <div class="course-content-modality">
                            <p>Modalidades</p>
                            <p class="course-content-modality-align">Carga Horária</p>
                            <h5>Ensino técnico e Novotec</h5>
                            <h5 class="course-content-modality-align">1600 horas</p>
                        </div>
                        <div class="course-content-labor-market">
                            <p>Mercado de trabalho</p>
                            <h5>Nos diversos seguimentos da Indústria, em empresas de manutenção e automação, como prestador de serviço autônomo.</h5>
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
                            <h5>Instala e configura computadores e equipamentos de infor-mática em rede. É responsável também por administrar, manter e analisar redes de computadores. O técnico instala ainda sistemas operacionais para os servidores que gerenciam as redes e configura o compartilhamento de recursos e as permissões de segurança entre as máquinas e os usuários. Além disso, o profissional monta os cabos e os armários de telecomunicações que abrigam servi-dores e outros equipamentos para rede; cuida da documentação, listando os dispositivos utilizados e executa projetos de implan-tação de redes de computadores em empresas.</h5>
                        </div>
                        <div class="course-content-modality">
                            <p>Modalidades</p>
                            <p class="course-content-modality-align">Carga Horária</p>
                            <h5>Ensino técnico e Novotec</h5>
                            <h5 class="course-content-modality-align">1600 horas</p>
                        </div>
                        <div class="course-content-labor-market">
                            <p>Mercado de trabalho</p>
                            <h5>Em qualquer empresa que necessite de instalação e manu-tenção de redes de computadores, especialmente as empresas de telecomunicações e telemarketing, além de órgãos públicos.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/courses.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/splide.min.js"></script>








