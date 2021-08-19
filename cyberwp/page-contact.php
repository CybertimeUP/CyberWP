<?php
    //Template Name: Contact
?>
        <?php
            get_header();
        ?>
</div>
</section> 

        <section style="padding: 40px 0;">
            <div class="center">
                <?php the_title(); ?>
            </div>
        </section>   
        
        <section class="contact">
            <div class="center">
                <div class="w50 contact-info">
                    <h2>Most importantly, <br />first conversation.</h2>
                    <br />

                   <!-- Dinamic repeat using PHP -->

                   <?php 
                        while(have_rows('contact_type_name')){
                        the_row();
                   ?>
                        <p><b><?php echo get_sub_field('category'); ?>:</b> <?php echo get_sub_field('value'); ?></p>
                    <?php } ?>


                <div class="map-container">
                    <div id="map"></div>
                </div><!--map-->
                </div><!--w50 contact-info-->

                <div class="w50 contact-form">
                <?php the_content(); ?>
                    <!--
                    <form>
                        <input placeholder="Name" type="text" />
                        <input placeholder="E-mail" type="text" />
                        <input placeholder="Cell phone" type="text" />
                        <select>
                            <option>General</option>
                            <option>Support</option>
                        </select>
                        <textarea placeholder="Message"></textarea>
                        <input type="submit" value="Send!">
                    </form> -->

                </div>
                <div class="clear"></div>
            </div><!--center-->
        </section>
 
<?php get_footer(); ?>
  
   