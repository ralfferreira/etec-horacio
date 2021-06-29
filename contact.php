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
                        <form class="contact-form" method="POST" action="">
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
                                <input class="form-submit" type="submit" name="submit" value="Enviar">
                            </div>
                        </form>
                        <?php
                            function sendMail()
                            {
                                $to = "guilherme.2010.guilherme@gmail.com";
                                $subject = $_POST['message-subject'];
                                $message = $_POST['form-message'];
                                $email = $_POST['message-email'];
                                $headers = "Cc: " . $email;
                                echo $a;
                                // add_action('wp_mail_failed', function ($error) {
                                //     wp_die("<pre>".print_r($error, true)."</pre>");
                                // });
                                $mailResult = "aaa";
                                $mailResult = wp_mail( $to, $subject, $message, $headers);
                                if ($mailResult == false){
                                    echo ("não");
                                }
                                else{
                                    echo ("enviado");
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
<?php get_footer(); ?>