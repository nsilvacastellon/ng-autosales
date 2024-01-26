<?php get_header();?>

<main>

            <section class="hero-section">

                <div class="transparent-div">

                    <div class="container">

                        

                            <h1 class="hero-title">Venta de carros usados en la ciudad de Azusa, California.</h1>

                            <a href="<?php echo site_url('/contacto');?>" class="cta">Contáctanos</a>

                        

                    </div><!-- container ends -->
                </div><!-- transparent-dev ends -->

            </section>


            <section class="blog-section">
                <div class="container">

                    <h2 class=""> Listado de Autos en Venta:</h2>

                    <div class="blog-item-parent">

                    <?php 
                    
                    $homepageCars = new WP_Query(array(
                        'posts_per_page' => 20,
                        'post_type' => 'car'
                        
                    ));

                    while ($homepageCars->have_posts()) {
                        $homepageCars->the_post(); 
                        if (have_posts()) {?>
                    
                <div class="blog-item-child">
            <!-- <article class="blog-item"> -->
                <h2 class="blog-item-h2"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
                <div class="feature-img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('index-post-thumbnail'); ?></a></div>

                <p><span class="spec-label">Precio:</span> <i class="fas fa-money-bill-wave single-car-icons"></i> <?php the_field('precio')?></p>
                <p><span class="spec-label">Marca:</span> <i class="fas fa-car single-car-icons"></i> <?php the_field('marca')?></p>
                <p><span class="spec-label">Año:</span> <i class="far fa-calendar-alt single-car-icons"></i> <?php the_field('ano')?></p>
                <p><span class="spec-label">Millas:</span> <i class="fas fa-tachometer-alt single-car-icons"></i> <?php the_field('millas')?></p>

                <p class="excerpt"><?php echo wp_trim_words(get_the_content(), 18); ?></p>
                
                <p class="read-more"><a class="cta-secondary" href="<?php the_permalink(); ?>">Mas Detalles &raquo;</a></p>
            <!-- </article> -->
            </div> <!-- blog-item-child ends here -->
            
            <?php } 
            
            else {  echo '<h3>No se encontro ninguna entrada de blog, intenta más tarde.</h3>' ;  }
            
            ?>

            <?php
            } wp_reset_postdata();
            ?>
            </div> <!-- blog-item-parent ends here -->


                </div>
            </section>

        
    </main>


<?php get_footer();?>