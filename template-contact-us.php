<?php
/* Template Name: Contact us */
get_header();
while(have_posts()): the_post();
?>

<div class="contact">

        <section class="banner pad-70">
          <aside>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact.jpg">
          </aside>
          
          <div class="hldr">
            <article>
              <div class="hero">
                <h3 class="hero-title">CONTACT <br> US</h3>
              </div>
              <div class="overlay"></div>
            </article>

          </div>
        </section>

<?php 
endwhile;
get_footer();