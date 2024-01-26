<?php 

get_header();

while(have_posts()) {

    the_post(); ?>

<main>

    <section class="page-template">

    <div class="container">

        <h1> <?php the_title(); ?></h1>
        
        <?php the_content();?>

        <a href="tel:213-909-6015" class="cta btns-mobile-only">Llamar Ahora</a>

        <a href="sms:+951-529-3937?&body=Hi%20Norma,%20this%20is%20regarding%20the%20car%20listed%20on%20your%20website,%20Im%20interested%20in%20one%20car,%20and%20want%20to%20get%20in%20touch%20with%20you" class="cta-secondary btns-mobile-only">Enviar Texto</a>

        <a href="<?php echo site_url('/contacto');?>" class="cta-secondary">Enviar Email</a>

    </div> 
    
   </section>
</main>
    
    
<?php }

get_footer();
?>

