   <?php
   /* Template Name: FAQs */
   get_header();
   while(have_posts()): the_post();
   ?>

<div class="faqs">

  <section class="banner pad-70">
    <aside>
        <img src="<?php echo get_template_directory_uri(); ?>/assetsimages/faqs.jpg">
    </aside>
    
    <div class="hldr">
      <article>
        <div class="hero">
          <h3 class="hero-title">FAQs</h3>
        </div>
        <div class="overlay"></div>
      </article>

    </div>
  </section>

  <section class="pad-70 sec-2">
    <div class="hldr">
      <aside class="white-bg"></aside>
      <article>
        <ul class="pad-0 listn">
          <?php $counter = 1; foreach (get_field('faqs_repeater') as $value): ?>
            
          <li>
            <div class="item">
              <aside>
                <div class="img-hldr">
                  <img src="<?php echo $value['image']['url']; ?>">
                  <span class="circleface">
                    <span class="circlemain"><?php echo $counter++; ?></span>
                  </span>
                </div>
              </aside>
              <article>
                <h4><?php echo $value['title'] ?></h4>
                <p><?php echo $value['body'] ?></p>
              </article>
            </div>
          </li>

          <?php endforeach ?>

        </ul>
      </article>
    </div>
  </section>

    <script type="text/javascript">
    $(document).ready(function(){

      var listAn = $('.faqs .sec-2 .hldr article ul li');
      console.log(listAn.length);

      for(i = 0; i < listAn.length; i++){
        $(listAn[i]).css("animation-delay", (i / 2) + "s");
      }

    });
  </script>

   <?php 
   endwhile;
   get_footer();