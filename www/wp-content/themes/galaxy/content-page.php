<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  

  <h1 class="<?php echo $entry_title; ?>"><?php the_title(); ?></h1>
  
  <div class="entry-content">
  	<?php the_content(); ?>
	<div class="clear"></div>				
  </div> <!-- end .entry-content -->
  
</div> <!-- end #post-<?php the_ID(); ?> .post_class -->

<?php comments_template( '', true ); ?>