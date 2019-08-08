<?php get_header();	?>
  
    <div id="pageTitle">
        <div class="container">
			<div class="breadcrumbs">
				<!-- Breadcrumb section -->
				<span>
					<span>
						<a href="/" >Главная</a> / 
						<span class="breadcrumb_last" aria-current="page">Сделано</span>
					</span>
				</span>
			</div>
		</div>
		<!--end Breadcrumb section -->

        <!-- .entry-header -->
        <header class="entry-header">
            <div class="container">
                <h1>Сделано</h1>
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
								if ( have_posts()) {
							?>
								<div class="blog-post">
							<?php
									while ( have_posts() ){
										the_post();
							?>
									<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<p><?php echo wp_trim_words( get_the_content(), 30, ' ...' ); ?></p>
									<span class="tags-links pull-left">
									<?php $cat = get_the_category(); foreach( $cat as $item ){ ?>
										<a href="<?php echo get_category_link( $item->term_id ); ?>" rel="tag"><?php echo $item->name; ?></a>
									<?php } ?>
								</span>
									<p><a class="more-link" href="<?php the_permalink(); ?>">Читать далее</a></p>
							<?php
							
									}
							?>
								</div>
							<?php
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
