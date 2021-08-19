<?php
            $title = get_the_title();
?> 
        <footer <?php if($title == 'Contact'){echo 'style="padding: 20px 0;"';} ?>>   
        <?php
            if($title != 'Contact' && is_404() == false){
        ?>
        <section class="methodology">
            <div class="center">
                <h2>Learn about our methodology</h2>
                <p>What do you think about doing what we like to do most? Talk!<br />Contact by email or cell phone.</p>
                <a href="<?php echo get_site_url(); ?>/contact">Contact Us</a>
            </div><!--center-->
        </section><!--methodology-->
        <?php
            }
        ?>
            <div class="center">
                <div class="col-footer">
                    <h2>Support</h2>
                    <a href="">Blog</a>
                    <a href="">FAQ's</a>
                </div>
                <div class="col-footer">
                    <h2>Consultancy</h2>
                    <a href="">Methodology</a>
                    <a href="">Cases</a>
                </div>
                <div class="col-footer">
                    <h2>Company</h2>
                    <a href="">About</a>
                    <a href="">Privacy Policy</a>
                </div>
                <div style="width: 40%;text-align: right;" class="col-footer">
                    <img src="<?php echo get_theme_root_uri(); ?>/cyberwp/images/logo-footer.png" />
                </div><!--col-footer--
            </div><!--center-->
        </footer>
        <br />
        <br />
    <?php wp_footer(); ?>
    <script src="<?php echo get_theme_root_uri(); ?>/cyberwp/js/jquery.js"></script>
    <script src="<?php echo get_theme_root_uri(); ?>/cyberwp/js/slick.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArQlNY-BplV2Lw9ZQFA80pTxfN6nV_30M"></script>
    <script src="<?php echo get_theme_root_uri(); ?>/cyberwp/js/map.js"></script>
    <script type="text/javascript">
        $('section.customers-slider .slider-container').slick({
            dots: true,
            arrows:false,
            infinite: false,
            speed:1000,
            slidesToShow: 3,
            autoplay: true,
            autoplaySpeed: 3000,
            pauseOnHover:false,
            responsive: 
            [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                }
            }
            ]
        });

        $('section.testimonials .testimonials-box').slick({
            dots: true,
            arrows:false,
            infinite: true,
            speed:1000,
            slidesToShow: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            centerMode: false
        });

    </script>
    <script type="text/javascript">
        //Responsive Menu.
        $('.menu-mobile i').click(function(){
            $('.menu-mobile').find('ul').slideToggle();
        })
    </script>
</body>
</html>