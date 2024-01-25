<?php 

get_header();?>

<div class="container">
<?php
while(have_posts()) {

    the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <!-- <p class="blog-author-info">Publicado por: <?php the_author_posts_link(); ?> Fecha: <?php the_time('n-j-Y'); ?> Categoria(s): <?php echo get_the_category_list(', '); ?></p> -->
    <div class="feature-img"><img src="<?php the_field('foto-1'); ?>" alt=""></div>
    <span>Precio: <?php the_field('precio')?></span>
    <span>Marca: <?php the_field('marca')?></span>
    <span>Año: <?php the_field('ano')?></span>
    <span>Millas: <?php the_field('millas')?></span>
    <div class="single-blog-content">
        <?php the_content(); ?>
    </div>
    <img src="<?php the_field('foto-1')?>" alt="">
    <img src="<?php the_field('foto-2')?>" alt="">
    <img src="<?php the_field('foto-3')?>" alt="">
    <img src="<?php the_field('foto-4')?>" alt="">
    <img src="<?php the_field('foto-5')?>" alt="">
    <img src="<?php the_field('foto-6')?>" alt="">
    <img src="<?php the_field('foto-7')?>" alt="">
    <img src="<?php the_field('foto-8')?>" alt="">
    <img src="<?php the_field('foto-9')?>" alt="">
    <img src="<?php the_field('foto-10')?>" alt="">
    
<?php } ?>


</div><!--.container ends here -->

<div class="container">

<div class="author-related-posts">

    <h2 class=""> Otros articulos del mismo autor:</h2>

    <div class="blog-item-parent">

                    <?php 

                    
                    $authorRelatedPosts = new WP_Query(array(
                        'posts_per_page' => 4,
                        'post__not_in' => array(get_the_ID()), // exclude current post ID from the result
                        'author' => get_the_author_meta('ID')// only display posts by the current author post
                        
                    ));
                    
                    while ($authorRelatedPosts->have_posts()) {
                        $authorRelatedPosts->the_post(); ?>
            
                <div class="blog-item-child">
                    <!-- <article class="blog-item"> -->
                        <div class="feature-img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('author-post-thumbnail'); ?></a></div>
                        <h2 class="blog-item-h2"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
                        <!-- <p class="blog-author-info">Publicado por: <?php the_author_posts_link(); ?> Fecha: <?php the_time('n-j-Y'); ?> Categoria(s): <?php echo get_the_category_list(', '); ?></p> -->
                        <!-- <p class="excerpt"><?php echo wp_trim_words(get_the_content(), 18); ?></p> -->
                        <!-- <p class="read-more"><a class="cta" href="<?php the_permalink(); ?>">Leer mas &raquo;</a></p> -->
                    <!-- </article> -->
                </div> <!-- blog-item-child ends here -->
            

            <?php
            } wp_reset_postdata();
            ?>
    </div> <!-- blog-item-parent ends here -->

</div> <!-- .author-related-posts ends here -->


<a class="cta" href="<?php echo site_url('/blog') ?>">Volver a Blogs...</a>


</div><!--.container ends here -->


<?php
get_footer();
?>