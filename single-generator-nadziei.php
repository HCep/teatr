
<?php get_header();?>
<section >
<div class="container-fluid">
<main>
    <div class="row">
   
 <div class="col-12">
     <div class="row">
     <div class="col-8"> <?php understrap_post_nav(); ?></div>
     <?php $perma_link = get_permalink(731); 
     $generator_title = get_the_title(731);
     
     ?>
   
      
    
     <div class="col-4"><a class="" href="<?php echo $perma_link; ?>"><?php echo  $generator_title; ?> <i class="fa fa-angle-right"></i></a></div>
     </div>
    
     <?php
     the_content(); ?>

     
 </div>

</div>

</main>
</div>
</section>
<?php get_footer();?>