

        <footer class="pad-70">
          <span class="gray-stripe"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gray-stripe.png"></span>
          <div class="main-hldr">
            <article>
              <aside><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pearls.png"></aside>
              <h3 class="sec-title">Contact Us</h3>
            	<?php echo do_shortcode('[contact-form-7 id="28" title="Contact us"]'); ?>
            </article>
            <aside>
              
                <div class="hldr">
                  <div class="top">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-circle.png">
                    <h4>Our Facilities</h4>
                  </div>
                  <ul class="pad-0 listn">
                       <?php
					   $args = array('post_type' => 'facility', 'posts_per_page' => -1);
					   $the_query = new WP_Query($args);
					   if ( $the_query->have_posts() ) {  while ( $the_query->have_posts() ): $the_query->the_post(); ?>
	                    <li>
	                      <h5><?php echo get_the_title(); ?></h5>
	                      <p><?php echo get_field('address'); ?></p>
	                    </li>
					   <?php endwhile; wp_reset_postdata(); } else { /** no posts found **/ } ?>
                  </ul>
                </div>
              
              
              
            </aside>
          </div>
        </footer>



      </div>
      
      <div class="footer-btm pad-70">
        <div class="hldr">
          <ul class="pad-0 listn fnav">
            <li>
              <a href="<?php echo get_permalink(6) ?>">Home</a>
            </li>
            <li>
              <a href="<?php echo get_permalink(31) ?>">About Orca</a> 
            </li>
            <li>
              <a href="<?php echo get_permalink(49) ?>">Services</a>
            </li>
            <li>
              <a href="<?php echo get_permalink(29) ?>">Facilities</a>
            </li>
            <li>
              <a href="<?php echo get_permalink(67) ?>">ORCA Technology</a>
            </li>
            <li>
              <a href="<?php echo get_permalink(106) ?>">News & Updates</a>
            </li>
            <li>
              <a href="<?php echo get_permalink(83) ?>">FAQs</a>
            </li>
            <li>
              <a href="<?php echo get_permalink(12) ?>">Contact Us</a>
            </li>
          </ul>

          <ul class="pad-0 listn cfooter">
            <li><p>Copyright 2019. ORCA Cold Chain Solutions. Sitemap</p></li>
            <li><a href="<?php echo get_permalink(3) ?>">Privacy Policy</a></li>
            <li><a href="#">Terms of Use</a></li>
          </ul>
        </div>

      </div>



      <div class="follow">
          <ul class="pad-0 listn">
            <li>
              <h5>Follow Us</h5>
              <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/follow.png"></a>
            </li>
            <li>
              <a href="<?php echo get_field('social_facebook', 6) ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/fb-icon-white.png"></a>
            </li>
            <li>
              <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/youtube-icon-white.png"></a>
            </li>
          </ul>
      </div>
     
  </div>

  <script type="text/javascript">
    $(document).ready(function(){

          /*new script 7/26/2019*/
      var circleList =  $('.circle--sec .main-hldr > article ul > li');
      
      for (i = 0; i < circleList.length; i++){
        $(circleList[i]).css("animation-delay" , (i / 3) + 's');
      }
      var homeWorking = $('.home .sec-4 .main-hldr .main-list > li');
      console.log(homeWorking.length);
      for (i = 0; i < homeWorking.length; i++){
        $(homeWorking[i]).css("animation-delay", (i / 3) + 's');
      }
      

      $('.home-carousel').owlCarousel({
        loop:true,
        margin:0,
        nav:true,
        animateOut: 'fadeOut',
        autoplay:true,
        autoHeight: true,
        autoplayTimeout:5000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
      });

      var x = $('.home .sec-2 .main-hldr > article .hldr article h3').outerHeight();

      $('.home .sec-2 .main-hldr > article .hldr aside').css("padding-top", x + "px");

      var q = $('.benchmarks .top .getW').width() / $('.benchmarks .top').outerWidth() * 100 + 30;
      $('.benchmarks .top .getW').css("max-width", q + "%");
      var qx = 100 - q;
      // console.log(qx);
      $('.benchmarks .top span:first-of-type').css("max-width", qx + "%");
      $('.benchmarks .top span:last-of-type').css("max-width", qx + "%");


        $('.popup-with-form').magnificPopup({
            type: 'inline'
        });

        $('.burger').on('click', function(){
          $('header .menu-hldr').toggleClass("active");
          $('body').toggleClass("nav-open");
          $('.burger').toggleClass("active").toggleClass("not-active").removeClass("onload");
        });

        $('.banner').addClass("active");
      });
        
      

  </script>
 <?php wp_footer(); ?>
</body>

</html>