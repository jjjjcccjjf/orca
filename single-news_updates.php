<?php
get_header();
while(have_posts()): the_post();
?>


<div class="about">

 
 
        <section class="sec-blue-float pad-70">
          <div class="main-hldr">
            <article>
              <aside class="bg-img">
                <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tower.png"> -->
                <div class="overlay"></div>
              </aside>
              <div class="hldr">
                <article>
                  <h3>News & updates</h3>
                  <h2 class="font-36"><span class="reg"><?php echo get_the_title(); ?></h2>

                  <p><?php echo get_the_content() ?></p>

                </article>

              </div>



            </article>
            <aside>

            </aside>
          </div>
 
        </section>

         

<?php 
endwhile;
get_footer();