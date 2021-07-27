<?php get_header(); ?>
<!-- /* 
    Template Name: Blog
*/ -->
                <div class="blog-landing-content">
                        <div class="blog-landing-text">
                            <h3 class="blog-landing-text-hashtag">#VemProHAS</h3>
                            <h1 class="blog-landing-text-title">Notícias e <br>Comunicados</h1>
                        </div>
                    </div>
                </div>
                <div class="category">
                    <div class="category-list">
                        <a class="category-list-item" href="">Escola</a>
                        <a class="category-list-item" href="">Institucional</a>
                        <a class="category-list-item" href="">Artigos</a>
                        <a class="category-list-item" href="">Comunicados</a>
                    </div>

                    <div class="news-list">
                        <?php 
                            $args = array(
                                'posts_per_page' => 8,
                                'post_type'      => 'post',
                                'paged'          => get_query_var( 'paged' ),
                            );
                            $wp_query = new WP_Query( $args );

                        ?>
                        <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                        <article class="news-list-post">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testbackground.webp">
                            <div class="news-list-post-text">
                                <h2><?php the_title();?></h2>
                                <p>Postado por <?php the_author();?></p>
                            <div>
                        </article>
                        <?php 
                            endwhile;
                         ?>

                    </div>
                    <div class="news-pagination">
                            <?php
                                $args = array(
                                    'prev_text'          => __('<'),
                                    'next_text'          => __('>'),
                                    'type'               => 'plain',
                                    'add_args'           => false,
                                    'add_fragment'       => '',
                                    'before_page_number' => '',
                                    'after_page_number'  => '',
                                );
                                the_posts_pagination($args);

                            ?>
                    </div>
                </div>
<?php get_footer(); ?>
