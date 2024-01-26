<?php 

get_header();?>


<section class="single-car-layout">

            <div class="container">

            <?php
                while(have_posts()) {

                    the_post(); ?>

                <h1><?php the_title(); ?></h1>

                <div class="single-car-layout-flex-parent">

                    <div class="single-car-main-img">

                        <img src="<?php the_field('foto-1'); ?>" alt="">

                    </div>

                    <div class="single-car-specs">

                        <h3><span class="spec-label">Especificaciones:</span></h3>

                        <p><span class="spec-label">Precio:</span> <i class="fas fa-money-bill-wave single-car-icons"></i> <?php the_field('precio')?></p>
                        <p><span class="spec-label">Marca:</span> <i class="fas fa-car single-car-icons"></i> <?php the_field('marca')?></p>
                        <p><span class="spec-label">Modelo:</span> <i class="fas fa-arrow-right single-car-icons"></i> <?php the_field('modelo')?></p>
                        <p><span class="spec-label">Año:</span> <i class="far fa-calendar-alt single-car-icons"></i> <?php the_field('ano')?></p>
                        <p><span class="spec-label">Millas:</span> <i class="fas fa-tachometer-alt single-car-icons"></i> <?php the_field('millas')?></p>
                        <p><span class="spec-label">Color:</span> <i class="fas fa-tint single-car-icons"></i> <?php the_field('color')?></p>
                        <p><span class="spec-label">Estilo:</span> <i class="fas fa-paint-brush single-car-icons"></i> <?php the_field('estilo')?></p>
                        <p><span class="spec-label">Transmision:</span> <i class="fas fa-project-diagram single-car-icons"></i> <?php the_field('transmision')?></p>
                        <p><span class="spec-label">Maquina:</span> <i class="fas fa-cogs single-car-icons"></i> <?php the_field('maquina')?></p>
                        <p><span class="spec-label">Combustible:</span> <i class="fas fa-gas-pump single-car-icons"></i> <?php the_field('combustible')?></p>
                        <p><span class="spec-label">Titulo:</span> <i class="fas fa-file-contract single-car-icons"></i> <?php the_field('titulo')?></p>
                        
                    </div>

                </div><!--.single-car-layout-flex-parent ends here -->

                <a href="tel:213-909-6015" class="cta btns-mobile-only">Llamar Ahora</a>

                <a href="sms:+951-529-3937?&body=Hi%20Norma,%20this%20is%20regarding%20the%20car%20listed%20on%20your%20website,%20Im%20interested%20in%20one%20car,%20and%20want%20to%20get%20in%20touch%20with%20you" class="cta-secondary btns-mobile-only">Enviar Texto</a>


                <a href="<?php echo site_url('/contacto');?>" class="cta-secondary">Enviar Email</a>


                <div class="single-car-layout-description">

                    <h2><span class="spec-label">Descripcion:</span></h2>

                    <?php the_content(); ?>

                    
                </div>



                <div class="single-car-layout-images">

                    <div class="single-car-layout-images-flex-parent">

                            <div class="single-car-layout-images-flex-child">
                            <img src="<?php the_field('foto-1')?>" alt="">
                            </div>
                            <div class="single-car-layout-images-flex-child">
                            <img src="<?php the_field('foto-2')?>" alt="">
                            </div>


                    </div><!--.single-car-layout-images-flex-parent -->


                    <div class="single-car-layout-images-flex-parent">

                        <div class="single-car-layout-images-flex-child">
                        <img src="<?php the_field('foto-3')?>" alt="">
                        </div>
                        <div class="single-car-layout-images-flex-child">
                        <img src="<?php the_field('foto-4')?>" alt="">
                        </div>


                </div><!--.single-car-layout-images-flex-parent -->



                <div class="single-car-layout-images-flex-parent">

                    <div class="single-car-layout-images-flex-child">
                    <img src="<?php the_field('foto-5')?>" alt="">
                    </div>
                    <div class="single-car-layout-images-flex-child">
                    <img src="<?php the_field('foto-6')?>" alt="">
                    </div>


            </div><!--.single-car-layout-images-flex-parent -->


            <div class="single-car-layout-images-flex-parent">

                <div class="single-car-layout-images-flex-child">
                <img src="<?php the_field('foto-7')?>" alt="">
                </div>
                <div class="single-car-layout-images-flex-child">
                <img src="<?php the_field('foto-8')?>" alt="">
                </div>


        </div><!--.single-car-layout-images-flex-parent -->



        <div class="single-car-layout-images-flex-parent">

            <div class="single-car-layout-images-flex-child">
            <img src="<?php the_field('foto-9')?>" alt="">
            </div>
            <div class="single-car-layout-images-flex-child">
            <img src="<?php the_field('foto-10')?>" alt="">
            </div>



    <?php } ?>


    </div><!--.single-car-layout-images-flex-parent -->


                </div><!--.single-car-layout-images-->


                <a href="tel:213-909-6015" class="cta btns-mobile-only">Llamar Ahora</a>

                <a href="sms:+951-529-3937?&body=Hi%20Norma,%20this%20is%20regarding%20the%20car%20listed%20on%20your%20website,%20Im%20interested%20in%20one%20car,%20and%20want%20to%20get%20in%20touch%20with%20you" class="cta-secondary btns-mobile-only">Enviar Texto</a>

                <a href="<?php echo site_url('/contacto');?>" class="cta-secondary">Enviar Email</a>
            
            </div><!--.container ends here -->

      </section><!--.single-car-layout ends here -->  

      <?php
get_footer();
?>