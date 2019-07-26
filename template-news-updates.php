<?php
/* Template Name: News & updates */
include_once('function-pagination.php');

get_header();
while(have_posts()): the_post();
?>

<div class="news-u">

        <section class="banner pad-70">
          <aside>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact.jpg">
          </aside>
          
          <div class="hldr">
            <article>
              <div class="hero">
                <h3 class="hero-title">NEWS &amp; <br> UPDATES</h3>
              </div>
              <div class="overlay"></div>
            </article>

          </div>
        </section>



        <section class="news-list pad-70">
          <div class="main-hldr">
            
            <article>
              <aside class="side-white"></aside>
              <ul class="pad-0 listn main-list">
  

                <?php
                $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                # QUERY ARGS HERE
                $args = array(
                  'post_type' => 'news_updates',
                  'posts_per_page' => 15, # Count of posts per page
                  'paged' => $paged
                );
                 
                 $the_query = new WP_Query($args);
                 if ( $the_query->have_posts() ) {  while ( $the_query->have_posts() ): $the_query->the_post(); ?>
               
                <li>  
                  <div class="item">
                    <aside>
                      <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                    </aside>
                    <article>
                      <h4><?php echo get_the_title() ?></h4>
                      <ul class="breadcrumbs pad-0 listn">
                        <li>
                          <a href="#">Orca Cold Chain Solutions</a>
                        </li>
                        <li>
                          <h5><?php echo get_the_date() ?></h5>
                        </li>
                      </ul>

                      <p><?php echo get_the_excerpt() ?></p>

                      <a href="<?php echo get_permalink() ?>">Read More ></a>
                    </article>
                  </div>
                </li>

               
                 <?php endwhile; wp_reset_postdata(); } else { /** no posts found **/ } ?>
              </ul>


              <div class="pagination-hldr">
                <div class="parent">


                  <div class="left">
                    <h6>Pages <?php echo $paged ?> of <?php echo $the_query->max_num_pages ?></h6>
                  </div>
                  <div class="right">
                    <ul class="pad-0 pagination-cs listn">
                  <?php 
                  if (function_exists(custom_pagination)) {
                    $pagination = custom_pagination($the_query->max_num_pages,"",$paged);
                  }
                   ?>
                   <?php if($pagination): foreach ($pagination as $value):
                    ?>
                     <li class="<?php echo ($paged == strip_tags($value)) ? 'active':''; ?>">
                       <?php echo $value ?>
                     </li>
                   <?php endforeach; endif; ?>

                   
                    </ul>
                  </div>
                </div>
              </div>

            </article>
          </div>
        </section>

  <script type="text/javascript">
    $(document).ready(function(){
      $('.banner').addClass("active");

      var anilist = $('.news-list .main-hldr > article .main-list > li');
      console.log(anilist.length);

      for(i = 0; i < anilist.length; i++ ){
        console.log(anilist[i]);
        $(anilist[i]).css("animation-delay", (i / 2) + "s");
      }


    });
  </script>

<?php 
endwhile;
get_footer();