<?php 

get_header();

while(have_posts()) {

    the_post(); ?>

<main>

    <div class="contact-page">

        <div class="container">

            <h1> <?php the_title();?> </h1>

            <div class="container-form">

                <div class="form-wrapper">

                    <h2 class="form-header spec-label">Use este formulario para contactar a NG Auto Sales:</h2>

                    <form action="https://formsubmit.co/normadiaz1228@gmail.com" method="POST" class="form-element">
                        
                        <div class="input-flex-parent">

                            <div class="input-flex-child">
                                <label for="name">Nombre:</label>
                                <input type="text" id="name" name="name" size="25" placeholder="Su nombre..." required>
                            </div>

                            <div class="input-flex-child">
                                <label for="name">Teléfono:</label>
                                <input type="text" id="phone" name="phone" size="25" placeholder="Su # de teléfono..." required>
                            </div>

                            <div class="input-flex-child">
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" size="25" placeholder="Su email..." required>
                            </div>

                        </div><!-- .input-flex-parent ends here-->

                        <div class="input-flex-parent">

                            <div class="input-flex-child">
                                <label for="message">Mensaje:</label>
                                <textarea name="message" id="message" cols="25" rows="5" placeholder="Su mensaje..." required></textarea>
                                <input type="hidden" name="_autoresponse" value="Hi, thank you for contacting me. I just received your message and I will get in contact with you as soon as possible">
                            </div>

                        </div><!-- .input flex parent ends here -->

                        <div class="input-flex-parent">

                            <div class="input-flex-child btn">
                                <button type="submit" class="cta">Enviar Mensaje</button>
                            </div>

                        </div><!-- .input-flex-parent ends here -->

                    </form><!-- form-element ends here -->

                </div><!-- form-wrapper ends here -->





            </div><!-- .container-form ends here -->

        </div><!-- .container ends here -->

    </div><!-- .contact-page ends here -->

        


    
</main>
    
    
<?php }

get_footer();
?>