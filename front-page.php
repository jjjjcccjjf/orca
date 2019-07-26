<?php
/* Template Name: Home */
get_header();
while(have_posts()): the_post();
?>


      <div class="home">

        <section class="sec-1 pad-70">
          <div class=" home-carousel owl-carousel owl-theme">
 
            <?php foreach (get_field('hero_slider') as $value): ?>
              
            <div class="item">
              <aside>
                <img src="<?php echo $value['image']['url'] ?>">
              </aside>
              <article>
                <div class="hldr">
                  <h3 class="hero-title"><?php echo $value['title'] ?></h3>
                  <p><?php echo $value['body'] ?></p>
                </div>
              </article>
            </div>
            <?php endforeach ?>

          </div>
          
        </section>

        <section class="sec-blue-float pad-70">
          <div class="main-hldr">
            <article>
              <aside class="bg-img">
                <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-2.png"> -->
                <div class="overlay"></div>
              </aside>
              <div class="hldr">
                <article>
                  <h3 class="font-36"><?php echo get_field('panel_2_title') ?></h3>
                  <h2 class="sec-title"><span class="test"><?php echo get_field('panel_2_sub_title') ?></span></h2>

                  <p><?php echo get_field('panel_2_body') ?></p>

                  <div class="learn-more-blue">
                    <a href="<?php echo get_permalink(31) ?>">Learn More</a>
                  </div>

                </article>


                <aside class="clearfix">
                  <div class="play-hldr">
                    <a href="#video-pop" class="popup-with-form fd-top"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/play-btn-new.png"></a>
                  </div>
                  <a  href="#video-pop" class="popup-with-form fd-top">Watch Video</a>
                </aside>


              </div>



            </article>
            <aside>

            </aside>
          </div>

          <div class="benchmarks">
            <div class="top">
              <span></span>
              <h3 class="getW">Our Benchmarks</h3>
              <span></span>
            </div>
            <div class="content">
 
                <?php foreach (get_field('our_benchmarks_repeater') as $value): ?>
                  
                <div class="parent">
                  <div class="children"><h3 class="count"><?php echo $value['number'] ?></h3></div>
                  <div class="children"><p><?php echo $value['title'] ?></p></div>
                </div>
                <?php endforeach ?>

              </div>
            </div>
        </section>


        <section class="circle--sec pad-70">
          <div class="main-hldr">
            <article>
              <h3 class="sec-title">Top-notch Services</h3>
              <p>Redefining cold storage solutions using world-class automation. </p>


              <ul class="pad-0 listn">

              <?php foreach (get_field('top_notch_services') as $value): ?>

                <li>
                  <div class="item">
                    <span class="img-hldr">
                      <img src="<?php echo $value['image']['url'] ?>">
                    </span>
                    <div class="main-circle"></div>
                    <article>
                      <h4 class="item-title"><?php echo $value['title'] ?></h4>
                      <?php echo $value['body'] ?>
                    </article>
                  </div>
                </li>

              <?php endforeach ?>
 
              </ul>

              <span class="sliding-letters">Services</span>

            </article>

            <aside>
              <div class="learn-more-blue">
                <a href="<?php echo get_permalink(49) ?>">Learn More</a>
              </div>
            </aside>

          </div>
        </section>

        <section class="sec-4 pad-70">
          <div class="main-hldr">
            <ul class="pad-0 listn main-list">
              <li>
                <h3 class="sec-title"><?php echo get_field('partners_header') ?></h3>
                <span class="strife"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/stripe.png"></span>
              </li>
              <li>
                <p><?php echo get_field('partners_body') ?></p>
              </li>
              <li>
                <ul class="pad-0 listn">
                  <?php foreach (get_field('partners_image') as $value): ?>
                    <li>
                      <img src="<?php echo $value['image']['url'] ?>">
                    </li>
                  <?php endforeach ?>
                </ul>
              </li>
            </ul>
            
          </div>
        </section>

<script type="text/javascript">
  $(document).ready(function(){

    //this codes are for home page only

    if( $(window).width() > 999 ){
      var textWidth = $('.home .sec-blue-float .sec-title .test').width();
      console.log(textWidth);

      var needWidth = textWidth + 30;
      console.log(needWidth);

      var h3Height = $('.home .sec-blue-float .main-hldr > article .hldr article h3').outerHeight() / 2;
      console.log(h3Height + 'asd');
      var playWidth = $('.home .sec-blue-float .main-hldr > article .hldr aside .play-hldr').width() / 2;
      var sideWidth = $('.home .sec-blue-float .main-hldr > article .hldr aside').width() - playWidth;
      console.log(sideWidth);

     
      var conWid = $('.home .sec-blue-float .main-hldr > article .hldr article').width() - textWidth;
      console.log(conWid);

      $('.home .sec-blue-float .sec-title .extended-line').css({
        "left" : needWidth,
        "max-width" : conWid + sideWidth
      });

      $('.home .sec-blue-float .main-hldr > article .hldr aside').css("padding-top", h3Height);
      }




  });

  </script>
  
<?php 
endwhile;
get_footer();