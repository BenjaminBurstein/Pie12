<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pie
 */

use WPForms\Integrations\Divi\Divi;

get_header();
?>
<main id="primary" class="site-main">
    <?php if ( have_posts()) : ?>
        <?php
		while ( have_posts() ) :
            the_post()	;  		
		?>
        <?php  
        $img = []; 
        $title =[];
        setlocale (LC_TIME, 'fr_FR.utf8','fra');
        $date = [];
        $tag =  [];
        $tempoTag = [];

        foreach(get_posts() as $post) : 
               $img[] = get_field("img");
               $title[] = $post->post_title;
                $date[] = $post->post_date;
                
            if(get_field("tag_1") != null){
                $tempoTag[] = get_field("tag_1");
            }
            if(get_field("tag_2") != null){
                $tempoTag[] = get_field("tag_2");
            }
            if(get_field("tag_3") != null){
                $tempoTag[] = get_field("tag_3");
            }
            $tag[] = $tempoTag;
            $tempoTag = [];
            
              
        endforeach; ?>
        
        <div class="row mt-5 mb-5">
            <div class="col-lg-1"></div>
           <div class="col-lg-5 container">
            <?php if(isset($img[0])) :  ?>
              <img id="img_firstposts" class="img_posts " src="<?= $img[0] ?>">
              <div class="desc_posts">
                  <div class="tag_posts">
                  <?php for( $i=0; $i<sizeof($tag[0]); $i++) : ?>
                     <div class="tagcont_posts">
                         <p class="tagname_posts">
                             <?= $tag[0][$i]; ?>
                         </p>
                     </div>
                     <?php   endfor;  ?>
                  </div>
                  
              <p class="desc"> <?= substr($title[0], 0, 23).'...'; ?></p>
              <div class="date_posts">
                        <img  src="<?php echo get_template_directory_uri(); ?>/img/calendar.png" alt="#"/> 
                        <p class="date"> <?= strftime("%d %B %G", strtotime($date[0])); ?> </p>       
                        </div> 
              </div>
              
           <?php endif; ?>
           </div>
          
           <div class="col-lg-6">
           <div class="row">
                <div class="col-lg-6 ">
                    <div class="container">
                    <?php if(isset($img[1])) :  ?>
                        <img class="img_posts" src="<?= $img[1] ?>">
                        <div class="desc_posts">
                        <div class="tag_posts">
                  <?php for( $i=0; $i<sizeof($tag[1]); $i++) : ?>
                     <div class="tagcont_posts">
                         <p class="tagname_posts">
                             <?= $tag[1][$i]; ?>
                         </p>
                     </div>
                     <?php   endfor;  ?>
                  </div>
                        <p class="desc"> <?= substr($title[1], 0, 23).'...'; ?></p>
                      
                        <div class="date_posts">
                        <img  src="<?php echo get_template_directory_uri(); ?>/img/calendar.png" alt="#"/> 
                        <p class="date"> <?= strftime(" %d %B %G", strtotime($date[1])); ?> </p>       
                        </div>
                        
                        </div>
                        
                    <?php endif; ?>
                    </div>
                  <div class="container">
                  <?php if(isset($img[2])) :  ?>
                        <img class="img_posts mt-3" src="<?= $img[2] ?>">
                        <div class="desc_posts">
                        <div class="tag_posts">
                  <?php for( $i=0; $i<sizeof($tag[2]); $i++) : ?>
                     <div class="tagcont_posts">
                         <p class="tagname_posts">
                             <?= $tag[2][$i]; ?>
                         </p>
                     </div>
                     <?php   endfor;  ?>
                  </div>
                        <p class="desc"> <?= substr($title[2], 0, 23).'...'; ?></p>
                        <div class="date_posts">
                        <img  src="<?php echo get_template_directory_uri(); ?>/img/calendar.png" alt="#"/> 
                        <p class="date"> <?= strftime(" %d %B %G", strtotime($date[2])); ?> </p>       
                        </div>  
                        </div>
                    <?php endif; ?>
                  </div>
                   
                </div>
                <div class="col-lg-6">
                    <div class="container">
                    <?php if(isset($img[3])) :  ?>
                        <img class="img_posts mr-4" src="<?= $img[3] ?>">
                        <div class="desc_posts">
                        <div class="tag_posts">
                  <?php for( $i=0; $i<sizeof($tag[3]); $i++) : ?>
                     <div class="tagcont_posts">
                         <p class="tagname_posts">
                             <?= $tag[3][$i]; ?>
                         </p>
                     </div>
                     <?php   endfor;  ?>
                  </div>
                        <p class="desc"> <?= substr($title[3], 0, 23).'...'; ?></p>
                        <div class="date_posts">
                        <img  src="<?php echo get_template_directory_uri(); ?>/img/calendar.png" alt="#"/> 
                        <p class="date"> <?= strftime(" %d %B %G", strtotime($date[3])); ?> </p>       
                        </div>
                        </div>
                    <?php endif; ?>
                    </div>
                   <div class="container">
                   <?php if(isset($img[4])) :  ?>
                        <img class="img_posts mt-3 mr-4" src="<?= $img[4] ?>">
                        <div class="desc_posts">
                        <div class="tag_posts">
                  <?php for( $i=0; $i<sizeof($tag[4]); $i++) : ?>
                     <div class="tagcont_posts">
                         <p class="tagname_posts">
                             <?= $tag[4][$i]; ?>
                         </p>
                     </div>
                     <?php   endfor;  ?>
                  </div>
                        <p class="desc"> <?= substr($title[4], 0, 23).'...'; ?></p>
                        <div class="date_posts">
                        <img  src="<?php echo get_template_directory_uri(); ?>/img/calendar.png" alt="#"/> 
                        <p class="date"> <?= strftime(" %d %B %G", strtotime($date[4])); ?> </p>       
                        </div>
                              
                        </div>
                    <?php endif; ?>
                   </div>
                    
                </div>
           </div>
           </div>
          
      
        </div>
      
    <?php endwhile; // End of the loop. 
 endif;
 ?>
      
</main><!-- #main -->

<?php
/* get_sidebar(); */
get_footer();
?>