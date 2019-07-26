   <?php
   /* Template Name: Facilities */
   get_header();
   while(have_posts()): the_post();
   ?>

   
      <div class="facilities">

        <section class="banner pad-70">
          <aside>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about.jpg">
          </aside>
          
          <div class="hldr">
            <article>
              <div class="hero">
                <h3 class="hero-title">Facilities</h3>
                <h5>Jump To:</h5>
                <ul class="pad-0 listn hero-list">
	
				   <?php
   $args = array('post_type' => 'facility', 'posts_per_page' => -1);
   $the_query = new WP_Query($args);
   if ( $the_query->have_posts() ) {  while ( $the_query->have_posts() ): $the_query->the_post(); ?>
    
    	<li >
    		<!-- class="active" -->
            <a href="#<?php echo get_post_field( 'post_name')  ?>"><?php echo rtrim(get_the_title(), '(Port Area)') ?></a>
        </li>
   <?php endwhile; wp_reset_postdata(); } else { /** no posts found **/ } ?>

      
                </ul>
              </div>
              <div class="overlay"></div>
            </article>

          </div>
        </section>

        

        <section class="sec-blue-float pad-70 ">
          <div class="main-hldr">
            <article>
              <aside class="bg-img">
                <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-op.png"> -->
                <div class="overlay"></div>
              </aside>
              <div class="hldr">
                <article>

                  <ul class="pad-0 listn fac-list">
                    <li>

                      <div class="img-parent">
                        <div class="img-hldr">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/boi-flag.png">
                        </div>
                        <div class="img-hldr">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/us-green.png">
                        </div>
                      </div>

                      <p>Our state-of-the-art facilities have been designed under strict "green building" guidelines that enable efficient use of energy and other resources.</p>

                      <p>Our facilities have been recognized as pioneering by the government. Our Taguig development is LEED-registered and awaiting certification.</p>
                      
                    </li> 

                    <li>
                      <aside class="sites">
                        <div class="box1 box-trig"><a href="#caloocan-port-area"></a></div>
                        <div class="box2 box-trig"><a href="#taguig"></a></div>
                        <div class="box3 box-trig"><a href="#alabang"></a></div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/orca-sites.png">
                      </aside>
                    </li>
                  </ul>

                  
                </article>

              </div>



            </article>
            <aside>
              
            </aside>
          </div>

        </section>


       <?php
	   $args = array('post_type' => 'facility', 'posts_per_page' => -1);
	   $the_query = new WP_Query($args);
	   $ctr = 0; # Counter for outer repeater
	   if ( $the_query->have_posts() ) {  while ( $the_query->have_posts() ): $the_query->the_post(); ?>
	    
        <section class="pad-70 orca-loc <?php echo ((++$ctr)%2 != 0) ? 'black-right': 'black-left' ?>" id="<?php echo get_post_field( 'post_name')  ?>">
          <div class="top white-bg">
            <div class="main-parent">
              <div class="left">
                <h3 class="sec-title"><?php echo get_the_title() ?></h3>

                <ul class="pad-0 listn det-list">
                  <li>
                    <div class="parent cmn-class">
                      <h4>Total Capacity:</h4>
                      <h5><?php echo get_field('total_capacity') ?></h5>
                    </div>
                  </li>
                  <li>
                    <div class="parent cmn-class">
                      <h4>Start of Operations:</h4> 
                      <h5><?php echo get_field('start_of_operations') ?></h5>
                    </div>
                  </li>
                  <li>
                    <div class="parent-off cmn-class">
                      <h4>Points of Interests:</h4> 
                      <ul class="pad-0 listn">
                        <?php echo get_field('points_of_interests') ?>

                      </ul>
                    </div>
                  </li>

                  <li>
                    <div class="parent-off cmn-class">
                      <h4>Address:</h4>
                      <p><?php echo get_field('address') ?></p>

                      <span class="note">For Waze navigation, search for “<span class="blue"><?php echo get_field('waze_navigation') ?></span>”</span>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="right">
                <aside>
                  <img src="<?php echo get_field('map_image')['url'] ?>">
                  <a href="<?php echo get_field('map_image')['url'] ?>" class="full-size image-popup-no-margins"><img src="<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/images/fullsize.png"></a>
                </aside>
              </div>
            </div>

            <div class="drk-portion"></div>

          </div>
          <div class="map">
            <?php echo get_field('map_iframe') ?>
          </div>
          <div class="btn-view">
            <a href="<?php echo get_field('google_map_link') ?>" target="_blank">View Google Map</a>
          </div>
        </section>

	   <?php endwhile; wp_reset_postdata(); } else { /** no posts found **/ } ?>
 <script type="text/javascript">
    $(function() {
      /*$('.test-popup-link').magnificPopup({
        type: 'image'
        // other options
      });*/

      $('.image-popup-no-margins').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        closeBtnInside: false,
        fixedContentPos: true,
        mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
        image: {
          verticalFit: true
        },
        zoom: {
          enabled: true,
          duration: 300 // don't foget to change the duration also in CSS
        }
      });


      $('.facilities .hero .hero-list li a[href*="#"]:not([href="#"]), .facilities .sec-blue-float .main-hldr > article .fac-list li .sites .box-trig a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
              $('html, body').animate({
                  scrollTop: target.offset().top
              }, 1000);
              return false;
          }
        }
      });
    });

  </script>
         
   <?php 
   endwhile;
   get_footer();