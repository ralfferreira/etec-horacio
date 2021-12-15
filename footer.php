<footer class="footer">
            <div class="footer-partners">
                <h2>Parceiros</h2>
                <script>
                    document.addEventListener( 'DOMContentLoaded', function () {
                        new Splide( '.footer-partners-img', {
                            type   : 'loop',
                            drag   : 'free',
                            focus  : 'center',
                            perPage: 4,
                            autoScroll: {
                                speed: 1.4,
                                pauseOnHover: true,
                                pauseOnFocus: false,
                            },
                            pagination: false,
                        } ).mount(window.splide.Extensions);
                    } );
                </script>
                <div class="footer-partners-img">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <a href="https://www.microsoft.com/pt-br/microsoft-teams/group-chat-software" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/teams.png" alt="Teams logo"></a>
                            </li>
                            <li class="splide__slide">
                                <a href="https://www.totvs.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/totvs.png" alt="TOTVS logo"></a>
                            </li>
                            <li class="splide__slide">
                                <a href="https://aws.amazon.com/pt/education/awseducate/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/aws.png" alt="AWS logo"></a>
                            </li>
                            <li class="splide__slide">
                                <a href="https://www.cisco.com/c/pt_br/index.html" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cisco.png" alt="Cisco logo"></a>
                            </li>
                            <li class="splide__slide">
                                <a href="https://www.jabrasil.org.br/sp" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/jasp.png" alt="JA SP logo"></a>
                            </li>
                            <li class="splide__slide">
                                <a href="https://www.microsoft.com/pt-br" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/microsoft.png" alt="Microsoft logo"></a>
                            </li>
                            <li class="splide__slide">
                                <a href="https://www.oracle.com/br/index.html" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/oracle.png" alt="Oracle logo"></a>
                            </li>
                            <li class="splide__slide">
                                <a href="https://www.ibm.com/br-pt" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ibm.svg" alt="IBM logo"></a>
                            </li>
                            <li class="splide__slide">
                                <a href="https://www.andra.com.br/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/andra.png" alt="Andra logo"></a>
                            </li>
                            <li class="splide__slide">
                                <a href="http://www.irani.com.br/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/irani.png" alt="Irani logo"></a>
                            </li>
                            <li class="splide__slide">
                                <a href="https://nubank.com.br/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/nubank.png" alt="Nubank logo"></a>
                            </li>
                        </ul>
                    </div>                    
                </div>
            </div>
            <div class="footer-row">
                <div class="footer-sitemap">
                    <h2>Mapa do site</h2>
                    <ul>
                        <li><a href="<?php bloginfo('url');?>">Inicio</a></li>
                        <li><a href="<?php bloginfo('url');?>/cursos">Cursos</a></li>
                        <li><a href="<?php bloginfo('url');?>/extensoes">Extensões</a></li>
                        <li><a href="<?php bloginfo('url');?>/contato">Contato</a></li>
                        <li><a href="<?php bloginfo('url');?>/blog">Notícias</a></li>
                    </ul>
                </div>
                <div class="footer-social-media">
                    <h2>Redes</h2>
                    <ul>
                        <li><a href="https://www.facebook.com/etechoracioaugusto" target="_blank">Facebook</a></li>
                        <li><a href="https://www.instagram.com/etechoracio/" target="_blank">Instagram</a></li>
                        <li><a href="https://www.linkedin.com/company/etechoracio/" target="_blank">Linkedin</a></li>
                        <li><a href="https://bit.ly/etechas_yt" target="_blank">Youtube</a></li>
                        <li><a href="https://vm.tiktok.com/ZMRb5UDa9/" target="_blank">TikTok</a></li>
                    </ul>
                </div>
                <div class="footer-school-location">
                    <h2>Localização</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.3621780924277!2d-46.59859718492427!3d-23.519472565932055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13  1!3m3!1m2!1s0x94ce58cbc5bfbf33%3A0xabc0b13f35ba14cf!2sETEC%20Professor%20Hor%C3%A1cio%20Augusto%20da%20Silveira!5e0!3m2!1spt-BR!2sbr!4v1620949711567!5m2!1spt-BR!2sbr" width="568" height="328" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <?php wp_footer(); ?>
        </footer>
    </div>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/splide-extension-auto-scroll.js"></script>
</body>
</html>
            