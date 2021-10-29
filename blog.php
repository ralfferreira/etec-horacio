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
                    <?php

                    // Get the current queried object
                    $term    = get_queried_object();
                    $term_id = ( isset( $term->term_id ) ) ? (int) $term->term_id : 0;
                    $categories = get_categories( array(
                        'hide_empty' => 0, // change to 1 to hide categores not having a single post
                    ) );
                    ?>
                <div class="category-list splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                        <?php
                        foreach ( $categories as $category ) 
                        {
                            $cat_ID        = (int) $category->term_id;
                            $category_name = $category->name;

                            // When viewing a particular category, give it an [active] class
                            $cat_class = ( $cat_ID == $term_id ) ? 'active' : 'not-active';

                            // I don't like showing the [uncategoirzed] category
                            if ( strtolower( $category_name ) != 'uncategorized' )
                            {
                                    echo '<li class="splide__slide">
                                            <a class="'. $cat_class .' category-list-item " 
                                            href="' . get_category_link( $category->term_id ) . '">' .  
                                            $category->name . 
                                            '</a> </li>';
                            }
                        }
                        ?>
                        </ul>
                    </div>
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

                            <div class="news-list-post-text">
                            <?php add_filter( 'the_title', 'max_title_length'); ?>
                                <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
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
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/category-list.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/splide.min.js"></script>