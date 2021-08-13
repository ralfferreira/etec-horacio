<?php get_header(); ?>
                <div class="blog-landing-content">
                        <div class="blog-landing-text">
                            <h3 class="blog-landing-text-hashtag">#VemProHAS</h3>
                            <h1 class="blog-landing-text-title">Notícias e <br>Comunicados</h1>
                        </div>
                    </div>
                </div>
                <?php while(have_posts()):the_post(); ?>
                <div class="single-container">
                    <h2 class="single-title">
                        <?php the_title();?>
                    </h2>
                    <h3 class="single-author">
                        Postado por <?php the_author(); ?>
                    </h3>
                    <h3 class="single-author">
                        <?php the_date();?>
                    </h3>
                    <div class="single-content">
                        <?php the_content(); ?>
                    </div>
                    <div class="single-category">
                        <?php the_category(); ?>
                    </div>
                </div>
                <?php endwhile; ?>

<?php get_footer(); ?>