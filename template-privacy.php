<?php
/* Template Name: Privacy Policy */
get_header();
while(have_posts()): the_post();
?>

<div class="privacy">

        <section class="banner pad-70">
          <aside>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about.jpg">
          </aside>
          
          <div class="hldr">
            <article>
              <div class="hero">
                <h3 class="hero-title">PRIVACY <br>POLICY</h3>
                <h5>Jump To:</h5>
                <ul class="pad-0 listn hero-list">
                  <li class="<?php echo (get_the_ID()==3)?'active':'' ?>">
                    <a href="<?php echo get_permalink(3) ?>">Isoc Cold Chain Logistics, Inc</a>
                  </li>
                  <li class="<?php echo (get_the_ID()==153)?'active':'' ?>">
                    <a href="<?php echo get_permalink(153) ?>">Arendelle</a>
                  </li>
                  <li class="<?php echo (get_the_ID()==158)?'active':'' ?>">
                    <a href="<?php echo get_permalink(158) ?>">Penguin</a>
                  </li>
                  <li class="<?php echo (get_the_ID()==161)?'active':'' ?>">
                    <a href="<?php echo get_permalink(161) ?>">Eisenberg</a>
                  </li>
                </ul>
              </div>
              <div class="overlay"></div>
            </article>

          </div>
        </section>

        <section class="pad-70 sec-2">
          <div class="wrp">
            <div class="main-hldr">
              <article id="acc-hldr">
                <ul class="pad-0 listn">
             
                 <?php $counter = 1; 
                 foreach (get_field('privacy_policy_repeater') as $value): ?>
                 	
                  <li>
                    <div class="acc <?php echo $counter === 1? 'active': ''; ?>" id="tab<?php echo $counter; ?>">
                      <div class="top">
                        <h4><a href="#tab<?php echo $counter++; ?>"><?php echo $value['title'] ?></a><span class="angle-hldr"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/angle-down.png"></span></h4>

                      </div>
                      <div class="body">
                        <div class="panel-cs">
                          <p><?php echo $value['body'] ?></p>
                        </div>
                      </div>
                    </div>
                  </li>
                 <?php endforeach ?>
                </ul>

                  <div class="back-to-tp">
                  <a href="#acc-hldr"><i class="fa fa-angle-double-up"></i>Back to Top</a>
                </div>  
              </article>


              <aside>
                <ul class="pad-0 listn side-accnav">
           	  <?php $counter = 1; foreach (get_field('privacy_policy_repeater') as $value): ?>
                  <li><a href="#tab<?php echo $counter++; ?>"><?php echo $value['title'] ?></a></li>
              <?php endforeach ?>
                </ul>
              </aside>
              <div class="box-blue"></div>
            </div>
          </div>
        </section>

  <script type="text/javascript">
  $(document).ready(function(){

    $('.acc .top h4 a').on('click', function(){
      var x = $('.acc');
      x.removeClass("active");
      var q = $(this).attr("href");
      $(q).addClass("active");
      return false;
    });

    $('.side-accnav li a').on('click', function(){
      var x = $(this).attr("href");
      $(x + ' .top h4 a').trigger("click");
      console.log(x + ' .top h4 a');
      var top = $('.acc.active').offset().top;
      console.log(top);
      $('html, body').animate({scrollTop: top}, 1000);
    });
    

  });

  </script>


<script type="text/javascript">
    $(document).ready(function(){
      $('.banner').addClass("active");

      var anilist3 = $('.privacy .sec-2 .wrp .main-hldr > aside ul li');

      for(i = 0; i < anilist3.length; i++){
        $(anilist3[i]).css("animation-delay", (i / 3) + "s");
      } 

      $('.back-to-tp a[href*="#"]:not([href="#"])').click(function() {
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