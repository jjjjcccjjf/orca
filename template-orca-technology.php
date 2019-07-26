<?php
/* Template Name: Orca technology */
get_header();
while(have_posts()): the_post();
?>

<div class="tech">

        <section class="banner pad-70">
          <aside>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tech.jpg">
          </aside>
          
          <div class="hldr">
            <article>
              <div class="hero">
                <h3 class="hero-title">ORCA <br>TECHNOLOGY</h3>
                <p>Smaller footprint. More storage.</p>
              </div>
              <div class="overlay"></div>
            </article>

          </div>
        </section>

        <section class="sec-blue-float pad-70 ">
          <div class="main-hldr">
            <article>
              <aside class="bg-img">
               <!--  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-op.png"> -->
                <div class="overlay"></div>
              </aside>
              <div class="hldr">
                <article>

                  <h2 class="sec-title">An innovation in cold storage</h2>

                  <p><?php echo get_field('description') ?></p>
                </article>

              </div>



            </article>
            <aside>
              <div class="temp-hldr">
                <div class="item">
                  <ul class="pad-0 listn">
                  	<?php foreach (get_field('temparature_right_panel') as $value): ?>
	                    <li>
	                      <h4><?php echo $value['title'] ?></h4>
	                      <p><?php echo $value['body'] ?></p>
	                    </li>
                  	<?php endforeach ?>
 
                  </ul>
                </div>
              </div> 
            </aside>
          </div>

        </section>

        <section class="circle--sec pad-70 video">
          
          <div class="main-hldr">
            <div class="blue-rec"><span class="tr"></span></div>
            <article>
              <h3 class="sec-title">Watch our Video</h3>
              <div class="iframe-hldr">
              	<?php echo get_field('video_iframe') ?>
              </div>
            </article>

            <aside>
              
            </aside>

          </div>
        </section>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.banner').addClass("active");

      var anilist2 = $('.tech .sec-blue-float .main-hldr > aside .temp-hldr .item ul li');

      for(i = 0; i < anilist2.length; i++){
        $(anilist2[i]).css("animation-delay", (i / 2) + "s");
      }

    });
  </script>

<?php 
endwhile;
get_footer();