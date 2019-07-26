<?php
/* Template Name: About us */
get_header();
while(have_posts()): the_post();
?>


<div class="about">

        <section class="banner pad-70">
          <aside>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about.jpg">
          </aside>
          
          <div class="hldr">
            <article>
              <div class="hero">
                <h3 class="hero-title">About Orca</h3>
                <p><?php echo get_field('description') ?></p>
              </div>
              <div class="overlay"></div>
            </article>

          </div>
        </section>



        <section class="vision pad-70">
          <div class="hldr">
            <span class="quote-left"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/quote-left.png"></span>
            <span class="quote-right"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/quote-right.png"></span>
            <div class="cont">
              <h3>Vision</h3>
              <h4 class="sec-title"><?php echo get_field('vision') ?></h4>
            </div>
          </div>

        </section>

        <section class="sec-blue-float pad-70">
          <div class="main-hldr">
            <article>
              <aside class="bg-img">
                <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tower.png"> -->
                <div class="overlay"></div>
              </aside>
              <div class="hldr">
                <article>
                  <h3>Our Parent Company</h3>
                  <h2 class="font-36"><span class="reg">About</span> ISOC Holdings, Inc</h2>

                  <p><?php echo get_field('parent_company_description') ?></p>

                 

                </article>

              </div>



            </article>
            <aside>

            </aside>
          </div>

          <div class="benchmarks">
            <div class="top">
              <span></span>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/isoc.png" class="getW img-title">
              <span></span>
            </div>
            <div class="content">
              <div class="hldr">
                <aside class="overlap-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image-4.jpg">
                  <span class="cover-blue"></span>
                </aside>
                <div class="visit">
                  <a href="<?php echo get_field('parent_company_url') ?>">Visit Website</a>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="circle--sec pad-70">
          <div class="main-hldr">
            <article>
              <h3 class="sec-title">Core Values</h3>
              <ul class="pad-0 listn">
                <?php foreach (get_field('core_values') as $value): ?>
                <li>
                  <div class="item">
                    <span class="img-hldr">
                      <img src="<?php echo $value['image']['url']; ?>">
                    </span>
                    <div class="main-circle"></div>
                    <article>
                      <h4 class="item-title"><?php echo $value['title'] ?></h4>
                      <p><?php echo $value['body'] ?></p>
                    </article>
                  </div>
                </li>
                <?php endforeach ?>

              </ul>

            </article>

            <aside>
              <span class="vert-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/core.png"></span>
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
     
    });
  </script>

<?php 
endwhile;
get_footer();