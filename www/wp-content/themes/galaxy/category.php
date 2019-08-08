<?php get_header();	?>
  
    <div id="pageTitle">
        <div class="container">
			<div class="breadcrumbs">
				<!-- Breadcrumb section -->
				<span>
					<span>
						<a href="/" >Главная</a> / 
						<span class="breadcrumb_last" aria-current="page"><?php the_title(); ?></span>
					</span>
				</span>
			</div>
		</div>
		<!--end Breadcrumb section -->

        <!-- .entry-header -->
        <header class="entry-header">
            <div class="container">
                <h1><?php the_title(); ?></h1>
            </div>
        </header>
        <!-- .entry-header -->
		<!-- #pageTitle -->
        </div>
		<div id="pageContent">
			<div class="block">
        		<div id="primary" class="container">
					<div class="row">
						<div  id="post-<?php the_ID(); ?>" <?php post_class('col-md-8 content-area'); ?>>
                        <?php
							if ( have_post()) {
                                while ( have_posts() ){
                                    the_post();
                                    the_title();
                                }
                            }
                        ?>
						</div><!-- #post-<?php the_ID(); ?> -->
						<div class="col-md-4">
							<?php get_sidebar(); ?>
						</div>
					</div><!--row -->
				</div><!-- #primary -->
			</div><!-- .block -->
		</div><!-- #pageContent -->
  

<?php get_footer(); ?>
