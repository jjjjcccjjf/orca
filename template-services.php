<?php
/* Template Name: Services */
get_header();
while(have_posts()): the_post();
?>

<div class="services">

        <section class="banner pad-70">
          <aside>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-banner.jpg">
          </aside>
          
          <div class="hldr">
            <article>
              <div class="hero">
                <h3 class="hero-title">Services</h3>
              </div>
              <div class="overlay"></div>
            </article>

          </div>
        </section>

        <section class="sec-blue-float pad-70 services-float">
          <div class="main-hldr">
            <article>
              <aside class="bg-img">
                <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-op.png"> -->
                <div class="overlay"></div>
              </aside>
              <div class="hldr">
                <article>
                  <div class="stripe-hldr">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stripe.png">
                  </div>

                  <h2 class="font-36"><span class="reg">Because Freshness Matters</h2>

                  <p><?php echo get_field('left_panel_body') ?></p>
                </article>

              </div>



            </article>
            <aside>

            </aside>
          </div>


          <div class="img-frame">
            <span></span>
            <aside>
              <img src="<?php echo get_field('right_panel_image')['url'] ?>">
            </aside>
            <!-- <span></span> -->
          </div>

        </section>

        <section class="circle--sec pad-70">
          <div class="blue-rec"></div>
          <div class="main-hldr">
            <article>
              <div class="stripe-top">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/black-stripe.png">
              </div>
              <h3 class="sec-title">Our Services</h3>
              <p>We provide a range of best in class services as required across the value chain.</p>
              <ul class="pad-0 listn">
             <?php foreach (get_field('our_services') as $value): ?>
 
                <li>
                  <div class="item">
                    <span class="img-hldr">
                      <img src="<?php echo $value['image']['url'] ?>">
                    </span>
                    <div class="main-circle"></div>
                    <article>
                      <h4 class="item-title"><?php echo strtoupper($value['title']) ?></h4>
                    </article>
                  </div>
                </li>
            <?php endforeach ?>
 
                
              </ul>

              <span class="sliding-letters">Services</span>

            </article>

            <aside>
              
            </aside>

          </div>
        </section>
<script type="text/javascript">
    /*new script 7/26/2019*/
    $(function(){
      var circleList =  $('.circle--sec .main-hldr > article ul > li');
      for (i = 0; i < circleList.length; i++){
        $(circleList[i]).css("animation-delay" , (i / 3) + 's');
      }
      if( $(window).width() > 999 ){
            
            var el = $('.services .circle--sec .blue-rec');
            var y = $('.services .circle--sec .blue-rec').offset().top;
            var z = $('.services .circle--sec').offset().top - 40;
            console.log(z);
          $(window).on('scroll resize', function(){
            var x = $(window).scrollTop();
            console.log(x);
            
          if(x > y){
            el.css({
              "position" : "fixed",
              "top" : "0px"
            });
          } 
          if ( x > z) {
            el.css({
              "position" : "absolute",
              "top" : "-40px"
            });
          }
          if (x < y){
             el.css({
              "position" : "absolute",
              "top" : "-600px"
            });
          }
        });
      }
    });
  </script>

<?php 
endwhile;
get_footer();