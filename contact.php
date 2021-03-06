<?php get_header(); ?>
<!-- /* 
    Template Name: Contact
*/ -->
                <div class="contact-landing-content">
                    <div class="contact-landing-text">
                        <h3 class="contact-landing-text-hashtag">#VemProHAS</h3>
                        <h1 class="contact-landing-text-title">Contato</h1>
                    </div>
                    <div class="contact-container">
                        <form class="contact-form" id="contact-form" method="POST" action="contact.php">
                            <div class="form-itens">
                                <div class="form-item">
                                    <h3>Nome:</h3>
                                    <input type="text" name="message-name" required>
                                </div>
                                <div class="form-item">
                                    <h3>E-mail:</h3>
                                    <input type="email" name="message-email" required>
                                </div>
                                <div class="form-item">
                                    <h3>Assunto:</h3>
                                    <input type="text" name="message-subject" required>
                                </div>
                                <div class="form-item">
                                    <h3>Mensagem:</h3>
                                    <textarea class="form-message"name="form-message" id="content" cols="30" rows="10" required></textarea>
                                </div>
                                <input disabled class="form-submit" type="submit" name="submit" value="Enviar">
                            </div>
                        </form>
                        <?php
                            function sendMail()
                            {
                                $to = "";
                                $subject = $_POST['message-subject'];
                                $message = $_POST['form-message'];
                                $email = $_POST['message-email'];
                                $headers = "Cc: " . $email;
                                // add_action('wp_mail_failed', function ($error) {
                                //     wp_die("<pre>".print_r($error, true)."</pre>");
                                // });
                                $mailResult = wp_mail( $to, $subject, $message, $headers);
                                if ($mailResult == false){
                                    echo json_encode("Protocolo Invalido");
                                }
                                else{
                                    echo json_encode("Protocolo OK");
                                }                   
                            }
                            if (isset($_POST['submit']))
                            {
                                sendMail();
                            }
                        ?>
                        
                    </div>
                </div>
            </div>
            
            <div class="empty-div">
            </div>
                
            <!-- <div class="contact-map">
                <h2 class="contact-map-title">Localiza????o da Escola</h2>
                <div class="contact-frame-map">
                    <iframe class="extension-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.3621780924277!2d-46.59859718492427!3d-23.519472565932055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13  1!3m3!1m2!1s0x94ce58cbc5bfbf33%3A0xabc0b13f35ba14cf!2sETEC%20Professor%20Hor%C3%A1cio%20Augusto%20da%20Silveira!5e0!3m2!1spt-BR!2sbr!4v1620949711567!5m2!1spt-BR!2sbr" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>        
            </div> -->
            <div class="extension-item" id="contact-item">
                <div class="extension-content">
                    <h2 class="extension-title">Informa????es da Escola</h2>
                    <h3>Endere??o</h3>
                    <p class="extension-paragraph">ETEC Hor??cio Augusto da Silveira</p>
                    <p class="extension-paragraph">R. Alc??ntara, 113 <br> Vila Guilherme, S??o Paulo - SP, 02110-010</p>
                    <h3>Contato</h3>
                    <p class="extension-paragraph">Telefone: (11) 2905-1125 <br> Email:</p>
                    <h3>Redes Sociais</h3>
                    <div class="extension-divaragraph">
                    <a href="https://www.facebook.com/etechoracioaugusto"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.svg"></a><br>
                    <a href="https://www.instagram.com/etechoracio/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg"></a><br>
                    <a href="https://www.linkedin.com/company/etechoracio/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin.svg"></a><br>
                    <a href="https://bit.ly/etechas_yt"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/youtube.svg"></a><br>
                    <a href="https://vm.tiktok.com/ZMRb5UDa9/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/tiktok.svg"></a><br>
                    </div>
                </div>
                <iframe class="extension-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.3621780924277!2d-46.59859718492427!3d-23.519472565932055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13  1!3m3!1m2!1s0x94ce58cbc5bfbf33%3A0xabc0b13f35ba14cf!2sETEC%20Professor%20Hor%C3%A1cio%20Augusto%20da%20Silveira!5e0!3m2!1spt-BR!2sbr!4v1620949711567!5m2!1spt-BR!2sbr" width="40%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
<?php get_footer(); ?>
<!-- <script src="<?php echo get_template_directory_uri(); ?>/assets/js/contact.js"></script> -->