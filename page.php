<?php
get_header();
while (have_posts()){
    the_post();



    ?>
     <div class="page-banner">
     <p>hello</p>
    <div class="page-banner__bg-image" style="background-image: url(<?php get_theme_file_uri('/images/ocean.jpg');?>)"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title();?></h1>
      <div class="page-banner__intro">
        <p>Learn how the school of your dreams got started.</p>
      </div>
    </div>  
  </div>



  <div class="container container--narrow page-section">

  
  <?php

  // function to check if it the parent or not.

  $parentId= wp_get_post_parent_id(get_the_ID());

  /// $parentID will equal False when it is parent, else it will return the parent Id
if($parentId ){

?>
 <div class="metabox metabox--position-up metabox--with-home-link">              
 <!-- dynamic children and parent page-->
      <p><a class="metabox__blog-home-link" href=" <?php echo get_permalink($parentId); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php
      echo get_the_title($parentId);?></a>
       <span class="metabox__main"> <?php the_title();?> </span></p>

      <!-- //  get_the_title () vs get_title is different form each other, the_title() retrieve the current page title -->
    </div>
    
    <div class="page-links">


    

    <?php

    // function to test if it is not parent

    $testing= get_pages(
      array(
        'child_of' => get_the_ID()
      )
    );

    if($parentId or $testing){

      ?>
      <h2 class="page-links__title"><a href="<?php echo get_permalink($parentId);?>"><?php echo get_the_title($parentId);?></a></h2>
      <ul class="min-list">

      <!-- to list the menu sidebar with children of the parent -->
      <?php  
        if($parentId){     //condition would be fales if it is parent.
          $IdParent= $parentId;

        }

        // when it is not parent it go to this place
        else{
          $IdParent= get_the_ID();
          

        }

        // function to list page

        wp_list_pages(array(
          'title_li' => NULL,
          'child_of' => $IdParent

        ));
      
      ?>
     <?php
      }
      ?>
        
      </ul>
    </div>
<?php
}
?>


   

    <div class="generic-content">
        <?php the_content(); ?>
    </div>

  </div>


    <?php
}

get_footer();
?>