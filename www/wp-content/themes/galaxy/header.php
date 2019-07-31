<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?> style="margin-top: 0px!important;">
	<head profile="http://gmpg.org/xfn/11">
		<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="<?php echo get_bloginfo( 'template_url' ); ?>/img/favicon.ico"/>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap&subset=cyrillic" rel="stylesheet">
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
		<meta name='yandex-verification' content='69a974ac011cc21d' />
		<?php wp_head(); ?>
		<script type='text/javascript'>
		/* <![CDATA[ */
		var changetemplatecolor_object = {"changetemplatecolor_ajax_url":"https:\/\/smartdata.tonytemplates.com\/car-repair-service\/car2\/wp-content\/plugins\/Color-Change-template\/img\/color-setting.png","changetemplate_logo_red":"https:\/\/smartdata.tonytemplates.com\/car-repair-service\/car2\/wp-content\/plugins\/Color-Change-template\/img\/logo-red-2.png","changetemplate_logo_orange":"https:\/\/smartdata.tonytemplates.com\/car-repair-service\/car2\/wp-content\/plugins\/Color-Change-template\/img\/logo-orange-2.png","changetemplate_logo_yellow":"https:\/\/smartdata.tonytemplates.com\/car-repair-service\/car2\/wp-content\/plugins\/Color-Change-template\/img\/logo-2.png","changetemplate_logo_green":"https:\/\/smartdata.tonytemplates.com\/car-repair-service\/car2\/wp-content\/plugins\/Color-Change-template\/img\/logo-green-2.png","changetemplate_logo_turquoise":"https:\/\/smartdata.tonytemplates.com\/car-repair-service\/car2\/wp-content\/plugins\/Color-Change-template\/img\/logo-turquoise-2.png","changetemplate_logo_blue":"https:\/\/smartdata.tonytemplates.com\/car-repair-service\/car2\/wp-content\/plugins\/Color-Change-template\/img\/logo-blue-2.png","changetemplate_logo_violet":"https:\/\/smartdata.tonytemplates.com\/car-repair-service\/car2\/wp-content\/plugins\/Color-Change-template\/img\/logo-violet-2.png","color_url":"https:\/\/smartdata.tonytemplates.com\/car-repair-service\/car2\/wp-content\/plugins\/Color-Change-template\/css\/"};
		var changetemplateimg_object = {"ajax_url":"https:\/\/smartdata.tonytemplates.com\/car-repair-service\/car2\/wp-admin\/admin-ajax.php","setting_icon":"https:\/\/smartdata.tonytemplates.com\/car-repair-service\/car2\/wp-content\/plugins\/Color-Change-template\/img\/layout-setting.png","layout1_img":"https:\/\/smartdata.tonytemplates.com\/car-repair-service\/car2\/wp-content\/plugins\/Color-Change-template\/img\/layout-1.png","layout2_img":"https:\/\/smartdata.tonytemplates.com\/car-repair-service\/car2\/wp-content\/plugins\/Color-Change-template\/img\/layout-2.png","layout3_img":"https:\/\/smartdata.tonytemplates.com\/car-repair-service\/car2\/wp-content\/plugins\/Color-Change-template\/img\/layout-3.png"};
		/* ]]> */
		</script>
		
	</head>
		<body <?php body_class('layout-2'); ?>>
		    <!-- Loader -->
			<div id="loader-wrapper">
				<div class="loader">
					<div class="line"></div>
					<div class="line"></div>
					<div class="line"></div>
					<div class="line"></div>
					<div class="line"></div>
					<div class="line"></div>
					<div class="subline"></div>
					<div class="subline"></div>
					<div class="subline"></div>
					<div class="subline"></div>
					<div class="subline"></div>
					<div class="loader-circle-1">
						<div class="loader-circle-2"></div>
					</div>
					<div class="needle"></div>
					<div class="loading"><?php _e( 'Загрузка', 'galaxy' ); ?></div>
				</div>
			</div>
			<!-- //Loader -->
			<!-- Header -->
			<header class="page-header-2 sticky">
            	<div class="header-info-mobile">
        			<div class="header-info-mobile-inside">
						<p>
							<i class="icon icon-locate"></i>
							<?php echo get_field( 'header_adres', 'option' ); ?>
						</p>
						<p>
							<i class="icon icon-phone"></i>
							<?php echo get_field( 'header_phone', 'option' ); ?>
						</p>
						<p>
							<i class="icon icon-email"></i>
							<?php echo get_field( 'header_email', 'option' ); ?>
						</p>
						<?php if ( get_field( 'header_clock', 'option' ) != '' ) { ?>
						<p>
							<i class="icon icon-clock"></i>
							<?php echo get_field( 'header_clock', 'option' ); ?>
						</p>
						<?php } ?>
					</div>
				</div>

				<div class="header-topline">
                    <div class="header-info-toggle">
						<i class="icon-locate js-info-toggle"></i>
					</div>
            		<div class="header-right-top">
                        <a href="#" class="appointment" data-toggle="modal" data-target="#appointmentForm"><i class="icon-shape icon">
						</i>
							<span>Онлайн заявка</span>
						</a>
					</div>
					
					<div class="container">
                		<div class="row-flex">
                    		<div class="col-left"><i class="icon icon-clock"></i>
								Время работы: <?php echo get_field( 'header_clock', 'option' ); ?>
							</div>

							<div class="col-center">
								<i class="icon icon-phone"></i>
								<span class="hidden-md">
									Кпуглосуточно:
								</span>
								<a href="tel:<?php echo get_field( 'header_hot_phone', 'option' ); ?>" class="header-phone"><?php echo get_field( 'header_hot_phone', 'option' ); ?></a>
							</div>
							
							<div class="col-right">
                        		<i class="icon icon-locate"></i>
								<?php echo get_field( 'header_adres', 'option' ); ?>
							</div>
                		</div>
            		</div>
				</div>
				
				<nav class="navbar" id="slide-nav">
            		<div class="container">
                		<div class="header-row">
                            <div class="logo">
								<?php echo get_custom_logo(); ?>
							</div>

							<?php
								wp_nav_menu( array(
									'container'       => 'div',
									'container_class' => '',
									'container_id'    => 'slidemenu',
									'menu_class'      => 'nav navbar-nav',
									'menu_id'         => 'menu-primary-menu',
									'before'          => '',
									'after'           => '',
									'link_before'     => '',
									'link_after'      => '',
									'depth'           => 0,
									'walker'          => new True_Walker_Nav_Menu(),
									'theme_location'  => 'main'
								) );
							?>

							<div class="header-row-right">
                                <div class="search-container-wrap">
                            		<div class="search-container">
                                		<form role="search" method="get" class="search-form" action="">
											<input type="search" id="search-form" class="search-field" placeholder="Поиск &hellip;" value="" name="s" />
											<button type="submit" class="button">
												<i class="icon icon-search"></i>
											</button>
										</form>
									</div>
								</div>
								
								<button type="button" class="navbar-toggle">
									<i class="icon icon-lines-menu"></i>
								</button>
                    	</div>
                	</div>
            	</div>
        	</nav>
    	</header>
							


