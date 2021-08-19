<?php
    //Template Name: Home
?>
<?php get_header(); ?>
<div class="clear"></div>
                <br />
                <br />
                <div class="w50 time-description">
                    <h2><?php the_field('top_call'); ?></h2>
                    <p>Consultancy specializing in startups, companies, especially people.</p>
                    <a target="_blank" href="https://cybertimeup.com">View demo</a>
                </div><!--w50-->
                <div class="w50 time-image">
                    <img src="<?php echo get_theme_root_uri(); ?>/cyberwp/images/equipe.png" />
                </div><!--w50-->
                <div class="clear"></div>
            </div><!--center-->
        </section><!--topo-->
        <div class="circle"><i class="fas fa-angle-down"></i></div>

        <!-- Insert dynamically content on the page -->

        <section class="page-content">

            <!-- // For add a content on the page

            <?php
                the_content();
            ?>

            -->

        </section>

<!-- 
    
ADD SHORTCODE ON PAGE HOME

<?php //the_content(); ?>             WITHOUT //

-->

        <section class="customers-slider">

        <!-- *** -->

            <div class="center">
            <div style="max-width: 700px;margin: 0 auto;overflow: hidden;" class="slider-container">
                <img src="<?php echo get_theme_root_uri(); ?>/cyberwp/images/amazon.png" />
                <img src="<?php echo get_theme_root_uri(); ?>/cyberwp/images/costco.png" />
                <img src="<?php echo get_theme_root_uri(); ?>/cyberwp/images/dominos.png" />
                <img src="<?php echo get_theme_root_uri(); ?>/cyberwp/images/uber.png" />
                <img src="<?php echo get_theme_root_uri(); ?>/cyberwp/images/walmart.png" />
                <img src="<?php the_field('top_image'); ?>" />
            </div><!--slider-container-->
            </div><!--center-->
        </section>

        <section class="differentials">

            <div class="center">
                <h2>We contribute end to end</h2>

                <div class="icons-differentials">

                    <div class="box-single-differentials">
                        <img src="<?php echo get_theme_root_uri(); ?>/cyberwp/images/icon1.png" />
                        <h3>Mobile Environments</h3>
                        <p>Make sure all your communication is aligned with your purpose, every word counts.</p>
                    </div><!--box-single-differentials-->

                    <div class="box-single-differentials">
                        <img src="<?php echo get_theme_root_uri(); ?>/cyberwp/images/icon2.png" />
                        <h3>Sites and Intranets</h3>
                        <p>A dialogue only happens when both parties speak and listen, make sure your audience understands you.</p>
                    </div><!--box-single-differentials-->

                    <div class="box-single-differentials">
                        <img src="<?php echo get_theme_root_uri(); ?>/cyberwp/images/icon3.png" />
                        <h3>One-to-one communication</h3>
                        <p>Digital is here to stay, without a doubt, but truly integrated communication requires clarity in decisions.</p>
                    </div><!--box-single-differentials-->

                </div><!--icons-differentials-->
            </div>

        </section>

        <section class="about-team">
            <div class="center">
                <div class="w50 team-description-2">
                    <h2>An experienced,<br/> communicative and cohesive team.</h2>
                    <p><?php the_field('about_home');  ?></p>
                </div><!--w50-->
                <div class="w50 img-team">
                    <img src="<?php echo get_theme_root_uri(); ?>/cyberwp/images/team.png" />
                </div><!--w50-->
                <div class="clear"></div>
            </div><!--center-->
        </section><!--about-team-->

        <section class="testimonials">
            <div class="center">
                <h2>Testimonials</h2>
                <div class="testimonials-box">
                    <div class="single-testimonial">
                        <p>The involvement and immersion of the team in their clients' businesses allow very coherent feedbacks to be given with an outside view, a view that is often necessary. This view corroborates the company's willingness to focus on its operating segment.</p>
                        <p>Jonathan Peixoto</p>
                        <img src="<?php echo get_theme_root_uri(); ?>/cyberwp/images/author.jpg" />
                    </div><!--single-testimonial-->
                    <div class="single-testimonial">
                        <p>The involvement and immersion of the team in their clients' businesses allow very coherent feedbacks to be given with an outside view, a view that is often necessary. This view corroborates the company's willingness to focus on its operating segment.</p>
                        <p>Jonathan Peixoto</p>
                        <img src="<?php echo get_theme_root_uri(); ?>/cyberwp/images/author.jpg" />
                    </div><!--single-testimonial-->
                    <div class="single-testimonial">
                        <p>The involvement and immersion of the team in their clients' businesses allow very coherent feedbacks to be given with an outside view, a view that is often necessary. This view corroborates the company's willingness to focus on its operating segment.</p>
                        <p>Jonathan Peixoto</p>
                        <img src="<?php echo get_theme_root_uri(); ?>/cyberwp/images/author.jpg" />
                    </div><!--single-testimonial-->
                </div><!--testimonials-box--> 
            </div><!--center-->
        </section>

<?php get_footer(); ?>
